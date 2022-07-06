<?php

namespace App\Http\Controllers\admin\blogstags;

use App\Models\tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogtagsController extends Controller
{
    public function index()
    {
        $record = tags::all();
        return view('admin.modules.tags.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = tags::where('id', $updateId)->first();
        }
        return view('admin.modules.tags.create', compact('data'));
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
            $data = array("name" => $request->name, "category" => $request->category);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Data update successfully";
            }
            tags::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
      public function destroy($id)
    {
        $delete = tags::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
