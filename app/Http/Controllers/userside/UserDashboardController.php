<?php

namespace App\Http\Controllers\userside;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable=$total_qouta - $qouta_used;
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $meta = Webpages::Where("page_title", "property")->first();
        return view('userside.modules.userdashboard.dashboard', get_defined_vars());
    }
}
