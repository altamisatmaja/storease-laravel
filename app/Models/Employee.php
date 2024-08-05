<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'photo',
        'nomor_hp',
        'tanggal_lahir',
        'jenis_kelamin',
        'work_at',
        'office_id',
        'employee_position_id',
    ];
}
