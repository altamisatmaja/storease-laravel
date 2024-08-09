<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutPages;
use App\Models\Hero;
use Illuminate\Http\Request;

class GuestHomePagesController extends Controller
{
    public function index(){
        $abouts = AboutPages::first();
        $heroWelcome = Hero::where('id', 1)->first();

        return view("welcome", compact('abouts', 'heroWelcome'));
    }
}
