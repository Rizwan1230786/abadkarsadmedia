<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abadtools extends Model
{
    use HasFactory;
    protected $fillable=['name','image','url_slug','detail'];
}
