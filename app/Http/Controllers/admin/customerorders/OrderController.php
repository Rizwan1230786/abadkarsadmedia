<?php

namespace App\Http\Controllers\admin\customerorders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $user = Order::get();
        return view('admin.modules.customerorders.listing',compact('user'));

    }
}
