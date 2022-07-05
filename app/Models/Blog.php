<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['title','image','descripition','content'];

    public function tags()
    {
        return $this->belongsToMany(tags::class);
    }
}
