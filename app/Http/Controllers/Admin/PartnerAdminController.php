<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerAdminController extends Controller
{
    public function index(){
        return view('dashboard.admin.list');
    }

    public function list_store(){
        return view('dashboard.admin.pengajuan.index');
    }

    public function store(){
        return view('dashboard.admin.pengajuan.create');
    }

    public function update(){
        return view('dashboard.admin.pengajuan.update');
    }
}
