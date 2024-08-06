<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorServices extends Model
{
    use HasFactory;

    protected $table = 'vendor_services';

    protected $fillable = [
        'service_name',
        'service_description',
        'thumbnail_service',
        'start_price_at',
        'location_available',
        'vendor_id',
    ];

    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
}
