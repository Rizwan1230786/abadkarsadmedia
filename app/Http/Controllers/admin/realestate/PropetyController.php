<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Area;
use App\Models\Agent;
use App\Models\Agency;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Projects;
use App\Models\property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Facilities;
use App\Models\Property_facilities;
use App\Models\PropertyImage;
use App\Models\SubCategory;
use App\Models\UrlSlug;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Imagic;

class PropetyController extends Controller
{
    public function index()
    {
        $record = Property::orderBy('id', 'DESC')->get();
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
        $facilites = Facilities::select('id', 'name')->get();

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
        $multiimages = DB::table('property_images')
            ->join("properties", "property_images.property_id", "=", "properties.id")
            ->select('property_images.id as propertiesimagesid', 'property_images.property_id', 'properties.id', 'property_images.image')
            ->get();

        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.property.create', compact('data', 'cities', 'feature', 'project', 'categories', 'features_property', 'agent', 'agency', 'multiimages',));
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'url_slug' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'land_area' => 'required',
            'number_of_floors' => 'required',
            'number_of_bathrooms' => 'required',
            'number_of_bedrooms' => 'required',
            'location' => 'required',
            'image' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            if (isset($request->image) && !empty($request->image)) {
                $image = $request->image;
                $filename = rand(1000000000, 9999999999) . '.' . 'webp';
                $destinationPath = public_path('assets/images/properties/');
                $img = Image::make($image->getRealPath())->encode('webp', 75);
                $img->resize(360, 250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . $filename);
            }
            $data = array(
                "name" => $request->name, "url_slug" => $request->url_slug, "image" => $filename, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "land_area" => $request->land_area, "unit" => $request->unit, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id,
                "category" => $request->category, "subcat_id"=>$request->subcat_id, "agent_id" => $request->agent_id, "agency_id" => $request->agency_id, "video_link" => $request->video_link, "meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "head_title" => $request->head_title,
                "meta_description" => $request->meta_description,
                "area_id" => $request->area_id, "occupency" => $request->occupency,
                "rental_contact_period" => $request->rental_contact_period,
                "rental_contact_period_length" => $request->rental_contact_period_length,
                "monthly_rent" => $request->monthly_rent,
                "security_deposit" => $request->security_deposit,
                "security_deposit_number_of_month" => $request->security_deposit_number_of_month,
                "advance_rent_number_of_month" => $request->advance_rent_number_of_month,
                "advance_rent" => $request->advance_rent,
            );

            $post = Property::Create($data);
            UrlSlug::where('city_id', $request->city_name)->update(['status' => 1]);
            Area::where("id", $request->area_id)->update(['status' => 1]);

            if ($request->file('property_map')) {
                $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
                $post->property_map = $mapname;
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/properties/maps'), $mapname);
            }
            // if ($request->has('images')) {
            //     foreach ($request->file('images') as $image) {
            //         $imageName = time() . rand(1, 1000) . '.' . $image->extension();
            //         $image->move(public_path('assets/images/properties/multipleimages/'), $imageName);
            //         PropertyImage::create([
            //             'property_id' => $post->id,
            //             'image' => $imageName
            //         ]);
            //     }
            // }
            if (isset($request->images) && !empty($request->images)) {
                foreach ($request->images as $image) {
                    $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
                    $destinationPath = public_path('assets/images/properties/multipleimages/');
                    $img = Image::make($image->getRealPath())->encode('jpg', 75);
                    $img->resize(600, 600, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $filename);
                    $filename2 = rand(1000000000, 9999999999) . '.' . 'webp';
                    $Path2 = public_path('assets/images/properties/multipleimages/webp/');
                    $img2 = Image::make($image->getRealPath())->encode('webp', 75);
                    $img2->resize(1100, 450, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($Path2 . $filename2);
                    // request()->image->move($destinationPath, $data['image']);
                    PropertyImage::create(['image' => $filename, 'property_id' => $post->id, 'image_webp' => $filename2]);

                }
            }
            if (isset($request->facility) && !empty($request->facility)) {
                $count = count($request->facility);
                for ($i = 0; $i < $count; $i++) {
                    $task = new Property_facilities();
                    $task->property_id = $post->id;
                    $task->facility = $request->facility[$i];
                    $task->distance = $request->distance[$i];
                    $task->save();
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
            $post = property::find($updatedId);
            if (isset($request->image) && !empty($request->image)) {
                $oldimage = public_path('assets/images/properties/' . $post->image);
                if (File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $filename = rand(1000000000, 9999999999) . '.' . 'webp';
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
            $data = array(
                "name" => $request->name, "url_slug" => $request->url_slug, "type" => $request->type, "descripition" => $request->descripition, "content" => $request->content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "number_of_bedrooms" => $request->number_of_bedrooms, "number_of_bathrooms" => $request->number_of_bathrooms, "number_of_floors" => $request->number_of_floors, "land_area" => $request->land_area, "unit" => $request->unit, "currency" => $request->currency, "price" => $request->price, "property_status" => $request->property_status, "project_id" => $request->project_id, "moderation_status" => $request->moderation_status,
                "category" => $request->category,  "subcat_id"=>$request->subcat_id, "agent_id" => $request->agent_id,
                "agency_id" => $request->agency_id, "video_link" => $request->video_link, "meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "head_title" => $request->head_title,
                "meta_description" => $request->meta_description,
                "area_id" => $request->area_id, "occupency" => $request->occupency,
                "rental_contact_period" => $request->rental_contact_period,
                "rental_contact_period_length" => $request->rental_contact_period_length,
                "monthly_rent" => $request->monthly_rent,
                "security_deposit" => $request->security_deposit,
                "security_deposit_number_of_month" => $request->security_deposit_number_of_month,
                "advance_rent_number_of_month" => $request->advance_rent_number_of_month,
                "advance_rent" => $request->advance_rent,
            );
            $post->update($data);
            UrlSlug::where('city_id', $request->city_name)->update(['status' => 1]);
            Area::where('id', $request->area_id)->update(['status' => 1]);
            // if ($request->hasFile('images')) {
            //     $images = array();
            //     if ($files = $request['images']) {
            //         foreach ($request->images as $file) {
            //             $fileName =  rand(100, 200) . '.' . $file->extension();
            //             $file->move("assets/images/properties/multipleimages/", $fileName);
            //             $images = $fileName;
            //             /*Insert your data*/
            //             PropertyImage::where(['id' => $request->property_id])->update([
            //                 'property_id' => $post->id,
            //                 'image' => $images
            //             ]);
            //         }
            //     }
            // }
            if (isset($request->images) && !empty($request->images)) {
                foreach ($request->images as $image) {
                    $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
                    $destinationPath = public_path('assets/images/properties/multipleimages/');
                    $img = Image::make($image->getRealPath())->encode('jpg', 75);
                    $img->resize(600, 600, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $filename);
                    // request()->image->move($destinationPath, $data['image']);
                    PropertyImage::where(['id' => $request->property_id])->update([
                        'property_id' => $post->id,
                        'image' => $filename
                    ]);
                }
            }
            if (isset($request->facility) && !empty($request->facility)) {
                $check = $post->id;
                $count = count($request->facility);
                for ($i = 0; $i < $count; $i++) {
                    Property_facilities::where('property_id', $check)
                        ->update([
                            'distance' => $request->distance[$i],
                            'facility' => $request->facility[$i],
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
    public function update_property_status(Request $request)
    {

        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $status = Property::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }


    public function fetchState(Request $request)
    {
        $data['areas'] = Area::where("city_id", $request->city_id)->get(["areaname", "id"]);
        return response()->json($data);
    }
    public function fetchsubcat(Request $request)
    {
        $data['subcat'] = SubCategory::where("category_id", $request->cat_id)->get();
        return response()->json($data);
    }
    public function approval()
    {
        $approve = Property::where('status', 0)->get();
        return view('admin.modules.approval.approve', compact('approve'));
    }



    public function update_property($id)
    {   
        $app = Property::find($id);
        $app->status = '1' ;
        $app->save();
        return redirect()->back()->with('message' , 'Status updated');
    }
}
