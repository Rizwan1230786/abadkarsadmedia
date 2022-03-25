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
        $record = Projects::all();
        return view('admin.modules.realestate.projects.listing',compact('record'));
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
            'title' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $updateId = $request->id;
            $data = array("title" => $request->title, "detail" => $request->detail,"page_content" => $request->page_content,"city_name" => $request->city_name,"location" => $request->location,"latitude"=>$request->latitude,"longitude"=>$request->longitude,"num_of_blocks"=>$request->num_of_blocks,"num_of_floors"=>$request->num_of_floors,"num_of_flats"=>$request->num_of_flats,"lowest_price"=>$request->lowest_price,"max_price"=>$request->max_price,"currency_name"=>$request->currency_name,"commercial_area_min"=>$request->commercial_area_min,"commercial_area_max"=>$request->commercial_area_max,"residential_area_min"=>$request->residential_area_min,"residential_area_max"=>$request->residential_area_max,"category"=>$request->category,"investor_name"=>$request->investor_name,"status"=>$request->status,"expire_date"=>$request->expire_date,"Open_sell_date"=>$request->Open_sell_date);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Data update successfully";
            }
            $projects=Projects::updateOrCreate(array('id' => $updateId), $data);
            $projects->brand()->sync($request->feature);
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
