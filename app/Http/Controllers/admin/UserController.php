<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show User Listing
    public function index(){
        $user = User::get();
        return view('admin.modules.users.listing',compact('user'));
    }

    //Show User Form to add new Users
    public function create(Request $request){
        $updateId = $request->route('id');
        $user = null;
        if(is_numeric($updateId) && $updateId > 0) {
            $user = User::where('id',$updateId)->first();
        }
        return view('admin.modules.users.form',compact('user'));
    }
}
