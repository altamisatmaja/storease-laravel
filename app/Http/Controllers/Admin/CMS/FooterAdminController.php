<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterAdminController extends Controller
{
    public function index(){
        return view('dashboard.admin.cms.footer');
    }
}
