<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\AboutPages;
use App\Models\Hero;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutAdminController extends Controller
{
    public function index(){
        $about = AboutPages::first();

        return view('pages.dashboard.admin.cms.about', compact('about'));
    }

    public function update(Request $request){
        try {
            $about = AboutPages::first();

            $validator = Validator::make($request->all(), [
                'about_section_description' => 'required',
                'our_vision' => 'required',
                'our_mission' => 'required',
                'about_images' => 'image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'about_section_description.required' => 'Nama wajib diisi.',
                'our_vision.required' => 'Our vision wajib diisi.',
                'our_mission.required' => 'Our mission wajib diisi.',
                'about_images.image' => 'Gambar harus berupa file gambar.',
                'about_images.mimes' => 'Gambar harus memiliki format file jpg, png, jpeg, atau webp.',
                'about_images.max' => 'Gambar harus berukuran 1MB kebawah',
            ]);

            $input = $request->except(['_token', '_method']);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($request->hasFile('about_images')) {
                File::delete('uploads/' . $about->about_images);
                $gambar = $request->file('about_images');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['about_images'] = $nama_gambar;
            } else {
                unset($input['about_images']);
            }

            $data = $about->update($input);

            if($data){
                return redirect()->route('admin.dashboard.cms.about')->with('success', 'Data layout about berhasil diubah');
            } else {
                return redirect()->route('admin.dashboard.cms.about')->with('error', 'Gagal, data layout about berhasil diubah');
            }

        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.cms.about')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
