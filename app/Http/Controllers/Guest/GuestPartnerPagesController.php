<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Vendor;
use App\Models\VendorCategoryServices;
use App\Models\VendorImages;
use App\Models\VendorServices;
use App\Models\VendorTeam;
use Illuminate\Http\Request;

class GuestPartnerPagesController extends Controller
{
    public function index()
    {
        $heroPartner = Hero::where('id', 3)->first();

        $categories = VendorCategoryServices::with('vendors')->get();
        return view('pages.guest.partner.index', compact('heroPartner', 'categories'));
    }

    public function show($slug)
    {
        $vendor = Vendor::where('slug', $slug)->first();
        $vendorId = $vendor->id;

        $vendorService = VendorServices::where('vendor_id', $vendorId)->first();
        $vendorTeam = VendorTeam::where('vendor_id', $vendorId)->first();
        $vendorImages = VendorImages::where('vendor_id', $vendorId)->get();
        // dd($vendorImages);

        return view('pages.guest.partner.detail', compact('vendor', 'vendorService', 'vendorTeam', 'vendorImages'));
    }
}
