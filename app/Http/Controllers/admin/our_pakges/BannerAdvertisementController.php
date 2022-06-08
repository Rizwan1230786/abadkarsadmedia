<?php

namespace App\Http\Controllers\admin\our_pakges;

use App\Models\Banners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class BannerAdvertisementController extends Controller
{
    public function index()
    {
        $record = Banners::all();
        return view('admin.modules.our_advertisement.banner_advertisement.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Banners::where('id', $updateId)->first();
        }
        return view('admin.modules.our_advertisement.banner_advertisement.create', compact('data'));
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
            $post = Banners::find($updateId);
            if (isset($updateId) && !empty($updateId) && $updateId > 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/our_advertisement/banners/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . 'jpg';
                    $data['image'] = $filename;
                    $destinationPath = public_path('assets/images/our_advertisement/banners/');
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
                    $destinationPath = public_path('assets/images/our_advertisement/banners/');
                    $img = Image::make(request()->image->getRealPath())->encode('jpg', 75);
                    $img->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $data['image']);
                }
                Banners::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
}
