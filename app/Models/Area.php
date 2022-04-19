<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;
    protected $fillable=['areaname','slug','city'];
    protected static function boot()
    {
        parent::boot();

        static::created(function ($area) {
            $area->slug = $area->createSlug($area->areaname);
            $area->save();
        });
    }
    private function createSlug($areaname)
    {
        if (static::whereSlug($slug = Str::slug($areaname))->exists()) {

            $max = static::whereName($areaname)->latest('id')->skip(1)->value('slug');

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
