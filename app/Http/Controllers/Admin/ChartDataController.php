<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartDataController extends Controller
{
    public function getData()
    {
        $currentYear = date('Y');

        $vehicleBookings = VehicleBooking::select(
                DB::raw('MONTH(booked_at) as month'),
                DB::raw('COUNT(*) as count'),
                'vehicles.category_vehicle_id'
            )
            ->join('vehicles', 'vehicle_bookings.vehicle_id', '=', 'vehicles.id')
            ->whereYear('booked_at', $currentYear)
            ->groupBy(DB::raw('MONTH(booked_at)'), 'vehicles.category_vehicle_id')
            ->get();


        $dataset1 = array_fill(1, 12, 0);
        $dataset2 = array_fill(1, 12, 0);


        foreach ($vehicleBookings as $booking) {
            $month = $booking->month;
            $categoryId = $booking->category_vehicle_id;

            if ($categoryId == 1) {
                $dataset1[$month] = $booking->count;
            } elseif ($categoryId == 2) {
                $dataset2[$month] = $booking->count;
            }
        }


        $labels = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July',
            'August', 'September', 'October', 'November', 'December'
        ];


        $formattedData = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Barang',
                    'data' => array_values($dataset1),
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderWidth' => 2,
                ],
                [
                    'label' => 'Personel',
                    'data' => array_values($dataset2),
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderWidth' => 2,
                ]
            ]
        ];


        return response()->json($formattedData);
    }
}
