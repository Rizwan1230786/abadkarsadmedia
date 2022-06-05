<?php

namespace App\Http\Controllers\userside\roles;

use DB;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $status=0;
        if($request->id){
            $role = Role::find($request->id);
            $role->status=$status;
            $role->update();
           if(!empty(Auth::user()->roles))
            {
                $role=Null;
                $user = Customeruser::where('id', Auth::user()->id)->first();
                $user->roles=$role;
                $user->update();
            }
            return redirect('user/user-roles')
            ->with('message','Role updated successfully');
        }else{
            $this->validate($request, [
                'name' => 'required',
            ]);
            $status=1;
            $role = Role::where('name',$request->name)->first();
            $role->status=$status;
            $role->update();
            if(Auth::user()->roles == Null){
                $user = Customeruser::where('id', Auth::user()->id)->first();
                $user->roles=$request->input('name');
                $user->update();
            }elseif(!empty(Auth::user()->roles))
            {
                $role=Null;
                $user = Customeruser::where('id', Auth::user()->id)->first();
                $user->roles=$role;
                $user->update();
            }
            // $role->syncPermissions($request->input('permission'));
            return redirect('user/user-roles')
                            ->with('message','Role updated successfully');
        }
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            // 'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        if(Auth::user()->roles == Null){
            $user = Customeruser::where('id', Auth::user()->id)->first();
            $user->roles=$request->input('name');
            $user->update();
        }
        // $role->syncPermissions($request->input('permission'));
        return redirect('user/user-roles')
                        ->with('message','Role created successfully');

    }
}
