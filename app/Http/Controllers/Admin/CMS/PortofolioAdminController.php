<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\PortofolioHomePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortofolioAdminController extends Controller
{
    public function index(){
        $portofolios = PortofolioHomePages::get();

        return view('pages.dashboard.admin.cms.portofolio.index', compact('portofolios'));
    }

    public function create(){
        return view('pages.dashboard.admin.cms.portofolio.create');
    }

    public function store(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'thumbnail_portofolio' => 'required',
            'hover_portofolio' => 'required',
            'link_social_media_portofolio' => 'required|string',
        ]);

        if ($validator->fails()) {
                dd($validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input['link_social_media_portofolio'] = $request->input('link_social_media_portofolio');

        if ($request->hasFile('thumbnail_portofolio')) {
            $thumbnail = $request->file('thumbnail_portofolio');
            $thumbnail_name = time() . rand(1, 9) . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('uploads'), $thumbnail_name);
            $input['thumbnail_portofolio'] = $thumbnail_name;
        }

        if ($request->hasFile('hover_portofolio')) {
            $hover = $request->file('hover_portofolio');
            $hover_name = time() . rand(1, 9) . '_hover.' . $hover->getClientOriginalExtension();
            $hover->move(public_path('uploads'), $hover_name);
            $input['hover_portofolio'] = $hover_name;
        }

        $portofolio = PortofolioHomePages::create($input);

        if ($portofolio) {
            return redirect()->route('admin.dashboard.cms.portofolio')->with('success', 'Portofolio baru berhasil ditambahkan!');
        }

        return redirect()->route('admin.dashboard.cms.portofolio')->with('error', 'Portofolio baru gagal ditambahkan!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}


    public function edit($id){
        $portofolios = PortofolioHomePages::findOrFail($id);

        return view('pages.dashboard.admin.cms.portofolio.update', compact('portofolios'));
    }

    public function update(Request $request, $id){
        return view('pages.dashboard.admin.cms.portofolio.create');
    }

    public function destroy($id){
        //
    }
}
