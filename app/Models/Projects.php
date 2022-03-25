<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable=['title','detail'];

    public function brand()
    {
        return $this->belongsTo(FeaturePermission::class);
    }
}
