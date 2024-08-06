<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorImages extends Model
{
    use HasFactory;

    protected $table = 'vendor_images';

    protected $fillable = [
        'image_path',
        'vendor_id',
    ];

    public function vendor(){
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
}
