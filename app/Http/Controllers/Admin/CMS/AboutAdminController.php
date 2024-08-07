<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\AboutPages;
use App\Models\Hero;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index(){
        $about = AboutPages::first();

        return view('pages.dashboard.admin.cms.about', compact('about'));
    }

    public function update(){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
