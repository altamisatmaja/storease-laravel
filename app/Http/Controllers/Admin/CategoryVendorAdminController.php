<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryVendorAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.partner.pengajuan.category');
    }
}
