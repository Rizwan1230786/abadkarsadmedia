<?php

namespace App\Http\Controllers\agency;

use Session;
use App\Models\Agency;
use App\Models\AgencyPortal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AgencyUserController extends Controller
{
    public function agencypanel()
    {
        return view('agency.modules.guest.login');
    }
    public function submitLogin(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|min:4',
            'password' => 'required',
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::guard('agency')->attempt($credentials)) {
                $type = 'success';
                $message = "You are login successfully";
            } else
                $message = "Invalid Email/Password";
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('front.index')->with('success', "Logout Successfully!");
    }
}
