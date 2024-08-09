<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterAdminController extends Controller
{
    public function index(){
        $contacts = ContactUs::first();

        return view('pages.dashboard.admin.cms.footer', compact('contacts'));
    }

    public function update(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'detail_address_storease' => 'required',
                'whatsapp_number_storease' => 'required',
                'email_storease' => 'required',
                'operational_schedule_date' => 'required',
                'operational_schedule_hour' => 'required',
                'location_storease' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $contacts = ContactUs::first();
            $contacts->detail_address_storease = $request['detail_address_storease'];
            $contacts->whatsapp_number_storease = $request['whatsapp_number_storease'];
            $contacts->email_storease = $request['email_storease'];
            $contacts->operational_schedule_date = $request['operational_schedule_date'];
            $contacts->operational_schedule_hour = $request['operational_schedule_hour'];
            $contacts->location_storease = $request['location_storease'];

            $contacts->save();

            return redirect()->back()->with('success', 'Data contact us berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
