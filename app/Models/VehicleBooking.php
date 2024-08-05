<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleBooking extends Model
{
    use HasFactory;

    protected $table = 'vehicle_bookings';

    protected $fillable = [
        'durasi',
        'keperluan',
        'booked_at',
        'start_from_mining_id',
        'end_to_mining_id',
        'employee_id',
        'vehicle_id',
    ];

    public function employees() : HasMany {
        return $this->hasMany(Employee::class, 'id', 'employee_id');
    }

    public function vehicles() : HasMany {
        return $this->hasMany(Vehicle::class, 'id', 'vehicle_id');
    }

    public function start_mining_states() : HasMany {
        return $this->hasMany(MiningState::class, 'id', 'start_from_mining_id');
    }

    public function end_mining_states() : HasMany {
        return $this->hasMany(MiningState::class, 'id', 'end_to_mining_id');
    }
}
