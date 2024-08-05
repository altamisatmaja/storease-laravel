<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalProcess extends Model
{
    use HasFactory;

    protected $table = 'approval_processes';

    protected $fillable = [
        'status',
        'approved_at',
        'rejected_at',
        'vehicle_booking_id',
        'approval_level_id',
        'approver_id',
    ];
}
