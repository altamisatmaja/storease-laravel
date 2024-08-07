<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestPartnerPagesController extends Controller
{
    public function index()
    {
        return view('pages.guest.partner.index');
    }

    public function show()
    {
        return view('pages.guest.partner.detail');
    }
}
