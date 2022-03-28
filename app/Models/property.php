<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type',
        'descripition',
        'content',
        'image',
        'image',
        'city_name',
        'latitude',
        'longitude',
        'location',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'number_of_floors',
        'square',
        'marala',
        'currency',
        'price',
        'feature',
        'property_status',
        'category',
        'category',
        'project_id',
        'status',
        'moderation_status'

    ];

    public function features()
    {
        return $this->belongsToMany(Features::class);
    }
}
