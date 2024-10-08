<?php

use App\Http\Controllers\Guest\GuestContactUsPagesController;
use App\Http\Controllers\Guest\GuestHomePagesController;
use App\Http\Controllers\Guest\GuestPartnerPagesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', [GuestHomePagesController::class, 'index']);
Route::get('/kontak', [GuestContactUsPagesController::class, 'index'])->name('contact.us');
Route::get('/partner', [GuestPartnerPagesController::class, 'index'])->name('partner');
Route::get('/partner/{slug}', [GuestPartnerPagesController::class, 'show'])->name('partner.detail');

Route::post('/kontak/kami/store', [ContactFormController::class, 'store'])->name('contact_us.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::fallback(function () {
    return view('pages/utility/404');
});
