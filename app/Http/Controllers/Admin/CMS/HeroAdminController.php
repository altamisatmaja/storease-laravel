<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeroAdminController extends Controller
{
    public function index(){
        $hero = Hero::all();
        return view('pages.dashboard.admin.cms.hero', compact('hero'));
    }

    public function change_title_home(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $generalTitle = Hero::where('page', 'Home')->first();
            if ($generalTitle) {
                $generalTitle->title = $request->title;
                $generalTitle->save();
                return redirect()->back()->with('success', 'Title updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Content not found.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

        public function change_image_home(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'image.required' => 'Gambar kategori produk wajib diisi dan harus berupa file gambar.',
                'image.image' => 'Gambar kategori produk harus berupa file gambar.',
                'image.mimes' => 'Gambar kategori produk harus memiliki format file jpg, png, jpeg, atau webp.',
                'image.max' => 'Gambar kategori produk harus berukuran 1MB kebawah',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            if ($request->hasFile('image')) {
                $gambar = $request->file('image');
                $nama_gambar = 'hero' . '-' . time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);

                $heroHome = Hero::where('page', 'Home')->first();
                if ($heroHome) {
                    if ($heroHome->image) {
                        $oldImagePath = public_path('uploads/' . $heroHome->image);
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    $heroHome->image = $nama_gambar;
                    $heroHome->save();

                    return redirect()->back()->with('success', 'Gambar home berhasil diubah.');
                } else {
                    return redirect()->back()->with('error', 'Data home tidak ditemukan.');
                }
            } else {
                return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
