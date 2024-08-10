<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\VendorCategoryServices;
use App\Models\VendorImages;
use App\Models\VendorServices;
use App\Models\VendorTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerAdminController extends Controller
{
    public function index(){
        $vendors = Vendor::all();
        return view('pages.dashboard.admin.partner.list', compact('vendors'));
    }

    public function create(){
        $categories = VendorCategoryServices::get();

        return view('pages.dashboard.admin.partner.pengajuan.create', compact('categories'));
    }

    public function store(Request $request){
        try {
            $validatedData = Validator::make($request->all(), [
                'vendor_name' => 'required|string|max:255',
                'provinsi_vendor' => 'required|string|max:255',
                'kabupaten_vendor' => 'required|string|max:255',
                'kecamatan_vendor' => 'required|string|max:255',
                'kelurahan_vendor' => 'required|string|max:255',
                'detail_alamat_vendor' => 'required|string|max:255',
                'about_vendor' => 'required|string',
                'link_instagram_vendor' => 'required',
                'link_facebook_vendor' => 'required',
                'location_by_gmaps' => 'required|string|max:255',
                'service_name' => 'required|string|max:255',
                'start_price_at' => 'required|numeric',
                'location_available' => 'required|string|max:255',
                'thumbnail_vendor' => 'required|image|max:2048',
                'image_path_1' => 'required|image|max:2048',
                'image_path_2' => 'required|image|max:2048',
                'image_path_3' => 'required|image|max:2048',
                'image_path_4' => 'required|image|max:2048',
                'owner_vendor_name' => 'required',
                'about_the_team' => 'required',
                'service_description' => 'required',
                'vendor_category_services_id' => 'required',
            ]);


            if($validatedData->fails()){
                return redirect()->back()->withErrors($validatedData)->withInput();
            }

            $inputVendor = [
                'vendor_name' => $request['vendor_name'],
                'provinsi_vendor' => $request['provinsi_vendor'],
                'kabupaten_vendor' => $request['kabupaten_vendor'],
                'kecamatan_vendor' => $request['kecamatan_vendor'],
                'kelurahan_vendor' => $request['kelurahan_vendor'],
                'detail_alamat_vendor' => $request['detail_alamat_vendor'],
                'about_vendor' => $request['about_vendor'],
                'link_instagram_vendor' => $request['link_instagram_vendor'] ?? '',
                'link_website_vendor' => $request['link_website_vendor'] ?? '',
                'link_facebook_vendor' => $request['link_facebook_vendor'] ?? '',
                'location_by_gmaps' => $request['location_by_gmaps'],
                'vendor_category_services_id' => $request['vendor_category_services_id'],
                'slug' => $this->generateSlug($request['vendor_name']),
            ];


            if ($request->hasFile('thumbnail_vendor')) {
                $gambar = $request->file('thumbnail_vendor');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $inputVendor['thumbnail_vendor'] = $nama_gambar;
            }

            $vendor = Vendor::create($inputVendor);

            if($vendor){
                $images = [];
                for ($i = 1; $i <= 4; $i++) {
                    $gambar = $request->file("image_path_$i");
                    $imagePath = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                    $gambar->move('uploads', $imagePath);

                    $images[] = [
                        'vendor_id' => $vendor->id,
                        'image_path' => $imagePath,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                };

                $vendorImages = VendorImages::insert($images);

                if($vendorImages){
                     if ($request->hasFile('thumbnail_service')) {
                        $gambar = $request->file('thumbnail_service');
                        $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                        $gambar->move('uploads', $nama_gambar);
                        $inputVendorService['thumbnail_service'] = $nama_gambar;
                    } else {
                        unset($inputVendorService['thumbnail_service']);
                    }

                    $vendorService = VendorServices::create([
                        'vendor_id' => $vendor->id,
                        'service_name' => $request['service_name'],
                        'start_price_at' => $request['start_price_at'],
                        'location_available' => $request['location_available'],
                        'service_description' => $request['service_description'],
                        'thumbnail_service' => $inputVendorService['thumbnail_service'],
                    ]);

                    if($vendorService) {
                        $vendorTeam = VendorTeam::create([
                            'owner_vendor_name' => $request['owner_vendor_name'],
                            'about_the_team' => $request['about_the_team'],
                            'vendor_id' => $vendor->id,
                        ]);

                        if($vendorTeam){
                            return redirect()->route('admin.dashboard.partner.pengajuan.tambah')->with('success', 'Vendor successfully created.');
                        } else {
                            return redirect()->route('admin.dashboard.partner.pengajuan.tambah')->with('error', 'Vendor failed created.');
                        }
                    } else {
                        return redirect()->route('admin.dashboard.partner.pengajuan.tambah')->with('error', 'Vendor failed created.');
                    }
                }
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.partner.pengajuan.tambah')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit($slug){
        $categories = VendorCategoryServices::get();
        $vendor = Vendor::where('slug', $slug)->firstOrFail();
        $vendorId = $vendor->id;

        $vendorService = VendorServices::where('vendor_id', $vendorId)->first();
        $vendorTeam = VendorTeam::where('vendor_id', $vendorId)->first();
        $vendorImages = VendorImages::where('vendor_id', $vendorId)->get();


        return view('pages.dashboard.admin.partner.pengajuan.update', compact('vendor', 'categories', 'vendorService', 'vendorTeam', 'vendorImages'));
    }

    public function update(Request $request, $slug){
        try {
        $validatedData = $request->validate([
            'vendor_name' => 'required|string|max:255',
            'provinsi_vendor' => 'required|string|max:255',
            'kabupaten_vendor' => 'required|string|max:255',
            'kecamatan_vendor' => 'required|string|max:255',
            'kelurahan_vendor' => 'required|string|max:255',
            'detail_alamat_vendor' => 'required|string|max:255',
            'about_vendor' => 'required|string',
            'link_instagram_vendor' => 'nullable|string|max:255',
            'link_facebook_vendor' => 'nullable|string|max:255',
            'location_by_gmaps' => 'required|string|max:255',
            'vendor_category_services_id' => 'required',
            'thumbnail_vendor' => 'nullable|image|max:2048',
            'service_name' => 'required|string|max:255',
            'start_price_at' => 'required|numeric',
            'location_available' => 'required|string|max:255',
            'service_description' => 'required|string',
            'owner_vendor_name' => 'required|string|max:255',
            'about_the_team' => 'required|string|max:255',
            'image_path_1' => 'nullable|image|max:2048',
            'image_path_2' => 'nullable|image|max:2048',
            'image_path_3' => 'nullable|image|max:2048',
            'image_path_4' => 'nullable|image|max:2048',
        ]);

        $vendor = Vendor::where('slug', $slug)->firstOrFail();

        $vendor->update($validatedData);

        if ($request->hasFile('thumbnail_vendor')) {
            $gambar = $request->file('thumbnail_vendor');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $vendor->update(['thumbnail_vendor' => $nama_gambar]);
        }

        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("image_path_$i")) {
                $gambar = $request->file("image_path_$i");
                $imagePath = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $imagePath);

                VendorImages::updateOrCreate(
                    ['vendor_id' => $vendor->id, 'image_path' => $request->input("old_image_path_$i")],
                    ['image_path' => $imagePath]
                );
            }
        }

        $vendor->vendor_services()->update([
            'service_name' => $request['service_name'],
            'start_price_at' => $request['start_price_at'],
            'location_available' => $request['location_available'],
            'service_description' => $request['service_description'],
        ]);

        $vendor->vendor_team()->update([
            'owner_vendor_name' => $request['owner_vendor_name'],
            'about_the_team' => $request['about_the_team'],
        ]);

        return redirect()->route('admin.dashboard.partner.pengajuan.edit', $vendor->slug)->with('success', 'Vendor successfully updated.');
    } catch (\Exception $e) {
        return redirect()->route('admin.dashboard.partner.pengajuan.edit', $slug)->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    }

    public function destroy(Request $request, $slug){
        try {
            $vendor = Vendor::where('slug', $slug)->firstOrFail();

            $vendor->vendor_images()->delete();
            $vendor->vendor_services()->delete();
            $vendor->vendor_team()->delete();

            $vendor->delete();

            return redirect()->route('admin.dashboard.partner.pengajuan')->with('success', 'Vendor successfully deleted.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.partner.pengajuan')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }

    public function generateSlug($raw)
    {
        $slug = strtolower($raw);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}
