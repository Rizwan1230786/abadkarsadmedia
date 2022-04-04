<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Agent;
use App\Models\Image;
use App\Models\Agency;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Projects;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PropetyController extends Controller
{
    public function index()
    {
        $record = Property::all();
        return view('admin.modules.realestate.property.listing', compact('record'));
    }
    public function create(Request $request)
    {
        $city = Cities::all();
        $project = Projects::all();
        $feature = Features::all();
        $agent = Agent::all();
        $agency = Agency::all();
        $categories = Category::with('SubCategory')->get();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        $features_property = DB::table("features_property")->where("features_property.property_id", $updateId)
            ->pluck('features_property.features_id', 'features_property.features_id')
            ->all();
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.property.create', compact('data', 'city', 'feature', 'project', 'categories', 'features_property', 'agent', 'agency'));
    }



    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
            'property_map' => 'required',
            'video'          => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }

            $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
            if ($request->file('property_map')) {
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/properties/maps'), $mapname);
            }
            // $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
            // if ($request->file('price_plan')) {
            //     $imagePath = $request->file('price_plan');
            //     request()->price_plan->move(public_path('assets/images/properties/price'), $pricename);
            // }

            if ($request->hasFile('video')) {
                $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
            }

            $data = array(
                "name" => $request->name, "image" => $filename, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "square" => $request->square, "marala" => $request->marala, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id, "status" => $request->status, "moderation_status" => $request->moderation_status,
                "category" => $request->category, "agent_id" => $request->agent_id, "agency_id" => $request->agency_id, "property_map" => $mapname,"video" => $path, //"price_plan" => $pricename,
            );
            $post = Property::Create($data);
            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('assets/images/properties/multipleimages/'), $imageName);
                    Image::create([
                        'property_id' => $post->id,
                        'image' => $imageName
                    ]);
                }
            }
            $post->features()->attach($request->feature);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }


    public function update(Request $request )
    {

        $updatedId = $request->id;
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'property_map' => 'required',
            'name' => 'required',
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data updated successfully";
            $post = Property::find($updatedId);
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }
            $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
            if ($request->file('property_map')) {
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/properties/maps'), $mapname);
            }
            if (isset($request->price_plan) && !empty($request->price_plan)) {
                $oldimage = public_path('assets/images/properties/price' . $request->price_plan);
                if (File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
                if ($request->file('price_plan')) {
                    $imagePath = $request->file('price_plan');
                    request()->price_plan->move(public_path('assets/images/properties/price'), $pricename);
                }
            }

                if ($request->hasFile('video')) {
                    $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
                }


            $data = array(
                "name" => $request->name, "image" => $filename, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "square" => $request->square, "marala" => $request->marala, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id, "status" => $request->status, "moderation_status" => $request->moderation_status,
                "category" => $request->category, "agent_id" => $request->agent_id,
                "agency_id" => $request->agency_id, "property_map" => $mapname,"video" => $path, //"price_plan" => $pricename,
            );
            $post->update($data);

        /////multiple image update
        $imageId = $request->id;
            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('assets/images/properties/multipleimages/'), $imageName);
                    Image::where('property_id', $imageId)
                    ->update([
                        'image' => $imageName,
                    ]);
                }
            }



            $post->features()->sync($request->feature);

        } else {
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
