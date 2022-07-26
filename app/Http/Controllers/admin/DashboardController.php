<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Contactus;
use App\Models\Customeruser;
use App\Models\Order;
use App\Models\Subscriber;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $user = User::count();
            $orders = Order::count();
            $customer = Customeruser::count();
            $subscriber = Subscriber::count();
            return view('admin.modules.dashboard.index', get_defined_vars());
        } else {
            return view('admin.modules.guest.login');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/admin/login')->with('success', "Logout Successfully!");
    }
}
