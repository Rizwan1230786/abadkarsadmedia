<?php

namespace App\Http\Controllers\userside;

use App\Models\Webpages;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function user_profile(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.user.customeruserprofile.user-profile',get_defined_vars());
    }
    public function update_user_profile(Request $request, $id)
    {
        $data = Customeruser::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->education = $request->education;
        $data->country = $request->country;
        $data->region = $request->region;
        $data->experience = $request->experience;
        $data->detail = $request->detail;
        if (isset($request->image) && !empty($request->image)) {
            $oldimage = public_path('assets/images/userphoto/' . $data->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            $data->image = $filename;
            $imagePath = $request->file('image');
            request()->image->move(public_path('assets/images/userphoto/'), $filename);
        }
        $data->update();
        $type = 'success';
        $message = "User update successfully";
        if (isset($data) && !empty($data)) {
            return response()->json(['type' => $type, 'message' => $message]);
        }
    }
    public function change_password(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.user.customeruserprofile.changpassword.change-password',get_defined_vars());
    }
    public function update_password(Request $request)
    {
        $user_id=$request->id;
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $query=Customeruser::find($user_id)->update(['password'=> Hash::make($request->new_password)]);
        if(isset($query) && !empty($query)){
            return redirect()->back()->with('message','Password change successfully!');
        }else{
            dd('password is incoreected.');
        }

    }
}
