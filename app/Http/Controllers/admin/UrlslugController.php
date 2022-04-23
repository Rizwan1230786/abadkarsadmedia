<?php

namespace App\Http\Controllers\admin;

use App\Models\Cities;
use App\Models\UrlSlug;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class UrlslugController extends Controller
{
     public function index()
    {
        $record = UrlSlug::all();
        return view('admin.modules.realestate.urlslugs.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $city = Cities::all();
        $category=Category::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = UrlSlug::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.urlslugs.create', get_defined_vars());
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
            $data = array("title" => $request->title,"city_id" => $request->city_id,"url_slug" => $request->url_slug,"category_id" => $request->category_id,);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Data update successfully";
            }

           $check= UrlSlug::updateOrCreate(array('id' => $updateId), $data);
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
        $status = UrlSlug::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        $delete = UrlSlug::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
