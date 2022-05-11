<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class AuthController extends Controller
{
    public function create()
    {
        return view('admin.modules.users.createuser');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8',
            'c_password' => 'required|string|min:8',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        if (isset($input) && !empty($input)) {
            $type = 'success';
            $message = 'User added Successfully';
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $query = User::create($input);
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/userphoto/'), $filename);
                $query->image = $filename;
                $query->save();

            }
            return response()->json(['type' => $type, 'message' => $message]);
        }

    }
    public function login()
    {
        if(Auth::guard('web')->check()){
            return redirect('admin/dashboard')->with("You are not allowed to access");
        }else{
            return view('admin.modules.guest.login');
        }
    }
    public function submitLogin(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|min:4',
            'password' => 'required|min:6',
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::guard('web')->attempt($credentials)) {
                $status = Auth::guard('web')->user()->status;
                if (isset($status) && $status != 0) {
                    $type = 'success';
                    $message = "User login successfully";
                }
                else {
                    Auth::guard('web')->logout();
                    $message = "User is inactive";
                }
            }else
                $message = "Invalid Email/Password";
        }else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function edit_proflie($id)
    {
        return view('admin.modules.users.edit_proflie');
    }
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
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
    public function update_user_status(Request $request)
    {
        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        }
        else {
            $status = 1;
        }
        if(isset($userid) && $userid ==1){
            $type = "success";
            $message = "Status can't be changed";
        }else{
            $status = User::whereId($userid)->update(array('status' => $status));
            if (isset($status) && !empty($status)) {
                $type = "success";
                $message = "Status updated successfully";
            }
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        if(isset($id) && $id !=1){
            $delete = User::findOrFail($id);
            $oldimage = public_path('assets/images/userphoto/' . $delete->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $user=$delete->delete();
            if($user){
                return response(['status' => true]);
            }else{
                return response(['status' => false]);
            }
        }else {
            return response(['status' => false]);
        }
    }

}
