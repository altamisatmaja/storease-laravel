<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralAdminController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.cms.general');
    }

    public function change_title(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $generalTitle = General::first();
            if ($generalTitle) {
                $generalTitle->title = $request->title;
                $generalTitle->save();
                return redirect()->back()->with('success', 'Title updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Content not found.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
