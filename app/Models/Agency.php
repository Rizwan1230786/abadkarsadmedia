<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agency extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password',
        'office_address',
        'office_number',
        'mobile_number',
        'fax_number',
        'descripition',
        'image',
        'status',
        'agent',
        'city_name',
        'user_id'
    ];
}
