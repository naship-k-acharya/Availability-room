<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'bedType', 'estatus', 'facilities', 'price', 'discount', 'doorNumber', 'floorNumber'];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
