<?php

namespace App\Http\Controllers\agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Customeruser;
use App\Models\Subscriber;

class AgencyDashboardController extends Controller
{
    public function agencydashboard()
    {
        $user=User::count();
        $orders=Order::count();
        $customer=Customeruser::count();
        $subscriber=Subscriber::count();
        return view('agency.modules.dashboard.index',get_defined_vars());
    }
}
