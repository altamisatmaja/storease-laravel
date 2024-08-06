<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(LoginRequest $request){
        $request->authenticate();

        logger('User authenticated:', ['user' => Auth::user()]);


        if(Auth::user()){
            return redirect()->route('admin.dashboard');
        }
    }
}
