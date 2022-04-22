<?php

namespace App\Http\Controllers\admin\realestate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Area;
use App\Models\Category;
use App\Models\Cities;

class AreaController extends Controller
{
    public function index()
    {
        $record = Area::all();
        return view('admin.modules.realestate.area.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $city = Cities::all();
        $category=Category::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Area::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.area.create', get_defined_vars());
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'areaname' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $updateId = $request->id;
            $data = array("areaname" => $request->areaname,"city_id" => $request->city_id,"slug" => $request->slug,);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Data update successfully";
            }

           $check= Area::updateOrCreate(array('id' => $updateId), $data);
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
        $status = Cities::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        $delete = Area::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
