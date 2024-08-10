<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request){
        try {
            $data = [
                'name'    => $request->input('name'),
                'email'   => $request->input('email'),
                'address'   => $request->input('address'),
                'nohp'   => $request->input('nohp'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            Mail::to('altamisfattah16@gmail.com')->send(new ContactMail($data));

            return redirect()->back()->with('success', 'Email berhasil dikirim');
            // return redirect()->back()->withErrors($validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }
}
