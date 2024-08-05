<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkVehicle extends Model
{
    use HasFactory;

    protected $table = 'merk_vehicles';

    protected $fillable = [
        'nama_merk',
    ];
}
