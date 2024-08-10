<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\TestimonialHomePages;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimoniAdminController extends Controller
{
    public function index(){
        $testimonials = TestimonialHomePages::all();

        return view('pages.dashboard.admin.cms.testimoni.index', compact('testimonials'));
    }

    public function create(){
        return view('pages.dashboard.admin.cms.testimoni.create');
    }

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'customer_name' => 'required',
                'description_testimonial' => 'required',
                'rating' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->witInput();
            }

            $input = [
                'customer_name' => $request['customer_name'],
                'description_testimonial' => $request['description_testimonial'],
                'rating' => $request['rating'],
            ];

            if ($request->hasFile('customer_pictures')) {
                $gambar = $request->file('customer_pictures');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['customer_pictures'] = $nama_gambar;
            } else {
                unset($input['customer_pictures']);
            }

            $testimonial = TestimonialHomePages::create($input);

            if($testimonial){
                return redirect()->route('admin.dashboard.cms.testimoni')->with('success', 'Data layout testimoni berhasil dibuat');
            }
            return redirect()->route('admin.dashboard.cms.testimoni')->with('errors', 'Data layout testimoni berhasil dibuat');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function edit($id){
        $testimonials = TestimonialHomePages::findOrFail($id);

        return view('pages.dashboard.admin.cms.testimoni.update', compact('testimonials'));
    }

    public function update(Request $request, $id){
        try {
            $testimonials = TestimonialHomePages::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'customer_name' => 'required',
                'description_testimonial' => 'required',
                'rating' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->witInput();
            }

            $input = [
                'customer_name' => $request['customer_name'],
                'description_testimonial' => $request['description_testimonial'],
                'rating' => $request['rating'],
            ];

            if ($request->hasFile('customer_pictures')) {
                $gambar = $request->file('customer_pictures');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['customer_pictures'] = $nama_gambar;
            } else {
                unset($input['customer_pictures']);
            }

            $testimonials->update($input);

            return redirect()->route('admin.dashboard.cms.testimoni')->with('success', 'Data layout testimoni berhasil dibuat');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy(Request $request, $id){
        $testimonials = TestimonialHomePages::findOrFail($id);
        $testimonials->delete();

        return redirect()->route('admin.dashboard.cms.testimoni')->with('success', 'Data layout testimoni berhasil dihapus');
    }
}
