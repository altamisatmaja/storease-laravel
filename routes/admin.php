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
    Route::post('admin/dashboard/cms/footer/update', [FooterAdminController::class, 'update'])->name('admin.dashboard.cms.footer.update');

    Route::get('admin/dashboard/cms/our-service', [OurServiceAdminController::class, 'index'])->name('admin.dashboard.cms.ourservice');
    Route::get('admin/dashboard/cms/our-service/tambah', [OurServiceAdminController::class, 'create'])->name('admin.dashboard.cms.ourservice.create');
    Route::post('admin/dashboard/cms/our-service/store', [OurServiceAdminController::class, 'store'])->name('admin.dashboard.cms.ourservice.store');
    Route::get('admin/dashboard/cms/our-service/{id}', [OurServiceAdminController::class, 'edit'])->name('admin.dashboard.cms.ourservice.edit');
    Route::post('admin/dashboard/cms/our-service/update/{id}', [OurServiceAdminController::class, 'update'])->name('admin.dashboard.cms.ourservice.update');
    Route::delete('admin/dashboard/cms/our-service/destroy/{id}', [OurServiceAdminController::class, 'destroy'])->name('admin.dashboard.cms.ourservice.destroy');

    Route::get('admin/dashboard/cms/portofolio', [PortofolioAdminController::class, 'index'])->name('admin.dashboard.cms.portofolio');
    Route::get('admin/dashboard/cms/portofolio/tambah', [PortofolioAdminController::class, 'create'])->name('admin.dashboard.cms.portofolio.create');
    Route::post('admin/dashboard/cms/portofolio/store', [PortofolioAdminController::class, 'store'])->name('admin.dashboard.cms.portofolio.store');
    Route::get('admin/dashboard/cms/portofolio/{id}', [PortofolioAdminController::class, 'edit'])->name('admin.dashboard.cms.portofolio.edit');
    Route::put('admin/dashboard/cms/portofolio/{id}', [PortofolioAdminController::class, 'update'])->name('admin.dashboard.cms.portofolio.update');
    Route::delete('admin/dashboard/cms/portofolio/{id}', [PortofolioAdminController::class, 'destroy'])->name('admin.dashboard.cms.portofolio.destroy');

    Route::get('admin/dashboard/cms/testimoni', [TestimoniAdminController::class, 'index'])->name('admin.dashboard.cms.testimoni');
    Route::get('admin/dashboard/cms/testimoni/tambah', [TestimoniAdminController::class, 'create'])->name('admin.dashboard.cms.testimoni.create');
    Route::post('admin/dashboard/cms/testimoni/store', [TestimoniAdminController::class, 'store'])->name('admin.dashboard.cms.testimoni.store');
    Route::get('admin/dashboard/cms/testimoni/{slug}', [TestimoniAdminController::class, 'edit'])->name('admin.dashboard.cms.testimoni.edit');
    Route::put('admin/dashboard/cms/testimoni/update/{slug}', [TestimoniAdminController::class, 'update'])->name('admin.dashboard.cms.testimoni.update');
    Route::delete('admin/dashboard/cms/testimoni/destroy/{slug}', [TestimoniAdminController::class, 'destroy'])->name('admin.dashboard.cms.testimoni.destroy');

    Route::put('admin/dashboard/cms/about/update', [AboutAdminController::class, 'update'])->name('admin.dashboard.cms.about.update');

    Route::get('admin/dashboard/kategori/partner', [CategoryVendorAdminController::class, 'index'])->name('admin.dashboard.category');
    Route::get('admin/dashboard/kategori/partner/tambah', [CategoryVendorAdminController::class, 'create'])->name('admin.dashboard.partner.category.create');
    Route::post('admin/dashboard/kategori/partner/store', [CategoryVendorAdminController::class, 'store'])->name('admin.dashboard.partner.category.store');
    Route::get('admin/dashboard/kategori/partner/edit/{slug}', [CategoryVendorAdminController::class, 'edit'])->name('admin.dashboard.partner.category.edit');
    Route::post('admin/dashboard/kategori/partner/update/{slug}', [CategoryVendorAdminController::class, 'update'])->name('admin.dashboard.partner.category.update');
    Route::delete('admin/dashboard/kategori/partner/destroy', [CategoryVendorAdminController::class, 'destroy'])->name('admin.dashboard.partner.category.destroy');

    Route::get('admin/dashboard/partner', [PartnerAdminController::class, 'index'])->name('admin.dashboard.partner');
    Route::get('admin/dashboard/partner/pengajuan/tambah', [PartnerAdminController::class, 'create'])->name('admin.dashboard.partner.pengajuan.tambah');
    Route::post('admin/dashboard/partner/pengajuan/store', [PartnerAdminController::class, 'store'])->name('admin.dashboard.partner.pengajuan.store');
    Route::get('admin/dashboard/partner/pengajuan/ubah/{slug}', [PartnerAdminController::class, 'edit'])->name('admin.dashboard.partner.pengajuan.edit');
    Route::post('admin/dashboard/partner/pengajuan/update/{slug}', [PartnerAdminController::class, 'update'])->name('admin.dashboard.partner.pengajuan.update');
    Route::delete('admin/dashboard/partner/pengajuan/destroy/{slug}', [PartnerAdminController::class, 'destroy'])->name('admin.dashboard.partner.pengajuan.destroy');

    Route::get('admin/dashboard/cms/hero', [HeroAdminController::class, 'index'])->name('admin.dashboard.cms.hero');
    Route::post('admin/dashboard/cms/hero/home/welcome/ubah', [HeroAdminController::class, 'hero_welcome'])->name('admin.dashboard.hero.welcome.update');
    Route::post('admin/dashboard/cms/hero/home/contact-us/ubah', [HeroAdminController::class, 'hero_contact_us'])->name('admin.dashboard.hero.contactus.update');
    Route::post('admin/dashboard/cms/hero/home/partner/ubah', [HeroAdminController::class, 'hero_partner'])->name('admin.dashboard.hero.partner.update');
});
