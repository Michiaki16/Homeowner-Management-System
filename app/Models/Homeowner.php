<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeowner extends Model
{
    protected $fillable = ['homeOwnerName', 'blockAndHouseNo', 'address', 'phone'];
}