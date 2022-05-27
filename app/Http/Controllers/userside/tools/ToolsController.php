<?php

namespace App\Http\Controllers\userside\tools;

use App\Models\Property;
use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ToolsController extends Controller
{
    public function index(){
        // $user_id=Auth::user()->id;
        // $property=Property::where('user_id',$user_id)->get();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.tools.favourite_listing',get_defined_vars());

    }
    public function email_alert(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.tools.email_alert',get_defined_vars());

    }
    public function mange_email_alert(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.tools.mange_email_alert',get_defined_vars());

    }
}
