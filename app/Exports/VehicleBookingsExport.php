<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VehicleBookingsExport implements FromArray, WithHeadings
{
    protected $vehicleBookings;

    public function __construct()
    {
        $this->vehicleBookings = [];
    }

    public function setVehicleBookings(array $vehicleBookings)
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
