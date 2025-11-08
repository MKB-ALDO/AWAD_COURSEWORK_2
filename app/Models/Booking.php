<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=[
        'firstName',
        'lastName',
        'email',
        'phone',
        'packageoption',
        'checkIn',
        'checkOut',
        'guests',

    ];
}
