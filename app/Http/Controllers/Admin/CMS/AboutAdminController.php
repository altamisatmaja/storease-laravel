<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index(){
        return view('dashboard.admin.cms.about');
    }
}
