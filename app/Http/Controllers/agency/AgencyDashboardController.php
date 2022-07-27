<?php

namespace App\Http\Controllers\agency;

use App\Models\User;
use App\Models\Order;
use App\Models\property;
use App\Models\Subscriber;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;

class AgencyDashboardController extends Controller
{
    public function agencydashboard()
    {
        if (Auth::guard('agency')->check()) {
            $agent_id= Auth::user()->agent_id;
            if($agent_id){
                $agency_id=Agent::where('id',$agent_id)->first();
                $agency_property = property::where('agency_id',$agency_id->agency)->count();
                $agent_property = property::where(['agent_id' =>$agent_id, 'agency_id' => $agency_id->agency])->count();
                $agency_agents =Agent::where('agency',$agency_id->agency)->count();
                $subscriber = Subscriber::count();
                return view('agency.modules.dashboard.index', get_defined_vars());
            }else{
                $agency_id= Auth::user()->agency_id;
                $agent_id=Agent::where('agency',$agency_id)->first();
                $agency_property = property::where('agency_id',$agency_id)->count();
                $agent_property = property::where(['agent_id' =>$agent_id, 'agency_id' => $agency_id])->count();
                $agency_agents =Agent::where('agency',$agency_id)->count();
                $subscriber = Subscriber::count();
                return view('agency.modules.dashboard.index', get_defined_vars());
            }

        } else {
            return view('agency.modules.guest.login');
        }
    }
}
