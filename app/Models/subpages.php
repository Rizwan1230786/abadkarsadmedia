<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subpages extends Model
{
    use HasFactory;
    protected $fillable=[
        "page_title",
        "website_title",
        "head_title",
        "meta_title",
        "meta_keywords",
        "meta_description",
        "url_slug",
        "page_content",
        "page_rank",
        "is_publish",
        "is_home",
        "parent_id",
        "show_in_toppanel",
        "show_in_footer",
        "short_description",
      
    ];
}
