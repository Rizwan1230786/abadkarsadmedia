<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'page_rank',
    ];
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    public function property()
    {
        return $this->belongsToMany(Property::class);
    }
    public function project()
    {
        return $this->belongsToMany(Projects::class);
    }
}
