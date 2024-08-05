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


        if(Auth::user() && Auth::user()->role == 'Admin'){
            return redirect()->route('admin.dashboard');
        }
        else if (Auth::user() && Auth::user()->role == 'Approver'){
            return redirect()->route('approver.dashboard');
        } else {
            Auth::guard('web')->logout();
            return redirect()->route('login')->with('status', 'Peringatan! Anda tidak memiliki akses untuk masuk.');
        }
    }
}
