<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    use HasUuids;

    public $timestamps = false;
    protected $fillable = ['fullName', 'bookingDate', 'checkIn', 'checkOut', 'specialRquest', 'roomType', 'roomId', 'status'];
}
