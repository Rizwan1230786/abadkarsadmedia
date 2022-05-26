<?php

namespace App\Http\Controllers\userside\advertise;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertiseController extends Controller
{
    public function index(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.advertise.advertise',get_defined_vars());

    }
}
