<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\customeruser as Authenticatable;

class Customeruser extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
