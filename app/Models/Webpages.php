<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webpages extends Model
{
    use HasFactory;
    protected $fillable=[
        "id",
        "page_title",
        "head_title",
        "meta_title",
        "meta_keywords",
        "meta_description",
        "url_slug",
        "page_rank",
        "status",
        "parent_id",
        "short_description",
        "image",
        "created_at",
        "updated_at"
    ];
}
