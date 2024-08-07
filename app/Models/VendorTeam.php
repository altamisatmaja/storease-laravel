<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorTeam extends Model
{
    use HasFactory;

    protected $table = 'vendor_team';

    protected $fillable = [
        'owner_vendor_name',
        'about_the_team',
        'vendor_id',
    ];

    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
}
