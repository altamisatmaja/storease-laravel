<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPages extends Model
{
    use HasFactory;

    protected $table = 'about_pages';

    protected $fillable = [
        'about_images',
        'about_section_description',
        'our_vision',
        'our_mission',
    ];
}
