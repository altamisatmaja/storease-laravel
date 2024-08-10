<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OurServiceAdminController extends Controller
{
    public function index(){
        $ourservices = OurService::get();
        return view('pages.dashboard.admin.cms.ourservice.index', compact('ourservices'));
    }

    public function create(){
        return view('pages.dashboard.admin.cms.ourservice.create');
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'vendor_name' => 'required|string',
                'vendor_image' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input['vendor_name'] = $request->input('vendor_name');

            if ($request->hasFile('vendor_image')) {
                $hover = $request->file('vendor_image');
                $hover_name = time() . rand(1, 9) . '_hover.' . $hover->getClientOriginalExtension();
                $hover->move(public_path('uploads'), $hover_name);
                $input['vendor_image'] = $hover_name;
            }

            $ourservice = OurService::create($input);

            if ($ourservice) {
                return redirect()->route('admin.dashboard.cms.ourservice')->with('success', 'Portofolio baru berhasil ditambahkan!');
            }

            return redirect()->route('admin.dashboard.cms.ourservice')->with('error', 'Portofolio baru gagal ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id){
        $ourservices = OurService::findOrFail($id);
        return view('pages.dashboard.admin.cms.ourservice.update', compact('ourservices'));
    }

    public function update(Request $request, $id){
        try {
            $ourservices = OurService::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'vendor_name' => 'required|string',
                'vendor_image' => 'nullable',
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input['vendor_name'] = $request->input('vendor_name');

            if ($request->hasFile('vendor_image')) {
                $hover = $request->file('vendor_image');
                $hover_name = time() . rand(1, 9) . '_hover.' . $hover->getClientOriginalExtension();
                $hover->move(public_path('uploads'), $hover_name);
                $input['vendor_image'] = $hover_name;
            }

            $ourservices->update($input);

            return redirect()->route('admin.dashboard.cms.ourservice')->with('success', 'Ourservice berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id){
        try {
            $ourservices = OurService::findOrFail($id);

            // $vendor->vendor_images()->delete();
            // $vendor->vendor_services()->delete();
            // $vendor->vendor_team()->delete();

            $ourservices->delete();

            return redirect()->route('admin.dashboard.cms.ourservice')->with('success', 'Our services successfully deleted.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.cms.ourservice')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
