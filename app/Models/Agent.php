<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'desgination',
        'office_address',
        'office_number',
        'mobile_number',
        'fax_number',
        'descripition',
        'image',
        'status',
        'agency',
        'city_name',
    ];
}
