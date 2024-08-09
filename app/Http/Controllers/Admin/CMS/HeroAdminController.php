<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeroAdminController extends Controller
{
    public function index(){
        $heroWelcome = Hero::where('id', 1)->first();
        $heroContactUs = Hero::where('id', 2)->first();
        $heroPartner = Hero::where('id', 3)->first();

        return view('pages.dashboard.admin.cms.hero.index', compact('heroWelcome', 'heroContactUs', 'heroPartner'));
    }

    public function hero_welcome(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image' => 'nullable|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $heroHome = Hero::where('id', 1)->first();
            if (!$heroHome) {
                return redirect()->back()->with('error', 'Data home tidak ditemukan.');
            }

            $heroHome->title = $request['title'];

            if ($request->hasFile('image')) {
                $gambar = $request->file('image');
                $nama_gambar = 'hero' . '-' . time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);

                if ($heroHome->image) {
                    $oldImagePath = public_path('uploads/' . $heroHome->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $heroHome->image = $nama_gambar;
            }

            $heroHome->save();

            return redirect()->back()->with('success', 'Hero home berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function hero_contact_us(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image' => 'nullable|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $heroHome = Hero::where('id', 2)->first();
            if (!$heroHome) {
                return redirect()->back()->with('error', 'Data home tidak ditemukan.');
            }

            $heroHome->title = $request['title'];

            if ($request->hasFile('image')) {
                $gambar = $request->file('image');
                $nama_gambar = 'hero' . '-' . time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);

                if ($heroHome->image) {
                    $oldImagePath = public_path('uploads/' . $heroHome->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $heroHome->image = $nama_gambar;
            }

            $heroHome->save();

            return redirect()->back()->with('success', 'Hero home berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function hero_partner(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image' => 'nullable|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors()->first());
            }

            $heroHome = Hero::where('id', 3)->first();
            if (!$heroHome) {
                return redirect()->back()->with('error', 'Data home tidak ditemukan.');
            }

            $heroHome->title = $request['title'];

            if ($request->hasFile('image')) {
                $gambar = $request->file('image');
                $nama_gambar = 'hero' . '-' . time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);

                if ($heroHome->image) {
                    $oldImagePath = public_path('uploads/' . $heroHome->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $heroHome->image = $nama_gambar;
            }

            $heroHome->save();

            return redirect()->back()->with('success', 'Hero home berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
