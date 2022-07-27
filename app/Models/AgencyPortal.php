<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AgencyPortal extends Authenticatable
{
    use HasFactory;
    protected $fillable=['email','password','type','agency_id','agent_id'];
}
