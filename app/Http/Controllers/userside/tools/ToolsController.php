<?php

namespace App\Http\Controllers\userside\tools;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    public function index(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.tools.favourite_listing',get_defined_vars());

    }
}
