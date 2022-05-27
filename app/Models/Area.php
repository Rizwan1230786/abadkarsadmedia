<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;
    protected $fillable=['areaname','slug','city_id','zone'];

    public function properties()
    {
        return $this->hasMany(Property::class, 'area_id', 'id');
    }
}
