<?php

use App\Http\Controllers\Admin\BookingAdminController;
use App\Http\Controllers\Admin\BookingExportController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\EmployeeAdminController;
use App\Http\Controllers\Admin\FuelAdminController;
use App\Http\Controllers\Admin\HistoryAdminController;
use App\Http\Controllers\Admin\OfficeAdminController;
use App\Http\Controllers\Admin\ServiceScheduleAdminController;
use App\Http\Controllers\Admin\VehicleController;
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


Route::middleware(['role:Admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/dashboard/pemesanan/pengajuan', [BookingAdminController::class, 'index'])->name('admin.dashboard.booking');
    Route::get('admin/dashboard/pemesanan/pengajuan/tambah', [BookingAdminController::class, 'create'])->name('admin.dashboard.booking.add');
    Route::post('admin/dashboard/pemesanan/pengajuan/tambah', [BookingAdminController::class, 'store'])->name('admin.dashboard.booking.store');
    Route::get('admin/dashboard/pemesanan/util/export-excel', [BookingAdminController::class, 'exportToExcel'])->name('admin.dashboard.booking.excel');

    Route::get('admin/dashboard/pemesanan/riwayat-pengajuan', [BookingAdminController::class, 'history'])->name('admin.dashboard.booking.history');

    Route::get('admin/dashboard/karyawan', [EmployeeAdminController::class, 'index'])->name('admin.dashboard.employee');

    Route::get('admin/dashboard/bbm', [FuelAdminController::class, 'index'])->name('admin.dashboard.fuel');

    Route::get('admin/dashboard/riwayat', [HistoryAdminController::class, 'index'])->name('admin.dashboard.history');

    Route::get('admin/dashboard/kantor', [OfficeAdminController::class, 'index'])->name('admin.dashboard.office');

    Route::get('admin/dashboard/jadwal-servis', [ServiceScheduleAdminController::class, 'index'])->name('admin.dashboard.schedule-services');

    Route::get('admin/dashboard/kendaraan', [VehicleController::class, 'index'])->name('admin.dashboard.vehicle');
});
