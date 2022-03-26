<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'detail',
        'page_content',
        'image',
        'city_name',
        'location',
        'latitude',
        'longitude',
        'num_of_blocks',
        'num_of_floors',
        'num_of_flats',
        'lowest_price',
        'max_price',
        'currency_name',
        'commercial_area_min',
        'commercial_area_max',
        'residential_area_min',
        'residential_area_max',
        'feature',
        'category',
        'investor_name',
        'status',
        'expire_date',
        'Open_sell_date',
    ];
    public function features()
    {
        return $this->belongsToMany(Features::class);
    }
}
