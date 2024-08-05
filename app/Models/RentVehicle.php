<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentVehicle extends Model
{
    use HasFactory;

    protected $table = 'rent_vehicles';

    protected $fillable = [
        'biaya',
        'start_at',
        'end_at',
        'vehicle_id',
    ];
}
