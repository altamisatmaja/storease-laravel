<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelConsumption extends Model
{
    use HasFactory;

    protected $table = 'fuel_consumption';

    protected $fillable = [
        'biaya',
        'volume_bbm',
        'jenis_bahan_bakar',
        'odometer',
        'keterangan',
        'attachment',
        'fuel_at',
        'vehicle_id',
    ];
}
