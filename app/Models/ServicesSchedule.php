<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesSchedule extends Model
{
    use HasFactory;

    protected $table = 'services_schedules';

    protected $fillable = [
        'biaya',
        'attachment',
        'keterangan',
        'schedule_date',
        'region_id',
        'vehicle_id',
    ];
}
