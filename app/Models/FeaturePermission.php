<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturePermission extends Model
{
    use HasFactory;
    
    protected $fillable=['project_id','feature_id'];
    public function products()
    {
        return $this->hasMany(Projects::class);
    }
}
