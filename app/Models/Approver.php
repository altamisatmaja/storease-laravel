<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Approver extends Model
{
    use HasFactory;

    protected $table = 'approvers';

    protected $fillable = [
        'departement_id',
        'employee_id',
        'user_id',
    ];

    public function employees(): HasMany{
        return $this->hasMany(Employee::class, 'id', 'employee_id');
    }
}
