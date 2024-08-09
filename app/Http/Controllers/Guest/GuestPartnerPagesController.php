<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class GuestPartnerPagesController extends Controller
{
    public function index()
    {
        $heroPartner = Hero::where('id', 3)->first();
        return view('pages.guest.partner.index', compact('heroPartner'));
    }

    public function show()
    {
        return view('pages.guest.partner.detail');
    }
}
