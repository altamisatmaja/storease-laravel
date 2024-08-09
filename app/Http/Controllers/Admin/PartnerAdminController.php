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
        return view('pages.dashboard.admin.partner.list');
    }

    public function create(){
        $categories = VendorCategoryServices::get();

        return view('pages.dashboard.admin.partner.pengajuan.create', compact('categories'));
    }

    public function store(Request $request){
        try {
            // dd($request->all());
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
                // 'thumbnail_service' => 'required',
                'vendor_category_services_id' => 'required',
            ]);

            // dd($validatedData->fails());

            if($validatedData->fails()){
                return redirect()->back()->withErrors($validatedData)->withInput();
            }

            if ($request->hasFile('thumbnail_vendor')) {
                $gambar = $request->file('thumbnail_vendor');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $inputVendor['thumbnail_vendor'] = $nama_gambar;
            } else {
                unset($inputVendor['thumbnail_vendor']);
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
            dd($e);
            return redirect()->route('admin.dashboard.partner.pengajuan.tambah')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(){
        return view('pages.dashboard.admin.partner.pengajuan.update');
    }

    public function generateSlug($raw)
    {
        $slug = strtolower($raw);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}
