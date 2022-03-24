<?php

namespace App\Http\Controllers\admin\realestate;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $record = Category::all();
        return view('admin.modules.realestate.categories.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Category::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.categories.create', compact('data'));
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
            Category::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function update_category_status(Request $request)
    {

        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $status = Category::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }

    public function destroy($id)
    {
        $delete = Category::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }

    /////function of subcategory/////
    public function subindex()
    {
        $record = SubCategory::all();
        return view('admin.modules.realestate.categories.subcategory_list', compact('record'));
    }
    public function subcategory_create(Request $request)
    {
        $category=Category::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Category::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.categories.subcategory-create', compact('data','category'));
    }
    public function submit_subcategory(Request $request)
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
            Category::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }

}
