<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuelAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.fuels.index');
    }

    public function create(Request $request){
        // TODO
    }

    public function store(Request $request){
        // TODO
    }
    public function show(Request $request){
        // TODO
    }
    public function update(Request $request){
        // TODO
    }
    public function destroy(Request $request){
        // TODO
    }
}
