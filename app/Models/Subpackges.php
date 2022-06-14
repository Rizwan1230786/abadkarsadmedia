<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpackges extends Model
{
    use HasFactory;
    protected $fillable=['title','packges_id','detail','image','vedio'];
}
