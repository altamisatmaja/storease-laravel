<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnedVehicle extends Model
{
    use HasFactory;

    protected $table = 'owned_vehicles';

    protected $fillable = [
        'bought_at',
        'vehicle_id',
    ];
}
