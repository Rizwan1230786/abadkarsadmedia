<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function features()
    {
        return $this->belongsToMany(Features::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    public function sub_category()
    {
        return $this->belongsToMany(Category::class);
    }
}
