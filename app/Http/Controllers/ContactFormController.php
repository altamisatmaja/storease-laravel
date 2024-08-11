<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'nohp' => $request->input('nohp'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            $fromAddress = $request->input('email');

            Mail::to('storease12@gmail.com')->send(new ContactMail($data, $fromAddress));

            return redirect()->route('contact.us')->with('success', 'Email berhasil dikirim');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
