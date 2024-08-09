<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Hero;
use Illuminate\Http\Request;

class GuestContactUsPagesController extends Controller
{
    public function index(){
        $heroContactUs = Hero::where('id', 2)->first();

        $contacts = ContactUs::first();
        return view("pages.guest.contact", compact('heroContactUs', 'contacts'));
    }
}
