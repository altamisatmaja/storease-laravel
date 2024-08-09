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

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'thumbnail_portofolio' => 'required',
                'hover_portofolio' => 'required',
                'link_social_media_portofolio' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input['link_social_media_portofolio'] = $request['link_social_media_portofolio'];

            if ($request->hasFile('thumbnail_portofolio')) {
                $gambar = $request->file('thumbnail_portofolio');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['thumbnail_portofolio'] = $nama_gambar;
            } else {
                unset($input['thumbnail_portofolio']);
            }

            if ($request->hasFile('hover_portofolio')) {
                $gambar = $request->file('hover_portofolio');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['hover_portofolio'] = $nama_gambar;
            } else {
                unset($input['hover_portofolio']);
            }

            $portofolio = PortofolioHomePages::create($input);

            if($portofolio){
                return redirect()->route('admin.dashboard.cms.portofolio')->with('success', 'Portofolio baru berhasil ditambahkan!');
            }
            return redirect()->route('admin.dashboard.cms.portofolio')->with('errors', 'Portofolio baru gagal ditambahkan!');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function edit($id){
        return view('pages.dashboard.admin.cms.portofolio.update');
    }

    public function update(Request $request, $id){
        return view('pages.dashboard.admin.cms.portofolio.create');
    }

    public function destroy($id){
        //
    }
}
