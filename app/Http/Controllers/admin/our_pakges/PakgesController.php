<?php

namespace App\Http\Controllers\admin\our_pakges;

use App\Models\Pakges;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PakgesController extends Controller
{
    public function index()
    {
        $record = Pakges::all();
        return view('admin.modules.our_pakges.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Pakges::where('id', $updateId)->first();
        }
        return view('admin.modules.our_pakges.create', compact('data'));
    }
    public function submit(Request $request)
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
            $post = Pakges::find($updateId);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/pakges/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . 'jpg';
                    $data['image'] = $filename;
                    $destinationPath = public_path('assets/images/pakges/');
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
                    $destinationPath = public_path('assets/images/pakges/');
                    $img = Image::make(request()->image->getRealPath())->encode('jpg', 75);
                    $img->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $data['image']);
                }
                Pakges::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
}
