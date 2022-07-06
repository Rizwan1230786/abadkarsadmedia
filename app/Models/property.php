<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class property extends Model
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
    public function tags()
    {
        return $this->belongsToMany(tags::class);
    }
}
