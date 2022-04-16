<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_facilities extends Model
{
    use HasFactory;
    protected $fillable = ['property_id','distance','facility'];
}
