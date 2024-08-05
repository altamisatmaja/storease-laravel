<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningState extends Model
{
    use HasFactory;

    protected $table = 'mining_states';

    protected $fillable = [
        'nama_tambang',
        'alamat_lengkap',
        'region_id',
    ];
}
