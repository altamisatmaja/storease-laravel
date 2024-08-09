<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutPages;
use Illuminate\Http\Request;

class GuestHomePagesController extends Controller
{
    public function index(){
        $abouts = AboutPages::first();
        return view("welcome", compact('abouts'));
    }
}
