<?php

namespace App\Http\Controllers\userside;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRolesController extends Controller
{
    public function index(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.user.customeruserprofile.userroles.roles',get_defined_vars());

    }
}
