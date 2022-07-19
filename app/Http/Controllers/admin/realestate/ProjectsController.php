<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Area;
use App\Models\Agent;
use App\Models\Agency;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Investor;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Project_image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Facilities;
use App\Models\tags;

class ProjectsController extends Controller
{
    public function index()
    {
        $record = Projects::all();
        return view('admin.modules.realestate.projects.listing', compact('record'));
    }
    public function create(Request $request)
    {

        $feature = Features::all();
        $categories = Category::with('SubCategory')->get();
        $investor = Investor::all();
        $agent = Agent::all();
        $tag = tags::where('category', 'project')->orderBy('page_rank', 'asc')->get();
        $agency = Agency::all();
        $area=Area::all();
        $data = null;
        $cities = Cities::get(["name", "id"]);
        $data['updateId'] = $updateId = ($request->id ?? 0);
        $features_projects = DB::table("features_projects")->where("features_projects.projects_id", $updateId)
            ->pluck('features_projects.features_id', 'features_projects.features_id')
            ->all();
            $tag_project = DB::table("project_tags")->where("project_tags.project_id", $updateId)
            ->pluck('project_tags.tags_id', 'project_tags.tags_id')
            ->all();
        $multiimages = DB::table('project_images')
            ->join("projects", "project_images.projects_id", "=", "projects.id")
            ->select('project_images.id as projectsimagesid', 'project_images.projects_id', 'projects.id', 'project_images.image')
            ->get();
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Projects::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.projects.create', compact('data', 'cities', 'feature', 'categories', 'investor', 'features_projects', 'agent', 'agency', 'multiimages','area', 'tag'));
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $data = array(
                "title" => $request->title, "url_slug" => $request->url_slug, "detail" => $request->detail, "page_content" => $request->page_content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "num_of_blocks" => $request->num_of_blocks, "num_of_floors" => $request->num_of_floors, "num_of_flats" => $request->num_of_flats, "lowest_price" => $request->lowest_price, "max_price" => $request->max_price, "currency_name" => $request->currency_name, "commercial_area_min" => $request->commercial_area_min, "commercial_area_max" => $request->commercial_area_max, "residential_area_min" => $request->residential_area_min, "residential_area_max" => $request->residential_area_max, "category" => $request->category, "investor_name" => $request->investor_name, "status" => $request->status, "expire_date" => $request->expire_date, "Open_sell_date" => $request->Open_sell_date, "agent_id" => $request->agent_id,
                "agency_id" => $request->agency_id,"meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "head_title" => $request->head_title,
                "meta_description" => $request->meta_description,
                "area" => $request->area,"image"=>$request->image,"project_map"=>$request->project_map,"price_plan"=>$request->price_plan,
            );
            if(isset($data['image']) && !empty($data['image'])) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $data['image'] = $filename;
                request()->image->move(public_path('assets/images/projects/'), $filename);
            }
            if (isset($data['project_map']) && !empty($data['project_map'])) {
                $mapname = time() . '.' . request()->project_map->getClientOriginalExtension();
                $data['project_map']= $mapname;
                request()->project_map->move(public_path('assets/images/projects/maps'), $mapname);
            }
            if (isset($data['price_plan']) && !empty($data['price_plan'])) {
                $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
                $data['price_plan']= $pricename;
                request()->price_plan->move(public_path('assets/images/projects/price'), $pricename);
            }
            $post = Projects::Create($data);
            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('assets/images/projects/multipleimages/'), $imageName);
                    Project_image::create([
                        'projects_id' => $post->id,
                        'image' => $imageName
                    ]);
                }
            }
            $post->features()->sync($request->feature, $request->category);
            // $post->category()->sync($request->category);

        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function update(Request $request)
    {
        $updatedId = $request->id;
        $type = 'success';
        $message = "Data Updated successfully";
        $post = Projects::find($updatedId);
        if (isset($request->image) && !empty($request->image)) {
            $oldimage = public_path('assets/images/projects/' . $post->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            $post->image = $filename;
            $imagePath = $request->file('image');
            request()->image->move(public_path('assets/images/projects/'), $filename);
        }
        if (isset($request->project_map) && !empty($request->project_map)) {
            $oldimage = public_path('assets/images/projects/maps/' . $post->project_map);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $project_map = time() . '.' . request()->project_map->getClientOriginalExtension();
            $post->project_map = $project_map;
            $imagePath = $request->file('image');
            request()->project_map->move(public_path('assets/images/projects/maps'), $project_map);
        }
        if (isset($request->price_plan) && !empty($request->price_plan)) {
            $oldimage = public_path('assets/images/projects/price/' . $post->price_plan);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
            $post->price_plan = $pricename;
            request()->price_plan->move(public_path('assets/images/projects/price'), $pricename);
        }

        $data = array(
            "title" => $request->title, "url_slug" => $request->url_slug, "detail" => $request->detail, "page_content" => $request->page_content, "city_name" => $request->city_name, "location" => $request->location, "latitude" => $request->latitude, "longitude" => $request->longitude, "num_of_blocks" => $request->num_of_blocks, "num_of_floors" => $request->num_of_floors, "num_of_flats" => $request->num_of_flats, "lowest_price" => $request->lowest_price, "max_price" => $request->max_price, "currency_name" => $request->currency_name, "commercial_area_min" => $request->commercial_area_min, "commercial_area_max" => $request->commercial_area_max, "residential_area_min" => $request->residential_area_min, "residential_area_max" => $request->residential_area_max, "category" => $request->category, "investor_name" => $request->investor_name, "status" => $request->status, "expire_date" => $request->expire_date, "Open_sell_date" => $request->Open_sell_date, "agent_id" => $request->agent_id,
            "agency_id" => $request->agency_id,"meta_title" => $request->meta_title,
            "meta_keywords" => $request->meta_keywords,
            "head_title" => $request->head_title,
            "meta_description" => $request->meta_description,
            "area" => $request->area,
        );
        $post->update($data);
        if ($request->hasFile('images')) {
            $images = array();
            $images_id = $request->project_id;
            if ($files = $request['images']) {
                foreach ($files as $file) {
                    $fileName = $file->getClientOriginalName();
                    $file->move(public_path('assets/images/projects/multipleimages/'), $fileName);
                    $images = $fileName;
                    /*Insert your data*/
                    Project_image::updateOrCreate(array('id' => $images_id),[
                        'projects_id' => $post->id,
                        'image' => $images
                    ]);
                }
            }
        }
        $post->features()->sync($request->feature);
        // $post->category()->sync($request->category);
        return response()->json(['type' => $type, 'message' => $message]);
    }


    public function update_facilities_status(Request $request)
    {

        $userid = $request->id;
        $status = $request->status;
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $status = Projects::whereId($userid)->update(array('status' => $status));
        if (isset($status) && !empty($status)) {
            $type = "success";
            $message = "Status updated successfully";
        }

        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        $delete = Projects::findOrFail($id);
        $oldimage = public_path('assets/images/projects/' . $delete->image);
        if (File::exists($oldimage)) {
            File::delete($oldimage);
        }
        $oldimage2 = public_path('assets/images/projects/maps' . $delete->project_map);
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
    // public function city()
    // {
    //     $cities = Cities::get(["name", "id"]);
    //     return view('admin.modules.realestate.projects.create',compact('cities'));
    // }
    public function fetchState(Request $request)
    {
        $data['areas'] = Area::where("city_id",$request->city_id)->get(["areaname", "id"]);
        return response()->json($data);
    }
}
