<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','phone','email','detail','dry_cough','sore_throat','cold','fever','headache','vomiting','age'];
}