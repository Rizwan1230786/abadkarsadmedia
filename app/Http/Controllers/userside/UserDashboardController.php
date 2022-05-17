<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use App\Models\Webpages;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $meta = Webpages::Where("page_title", "property")->first();
        return view('userside.modules.userdashboard.dashboard', get_defined_vars());
    }
}
