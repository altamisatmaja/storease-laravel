<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.partner.list');
    }

    public function list_store(){
        return view('pages.dashboard.admin.partner.pengajuan.index');
    }

    public function store(){
        return view('pages.dashboard.admin.partner.pengajuan.create');
    }

    public function update(){
        return view('pages.dashboard.admin.partner.pengajuan.update');
    }
}
