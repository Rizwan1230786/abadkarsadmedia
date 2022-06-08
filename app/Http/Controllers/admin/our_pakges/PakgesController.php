<?php

namespace App\Http\Controllers\admin\our_pakges;

use App\Models\Pakges;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subpackges;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PakgesController extends Controller
{
    public function index()
    {
        $record = Pakges::all();
        return view('admin.modules.our_advertisement.packges.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Pakges::where('id', $updateId)->first();
        }
        return view('admin.modules.our_advertisement.packges.create', compact('data'));
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
            $data = $request->all();
            $updateId = $request->id;
            $post = Pakges::find($updateId);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $type = 'success';
                $message = "Data updated successfully";
                $post->update($data);
            } else {
                Pakges::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function subpakgeslisting(Request $request)
    {
        $record = Subpackges::where('packges_id', '=', $request->id)->get();
        return view('admin.modules.our_advertisement.packges.subpakges_list', compact('record'));
    }
    public function subpakges_create(Request $request)
    {
        $pakges = Pakges::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Subpackges::where('id', $updateId)->first();
        }
        return view('admin.modules.our_advertisement.packges.subpakges-create', get_defined_vars());
    }
    public function submit_subpakges(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'detail' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $data = $request->all();
            $updateId = $request->id;
            $post = Subpackges::find($updateId);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/our_advertisement/pakges' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . 'jpg';
                    $data['image'] = $filename;
                    $destinationPath = public_path('assets/images/our_advertisement/pakges');
                    $img = Image::make(request()->image->getRealPath())->encode('jpg', 75);
                    $img->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $data['image']);
                }
                $post->update($data);
            } else {
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . 'jpg';
                    $data['image'] = $filename;
                    $destinationPath = public_path('assets/images/our_advertisement/pakges/');
                    $img = Image::make(request()->image->getRealPath())->encode('jpg', 75);
                    $img->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $data['image']);
                }
                Subpackges::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function update_status_subpakges(Request $request)
    {
        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $status = Subpackges::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
}
