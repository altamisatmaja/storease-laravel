<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendor';

    protected $fillable = [
        'vendor_name',
        'provinsi_vendor',
        'kabupaten_vendor',
        'kecamatan_vendor',
        'kelurahan_vendor',
        'detail_alamat_vendor',
        'about_vendor',
        'link_instagram_vendor',
        'link_website_vendor',
        'link_facebook_vendor',
        'location_by_gmaps',
        'thumbnail_vendor',
        'vendor_category_services_id',
        'slug',
    ];

    public function vendor_category_services(){
        return $this->hasMany(VendorCategoryServices::class, 'vendor_category_services_id', 'id');
    }

    public function vendor_images(){
        return $this->hasMany(VendorImages::class, 'vendor_id', 'id');
    }

    public function vendor_services(){
        return $this->hasMany(VendorServices::class, 'vendor_id', 'id');
    }

    public function vendor_team(){
        return $this->hasMany(VendorTeam::class, 'vendor_id', 'id');
    }
}
