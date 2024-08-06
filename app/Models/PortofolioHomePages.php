<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioHomePages extends Model
{
    use HasFactory;

    protected $table = 'portofolio_home_pages';

    protected $fillable = [
        'thumbnail_portofolio',
        'hover_portofolio',
        'link_social_media_portofolio',
    ];
}
