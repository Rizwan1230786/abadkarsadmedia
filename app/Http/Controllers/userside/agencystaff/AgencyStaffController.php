<?php

namespace App\Http\Controllers\userside\agencystaff;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgencyStaffController extends Controller
{
    public function index(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.agency_staff.mange_users',get_defined_vars());

    }
    public function new_user(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.agency_staff.add_new_user',get_defined_vars());

    }
    public function invite_user(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.agency_staff.invite_users',get_defined_vars());

    }
    public function mange_team(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.agency_staff.mange_team',get_defined_vars());

    }


}
