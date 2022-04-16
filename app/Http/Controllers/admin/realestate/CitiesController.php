<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\State;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CitiesController extends Controller
{
    public function index()
    {
        $record = Cities::all();
        return view('admin.modules.realestate.cities.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $state = State::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Cities::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.cities.create', compact('data', 'state'));
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
            $data = $request->all();
            $updateId = $request->id;
            $post = Cities::find($updateId);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/cities/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image']=$filename;
                    request()->image->move(public_path('assets/images/cities/'), $filename);
                }
                $post->update($data);
            } else {
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image']=$filename;
                    request()->image->move(public_path('assets/images/cities/'), $filename);
                }
                Cities::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function update_status_states(Request $request)
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
        $delete = Cities::findOrFail($id);
        $oldimage = public_path('assets/images/cities/' . $delete->image);
        if (File::exists($oldimage)) {
            File::delete($oldimage);
        }
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
