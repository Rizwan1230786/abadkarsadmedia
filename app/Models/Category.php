<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable     =   [
        'name',
        'detail',
    ];

    public function SubCategory()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id', 'id');
    }

    public function projects()
    {
        return $this->belongsToMany(Projects::class);
    }

    public function cities()
    {
        return $this->hasMany(Cities::class, 'category_id', 'id');
    }

    public function areas()
    {
        return $this->hasManyThrough(
            'App\Models\Area', 'App\Models\Cities',
            'category_id', 'city_id', 'id'
        );
    }
    public function url_slugs()
    {
        return $this->hasMany(UrlSlug::class, 'category_id', 'id');
    }
}
