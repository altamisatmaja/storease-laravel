<?php

use App\Http\Controllers\Admin\CategoryVendorAdminController;
use App\Http\Controllers\Admin\ChangePasswordAdminController;
use App\Http\Controllers\Admin\CMS\AboutAdminController;
use App\Http\Controllers\Admin\CMS\FooterAdminController;
use App\Http\Controllers\Admin\CMS\GeneralAdminController;
use App\Http\Controllers\Admin\CMS\HeroAdminController;
use App\Http\Controllers\Admin\CMS\OurServiceAdminController;
use App\Http\Controllers\Admin\CMS\PortofolioAdminController;
use App\Http\Controllers\Admin\CMS\TestimoniAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes for Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/dashboard/cms/about', [AboutAdminController::class, 'index'])->name('admin.dashboard.cms.about');
    Route::get('admin/dashboard/cms/footer', [FooterAdminController::class, 'index'])->name('admin.dashboard.cms.footer');
    Route::get('admin/dashboard/cms/general', [GeneralAdminController::class, 'index'])->name('admin.dashboard.cms.general');
    Route::get('admin/dashboard/cms/hero', [HeroAdminController::class, 'index'])->name('admin.dashboard.cms.hero');
    Route::get('admin/dashboard/cms/our-service', [OurServiceAdminController::class, 'index'])->name('admin.dashboard.cms.ourservice');
    Route::get('admin/dashboard/cms/portofolio', [PortofolioAdminController::class, 'index'])->name('admin.dashboard.cms.portofolio');
    Route::get('admin/dashboard/cms/testimoni', [TestimoniAdminController::class, 'index'])->name('admin.dashboard.cms.testimoni');

    Route::put('admin/dashboard/cms/about/update', [AboutAdminController::class, 'update'])->name('admin.dashboard.cms.about.update');

    Route::get('admin/dashboard/kategori/partner', [CategoryVendorAdminController::class, 'index'])->name('admin.dashboard.category');
    Route::get('admin/dashboard/kategori/partner/tambah', [CategoryVendorAdminController::class, 'create'])->name('admin.dashboard.partner.category.create');
    Route::post('admin/dashboard/kategori/partner/store', [CategoryVendorAdminController::class, 'store'])->name('admin.dashboard.partner.category.store');

    Route::get('admin/dashboard/partner', [PartnerAdminController::class, 'index'])->name('admin.dashboard.partner');
    // Route::get('admin/dashboard/partner/pengajuan', [PartnerAdminController::class, 'list_store'])->name('admin.dashboard.partner.pengajuan');
    Route::get('admin/dashboard/partner/pengajuan/tambah', [PartnerAdminController::class, 'create'])->name('admin.dashboard.partner.pengajuan.tambah');
    Route::post('admin/dashboard/partner/pengajuan/store', [PartnerAdminController::class, 'store'])->name('admin.dashboard.partner.pengajuan.store');
    Route::get('admin/dashboard/partner/pengajuan/ubah/{id}', [PartnerAdminController::class, 'update'])->name('admin.dashboard.partner.pengajuan.ubah');

    Route::get('admin/dashboard/auth', [ChangePasswordAdminController::class, 'index'])->name('admin.dashboard.auth.changepassword');

    Route::post('admin/dashboard/general/judul/ubah', [GeneralAdminController::class, 'change_title'])->name('admin.dashboard.general.title.change');

    Route::post('admin/dashboard/hero/judul/home/ubah', [HeroAdminController::class, 'change_title_home'])->name('admin.dashboard.hero.home.title.change');
    Route::post('admin/dashboard/hero/gambar/home/ubah', [HeroAdminController::class, 'change_image_home'])->name('admin.dashboard.hero.home.image.change');
});
