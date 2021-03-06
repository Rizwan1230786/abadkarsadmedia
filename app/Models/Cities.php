<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Cities extends Model
{
    use HasFactory;
    protected $fillable=['name','image','state','slug','category_id'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($cities) {
            $cities->slug = $cities->createSlug($cities->name);
            $cities->save();
        });
    }
    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
    public function areas()
    {
        return $this->hasMany(Area::class, 'city_id', 'id');
    }
    public function url_slugs()
    {
        return $this->hasMany(UrlSlug::class, 'city_id', 'id');
    }
    public function properties()
    {
        return $this->hasMany(Property::class, 'city_name', 'id');
    }
}

