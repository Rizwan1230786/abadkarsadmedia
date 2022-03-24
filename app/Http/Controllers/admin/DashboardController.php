<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Contactus;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
       
        $user=User::count();
        return view('admin.modules.dashboard.index',compact('user'));
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin:login')->with('success',"Logout Successfully!");
    }
}
