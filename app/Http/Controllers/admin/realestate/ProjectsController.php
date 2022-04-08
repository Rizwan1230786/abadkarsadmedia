<?php

namespace App\Http\Controllers\admin\realestate;

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

class ProjectsController extends Controller
{
    public function index()
    {
        $record = Projects::all();
        return view('admin.modules.realestate.projects.listing', compact('record'));
    }
    public function create(Request $request)
    {

        $city = Cities::all();
        $feature = Features::all();
        $categories = Category::with('SubCategory')->get();
        $investor = Investor::all();
        $agent=Agent::all();
        $agency=Agency::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        $features_projects = DB::table("features_projects")->where("features_projects.projects_id", $updateId)
        ->pluck('features_projects.features_id', 'features_projects.features_id')
        ->all();
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Projects::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.projects.create', compact('data', 'city', 'feature', 'categories', 'investor','features_projects','agent','agency'));
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'price_plan' => 'required',
            'property_map' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            if ($request->file('image')) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/projects/'), $filename);
            }
            if ($request->file('property_map')) {
                $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/projects/maps'), $mapname);
            }
            if ($request->file('price_plan')) {
                $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
                $imagePath = $request->file('price_plan');
                request()->price_plan->move(public_path('assets/images/projects/price'), $pricename);
            }
            if ($request->hasFile('video')) {
                $path = $request->file('video')->store('videos/projects', ['disk' =>      'my_files']);
            }
            $data = array("title" => $request->title, "detail" => $request->detail,"page_content" => $request->page_content,"city_name" => $request->city_name,"location" => $request->location,"latitude"=>$request->latitude,"longitude"=>$request->longitude,"num_of_blocks"=>$request->num_of_blocks,"num_of_floors"=>$request->num_of_floors,"num_of_flats"=>$request->num_of_flats,"lowest_price"=>$request->lowest_price,"max_price"=>$request->max_price,"currency_name"=>$request->currency_name,"commercial_area_min"=>$request->commercial_area_min,"commercial_area_max"=>$request->commercial_area_max,"residential_area_min"=>$request->residential_area_min,"residential_area_max"=>$request->residential_area_max,"investor_name"=>$request->investor_name,"expire_date"=>$request->expire_date,"category"=>$request->category,"Open_sell_date"=>$request->Open_sell_date,"agent_id"=>$request->agent_id,"agency_id"=>$request->agency_id,"project_map" => $mapname,"price_plan" => $pricename);
            $post=Projects::Create($data);
            if($request->has('images')){
                foreach($request->file('images')as $image){
                    $imageName =time().rand(1,1000).'.'.$image->extension();
                    $image->move(public_path('assets/images/projects/multipleimages/'),$imageName);
                    Project_image::create([
                        'projects_id'=>$post->id,
                        'image'=>$imageName
                    ]);
                }
            }
            $post->features()->sync($request->feature,$request->category);
            // $post->category()->sync($request->category);

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
            'title' => 'required',
            'image' => 'required',
            'price_plan' => 'required',
            'property_map' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data Updated successfully";
            $post=Projects::find($updatedId);
            if ($request->file('image')) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/projects/'), $filename);
            }
            if ($request->file('property_map')) {
                $mapname = time() . '.' . request()->property_map->getClientOriginalExtension();
                $imagePath = $request->file('property_map');
                request()->property_map->move(public_path('assets/images/projects/maps'), $mapname);
            }
            if (isset($request->price_plan) && !empty($request->price_plan)) {
                $oldimage = public_path('assets/images/projects/price' . $request->price_plan);
                if (File::exists($oldimage)) {
                    File::delete($oldimage);
                }
            $pricename = time() . '.' . request()->price_plan->getClientOriginalExtension();
            if ($request->file('price_plan')) {
                $imagePath = $request->file('price_plan');
                request()->price_plan->move(public_path('assets/images/projects/price'), $pricename);
            }
        }
            $data = array("title" => $request->title,"detail" => $request->detail,"page_content" => $request->page_content,"city_name" => $request->city_name,"location" => $request->location,"latitude"=>$request->latitude,"longitude"=>$request->longitude,"num_of_blocks"=>$request->num_of_blocks,"num_of_floors"=>$request->num_of_floors,"num_of_flats"=>$request->num_of_flats,"lowest_price"=>$request->lowest_price,"max_price"=>$request->max_price,"currency_name"=>$request->currency_name,"commercial_area_min"=>$request->commercial_area_min,"commercial_area_max"=>$request->commercial_area_max,"residential_area_min"=>$request->residential_area_min,"residential_area_max"=>$request->residential_area_max,"category"=>$request->category,"investor_name"=>$request->investor_name,"status"=>$request->status,"expire_date"=>$request->expire_date,"Open_sell_date"=>$request->Open_sell_date,"agent_id"=>$request->agent_id,"image"=>$filename,
            "agency_id"=>$request->agency_id,"project_map" => $mapname,"price_plan" => $pricename,);
            $post->update($data);
            $post->features()->sync($request->feature);
            // $post->category()->sync($request->category);


        }else{
            $message = $validator->errors()->toArray();
        }
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
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
