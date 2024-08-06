<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialHomePages extends Model
{
    use HasFactory;

    protected $table = 'testimonial_home_pages';

    protected $fillable = [
        'customer_name',
        'customer_pictures',
        'description_testimonial',
        'rating',
    ];
}
