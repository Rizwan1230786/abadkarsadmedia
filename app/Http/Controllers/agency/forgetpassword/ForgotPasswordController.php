<?php

namespace App\Http\Controllers\agency\forgetpassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB; 
use Carbon\Carbon; 
use App\Models\AgencyPortal; 
use Mail; 
use Hash;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('agency.modules.forgotpassword.forgetpassword');
    }
    public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:agency_portals',
          ]);
          $token = Str::random(64);
          $otp = rand(10000,30000);
          DB::table('password_resets')->insert(['email' => $request->email,'token' => $token,'otp' => $otp,'created_at' => Carbon::now()]);
          Mail::send('agency.modules.forgotpassword.email.forgetPassword', ['token' => $token,'otp' => $otp], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
          return view('agency.modules.forgotpassword.forgetPasswordLink', ['email' => $request->email]);
      }
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:agency_portals',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
          $updatePassword = DB::table('password_resets')->where(['email' => $request->email,'otp' => $request->otp])->first();
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
          $user = AgencyPortal::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          return redirect('agency/agencypanel')->with('message', 'Your password has been changed!');
      }
}
