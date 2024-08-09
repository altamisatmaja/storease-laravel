<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorCategoryServices extends Model
{
    use HasFactory;

    protected $table = 'vendor_category_services';

    protected $fillable = [
        'category_name',
        'slug',
    ];

        public function vendors(){
        return $this->hasMany(Vendor::class, 'vendor_category_services_id', 'id');
    }

}
