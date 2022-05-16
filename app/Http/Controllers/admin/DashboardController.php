<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Contactus;
use App\Models\Customeruser;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {

        $user=User::count();
        $customer=Customeruser::count();
        return view('admin.modules.dashboard.index',compact('user','customer'));
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/admin/login')->with('success',"Logout Successfully!");
    }
}
