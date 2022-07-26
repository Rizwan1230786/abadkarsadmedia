<?php

namespace App\Http\Controllers\agency;

use App\Models\User;
use App\Models\Order;
use App\Models\Subscriber;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AgencyDashboardController extends Controller
{
    public function agencydashboard()
    {
        if(Auth::guard('agency')->check()) {
        $user=User::count();
        $orders=Order::count();
        $customer=Customeruser::count();
        $subscriber=Subscriber::count();
        return view('agency.modules.dashboard.index',get_defined_vars());
        }else{
            return view('agency.modules.guest.login');
        }
    }
}
