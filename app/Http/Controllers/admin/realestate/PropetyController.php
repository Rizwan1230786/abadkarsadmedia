<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Projects;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PropetyController extends Controller
{
    public function index()
    {
        $record = Property::all();
        return view('admin.modules.realestate.property.listing',compact('record'));
    }
    public function create(Request $request)
    {
        $city=Cities::all();
        $project=Projects::all();
        $feature=Features::all();
        $categories=Category::with('SubCategory')->get();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.property.create', compact('data','city','feature','project','categories'));
    }



    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image'=>'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }
            $data = array("name" => $request->name,"image" => $filename, "type" => $request->type,"descripition" => $request->descripition,"content" => $request->content,"city_name" => $request->city_name,"location"=>$request->location,"latitude"=>$request->latitude,"longitude"=>$request->longitude,"number_of_bedrooms"=>$request->number_of_bedrooms,"number_of_bathrooms"=>$request->number_of_bathrooms,"number_of_floors"=>$request->number_of_floors,"square"=>$request->square,"marala"=>$request->marala,"currency"=>$request->currency,"price"=>$request->price,"property_status"=>$request->property_status,"project_id"=>$request->project_id,"status"=>$request->status,"moderation_status"=>$request->moderation_status,
            "category"=>$request->category,);
            $post=Property::Create($data);
            $post->features()->attach($request->feature);

        }else{
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }


    public function update(Request $request)
    {
        $updatedId=$request->id;
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data updated successfully";
            $post=Property::find($updatedId);
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }
            $data = array("name" => $request->name,"image" => $filename, "type" => $request->type,"descripition" => $request->descripition,"content" => $request->content,"city_name" => $request->city_name,"location"=>$request->location,"latitude"=>$request->latitude,"longitude"=>$request->longitude,"number_of_bedrooms"=>$request->number_of_bedrooms,"number_of_bathrooms"=>$request->number_of_bathrooms,"number_of_floors"=>$request->number_of_floors,"square"=>$request->square,"marala"=>$request->marala,"currency"=>$request->currency,"price"=>$request->price,"property_status"=>$request->property_status,"project_id"=>$request->project_id,"status"=>$request->status,"moderation_status"=>$request->moderation_status,
            "category"=>$request->category,);
            $post->update($data);
            $post->features()->sync($request->feature);

        }else{
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }







    public function destroy($id)
    {
        $delete = Property::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
