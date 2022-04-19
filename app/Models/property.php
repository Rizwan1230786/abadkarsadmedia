<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function features()
    {
        return $this->belongsToMany(Features::class);
    }
    public function facilities()
    {
        return $this->belongsToMany(Facilities::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($property) {

            $property->slug = $property->createSlug($property->city_name);

            $property->save();
        });
    }
    private function createSlug($city_name)
    {
        if (static::whereSlug($slug = Str::slug($city_name))->exists()) {

            $max = static::whereName($city_name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
}
