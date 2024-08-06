<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePages extends Model
{
    use HasFactory;

    protected $table = 'home_pages';

    protected $fillable = [
        'hero_images',
        'about_section_description',
        'our_vision',
        'our_mission',
    ];
}
