<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingExportController extends Controller
{
    protected $vehicleBookings;

    public function __construct(array $vehicleBookings)
    {
        $this->vehicleBookings = $vehicleBookings;
    }

    public function array(): array
    {
        return $this->vehicleBookings;
    }

    public function headings(): array
    {
        return [
            'Nama Kendaraan',
            'Plat Nomor',
            'Durasi',
            'Keperluan',
            'Asal',
            'Tujuan',
            'Nama Driver',
        ];
    }
}
