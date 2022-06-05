<?php

namespace App\Http\Controllers\admin\testimonials;

use App\Models\Cities;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TestimonialsController extends Controller
{
    public function index(){
        $record=Testimonials::all();
        return view('admin.modules.testimonial.index',compact('record'));

    }
    public function create(Request $request)
    {
        $data = null;
        $city=Cities::all();
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Testimonials::where('id', $updateId)->first();
        }
        return view('admin.modules.testimonial.create', get_defined_vars());
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'companyname' => 'required',
            'designation' => 'required',
            'detail' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $data = $request->all();
            $updateId = $request->id;
            $post = Testimonials::find($updateId);
            if (isset($updateId) && $updateId != 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/testimonials/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image'] = $filename;
                    request()->image->move(public_path('assets/images/testimonials/'), $filename);
                }
                $post->update($data);
            } else {
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image'] = $filename;
                    request()->image->move(public_path('assets/images/testimonials/'), $filename);
                }
                Testimonials::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {

        $delete = Testimonials::findOrFail($id);
        $oldimage = public_path('assets/images/testimonials/' . $delete->image);
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
