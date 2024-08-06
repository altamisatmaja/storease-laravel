<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillabe = [
        'detail_address_storease',
        'whatsapp_number_storease',
        'email_storease',
        'operational_schedule_date',
        'operational_schedule_hour',
        'location_storease',
    ];
}
