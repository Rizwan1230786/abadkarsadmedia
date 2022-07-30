<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'office_address',
        'office_number',
        'mobile_number',
        'fax_number',
        'descripition',
        'image',
        'status',
        'agent',
        'city_name',
        'is_verify',
        'user_id'
    ];
}
