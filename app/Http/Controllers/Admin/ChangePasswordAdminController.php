<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.auth.index');
    }
}
