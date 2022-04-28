<?php

namespace App\Http\Controllers\Front;

use App\Models\Webpages;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FrontUserController extends Controller
{
    public function panel(){
        dd('ok');
    }
    public function index(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
       return view('front.pages.customeruser.login',compact('meta','data'));
    }
    public function signup(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
       return view('front.pages.customeruser.regiter',compact('meta','data'));
    }
    public function regester(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        if (isset($input) && !empty($input)) {
            $type = 'success';
            $message = 'Create Acount Successfully';
            $query = Customeruser::create($input);
            if ($request->file('image')) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/userphoto/'), $filename);
                $query->image = $filename;

            }
            $query->save();
            return response()->json(['type' => $type, 'message' => $message]);
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
            if (Auth::guard('customeruser')->attempt($credentials)) {

                    $type = 'success';
                    $message = "You are login successfully";


            }else
                $message = "Invalid Email/Password";
        }else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
}
