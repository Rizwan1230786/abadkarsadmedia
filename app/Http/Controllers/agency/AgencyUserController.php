<?php

namespace App\Http\Controllers\agency;

use Session;
use App\Models\Agency;
use App\Models\AgencyPortal;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Cities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
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
    public function change_password(){
        return view('agency.modules.guest.agency.change_password');

    }
    public function update_password(Request $request)
    {
        $user_id=$request->id;
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $query=AgencyPortal::find($user_id)->update(['password'=> Hash::make($request->new_password)]);
        if(isset($query) && !empty($query)){
            return redirect()->back()->with('message','Password change successfully!');
        }else{
            dd('password is incoreected.');
        }

    }
    public function change_profile($id){
        $data=Agency::where('id',$id)->first();
        $city=Cities::all();
        return view('agency.modules.guest.agency.profileupdate',compact('data','city'));
    }
    public function update_user_profile(Request $request){

       $agency_id=$request->id;
       $data = Agency::find($agency_id);
        $data->name=$request->name;
        $data->office_address=$request->office_address;
        $data->office_number=$request->office_number;
        $data->mobile_number=$request->mobile_number;
        $data->fax_number=$request->fax_number;
        $data->city_name=$request->city_name;
        if (isset($request->image) && !empty($request->image)) {
            $oldimage = public_path('assets/images/agency/' . $data->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            $data->image = $filename;
            request()->image->move(public_path('assets/images/agency/'), $filename);
        }
        $data->update();
        if($data){
            return redirect()->back()->with('message','Profile Update successfully!');
        }else{
            echo "Incorrect";
        }
    }
    public function change_password_agent(){
        return view('agency.modules.guest.agent.change_password');

    }
    public function update_password_agent(Request $request)
    {
        $user_id=$request->id;
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $query=AgencyPortal::find($user_id)->update(['password'=> Hash::make($request->new_password)]);
        if(isset($query) && !empty($query)){
            return redirect()->back()->with('message','Password change successfully!');
        }else{
            dd('password is incoreected.');
        }

    }

    public function change_profile_agent($id){
        $data=Agent::where('id',$id)->first();
        $city=Cities::all();
        return view('agency.modules.guest.agent.profileupdate',compact('data','city'));
    }
    public function update_agent_user_profile(Request $request){

        $agency_id=$request->id;
        $data = Agent::find($agency_id);
         $data->name=$request->name;
         $data->office_address=$request->office_address;
         $data->office_number=$request->office_number;
         $data->mobile_number=$request->mobile_number;
         $data->fax_number=$request->fax_number;
         $data->city_name=$request->city_name;
         if (isset($request->image) && !empty($request->image)) {
             $oldimage = public_path('assets/images/agent/' . $data->image);
             if (File::exists($oldimage)) {
                 File::delete($oldimage);
             }
             $filename = time() . '.' . request()->image->getClientOriginalExtension();
             $data->image = $filename;
             request()->image->move(public_path('assets/images/agent/'), $filename);
         }
         $data->update();
         if($data){
             return redirect()->back()->with('message','Profile Update successfully!');
         }else{
             echo "Incorrect";
         }
     }
}
