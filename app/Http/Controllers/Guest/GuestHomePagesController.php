<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutPages;
use App\Models\Hero;
use App\Models\PortofolioHomePages;
use App\Models\TestimonialHomePages;
use Illuminate\Http\Request;

class GuestHomePagesController extends Controller
{
    public function index(){
        $abouts = AboutPages::first();
        $heroWelcome = Hero::where('id', 1)->first();
        $testimonials = TestimonialHomePages::orderBy('id')->take(5)->get();
        $portofolios  = PortofolioHomePages::get();

        return view("welcome", compact('abouts', 'heroWelcome', 'testimonials', 'portofolios'));
    }
}
