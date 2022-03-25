<?php

namespace App\Http\Controllers\admin\realestate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Projects;
use App\Models\Cities;
use App\Models\Features;
use App\Models\Category;
use App\Models\Investor;

class ProjectsController extends Controller
{
    public function index()
    {
        // $record = Projects::all();
        return view('admin.modules.realestate.projects.listing');
    }
    public function create(Request $request)
    {
        
      
        $city=Cities::all();
        $feature=Features::all();
        $categories=Category::with('SubCategory')->get();
        $investor=Investor::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Projects::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.projects.create', compact('data','city','feature','categories','investor'));
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $updateId = $request->id;
            $data = array("name" => $request->name, "detail" => $request->detail);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Data update successfully";
            }
            Projects::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function update_facilities_status(Request $request)
    {
       
        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $status = Projects::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        $delete = Projects::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
