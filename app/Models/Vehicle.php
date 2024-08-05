<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'nama',
        'plat_nomor',
        'nomor_identifikasi',
        'picture',
        'tahun_kendaraan',
        'kapasitas_muatan',
        'status_kepemilikan',
        'merk_vehicle_id',
        'model_vehicle_id',
        'category_vehicle_id',
        'type_vehicle_id',
    ];
}
