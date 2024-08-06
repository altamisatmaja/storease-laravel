<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.cms.footer');
    }
}
