<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'detail', 'status', 'category_id'];

    public function projects()
    {
        return $this->belongsToMany(Projects::class);
    }
}
