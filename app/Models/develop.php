<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class develop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_no',
        'image',
        'image_webp',
    ];
}
