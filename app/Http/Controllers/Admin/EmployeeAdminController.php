<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.employees.index');
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
