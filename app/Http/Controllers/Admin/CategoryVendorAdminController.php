<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VendorCategoryServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryVendorAdminController extends Controller
{
    public function index(){
        $datas = VendorCategoryServices::get();

        return view('pages.dashboard.admin.partner.category.index', compact('datas'));
    }

    public function create(){
        return view('pages.dashboard.admin.partner.category.create');
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'category_name' => 'required',
            ], [
                'category_name.required' => 'Nama kategori wajib diisi.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            $slug = $this->generateSlug($input['category_name']);
            $input['slug'] = $slug;

            VendorCategoryServices::create($input);

            return redirect()->route('admin.dashboard.category')->with('success', 'Data kategori vendor berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.category')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit($slug){
        $category = VendorCategoryServices::where('slug', $slug)->first();

        if (!$category) {
            return redirect()->route('admin.dashboard.category')->with('error', 'Kategori tidak ditemukan.');
        }

        return view('pages.dashboard.admin.partner.category.update', compact('category'));
    }

    public function update(Request $request, $slug){
        try {
            $validator = Validator::make($request->all(), [
                'category_name' => 'required',
            ], [
                'category_name.required' => 'Nama kategori wajib diisi.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $category = VendorCategoryServices::where('slug', $slug)->first();

            if (!$category) {
                return redirect()->route('admin.dashboard.category')->with('error', 'Kategori tidak ditemukan.');
            }

            $input = $request->all();

            $slug = $this->generateSlug($input['category_name']);
            $input['slug'] = $slug;

            $category->update($input);

            return redirect()->route('admin.dashboard.category')->with('success', 'Data kategori vendor berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.category')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }

    public function destroy(Request $request){
        try {
            $category = VendorCategoryServices::find($request->id);

            if (!$category) {
                return redirect()->route('admin.dashboard.category')->with('error', 'Kategori tidak ditemukan.');
            }

            $category->delete();

            return redirect()->route('admin.dashboard.category')->with('success', 'Data kategori vendor berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.category')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }

    public function generateSlug($raw)
    {
        $slug = strtolower($raw);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}
