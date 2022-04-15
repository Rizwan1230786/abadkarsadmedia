<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Area;
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
use App\Models\Facilities;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PropetyController extends Controller
{
    public function index()
    {
        $record = Property::all();
        return view('admin.modules.realestate.property.listing', compact('record'));
    }
    public function get_fecilites()
    {
        $record = Facilities::all();
        return response()->json(['record' => $record]);
    }
    public function create(Request $request)
    {
        $cities = Cities::get(["name", "id"]);
        $facilites = Facilities::select('id','name')->get();

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
        $multiimages = DB::table('images')
            ->join("properties", "images.property_id", "=", "properties.id")
            ->select('images.id as propertiesimagesid', 'images.property_id', 'properties.id', 'images.image')
            ->get();

        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.property.create', compact('data', 'cities', 'feature', 'project', 'categories', 'features_property', 'agent', 'agency','multiimages',));

    }



    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }
            // $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
            // if ($request->file('price_plan')) {
            //     $imagePath = $request->file('price_plan');
            //     request()->price_plan->move(public_path('assets/images/properties/price'), $pricename);
            // }

            // if (isset($request->video) && !empty($request->video)) {
            //     $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
            //     $request->video = $path;
            //     request()->video->move(public_path('videos/'), $path);
            // }
            $data = array(
                "name" => $request->name, "url_slug" => $request->url_slug, "image" => $filename, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "square" => $request->square, "marala" => $request->marala, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id, "moderation_status" => $request->moderation_status,
                "category" => $request->category, "agent_id" => $request->agent_id, "agency_id" => $request->agency_id,"video" => $request->video,"meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "head_title" => $request->head_title,
                "meta_description" => $request->meta_description,
                "area" => $request->area,
            );
            $post = Property::Create($data);
            if ($request->file('property_map')) {
                $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
                $post->property_map=$mapname;
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/properties/maps'), $mapname);
            }
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


    public function update(Request $request)
    {

        $updatedId = $request->id;
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data updated successfully";
            $post = Property::find($updatedId);
            if (isset($request->image) && !empty($request->image)) {
                $oldimage = public_path('assets/images/properties/' . $post->image);
                if (File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $post->image = $filename;
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/properties/'), $filename);
            }
            if (isset($request->property_map) && !empty($request->property_map)) {
                $oldimage = public_path('assets/images/properties/maps/' . $post->property_map);
                if (File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $property_map = time() . '.' . request()->property_map->getClientOriginalExtension();
                $post->property_map = $property_map;
                $imagePath = $request->file('image');
                request()->property_map->move(public_path('assets/images/properties/maps'), $property_map);
            }
            // if (isset($request->price_plan) && !empty($request->price_plan)) {
            //     $oldimage = public_path('assets/images/properties/price/' . $post->price_plan);
            //     if (File::exists($oldimage)) {
            //         File::delete($oldimage);
            //     }
            //     $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
            //     $post->price_plan = $pricename;
            //     request()->price_plan->move(public_path('assets/images/properties/price'), $pricename);
            // }
            $data = array(
                "name" => $request->name, "url_slug" => $request->url_slug, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "square" => $request->square, "marala" => $request->marala, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id, "moderation_status" => $request->moderation_status,
                "category" => $request->category, "agent_id" => $request->agent_id,
                "agency_id" => $request->agency_id, "video" => $request->video,"meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "head_title" => $request->head_title,
                "meta_description" => $request->meta_description,
                "area" => $request->area,
            );
            $post->update($data);
            if ($request->hasFile('images')) {
                $images = array();
                $images_id = $request->property_id;
                if ($files = $request['images']) {
                    foreach ($files as $file) {
                        $fileName = $file->getClientOriginalName();
                        $file->move(public_path('assets/images/properties/multipleimages/'), $fileName);
                        $images = $fileName;
                        /*Insert your data*/
                        Image::updateOrCreate(array('id' => $images_id), [
                            'property_id' => $post->id,
                            'image' => $images
                        ]);
                    }
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
        $oldimage = public_path('assets/images/properties/' . $delete->image);
        if (File::exists($oldimage)) {
            File::delete($oldimage);
        }
        $oldimage2 = public_path('assets/images/properties/maps' . $delete->property_map);
        if (File::exists($oldimage2)) {
            File::delete($oldimage2);
        }
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }

    public function fetchState(Request $request)
    {
        $data['areas'] = Area::where("city",$request->city_id)->get(["areaname", "id"]);
        return response()->json($data);
    }

    public function facility(Request $request)
    {
        $data['facility'] = Facilities::get(["name", "id"]);
        return response()->json($data);
    }
}
