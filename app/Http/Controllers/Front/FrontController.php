<?php

namespace App\Http\Controllers\Front;

use App\Models\Projects;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Cities;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Agency;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Project_image;
use App\Models\Webpages;
use App\Models\subpages;
class FrontController extends Controller
{
    public function index(){
        $property=Property::all();
        $project=Projects::all();
        $city=Cities::all();
        $agents=Agent::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.index',compact('property','project','city','agents','meta','data'));
    }
    public function project(){
        $project=Projects::all();
        $meta = Webpages::Where("page_title", "project")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.project',compact('project','meta','data'));
    }
    public function agent(){
        $meta = subpages::Where("page_title", "agents view")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        $agents=Agent::all();
        return view('front.pages.agent',get_defined_vars());
    }
    public function agent_detail($id){
        $agents=Agent::where('id',$id)->get();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        $property=Property::all();
        return view('front.pages.agent_detail',get_defined_vars());
    }
    public function agency(){
        $meta = subpages::Where("page_title", "agents view")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        $agencies=Agency::all();

        return view('front.pages.agency',get_defined_vars());
    }
    public function agency_detail($id){
        $agency=Agency::where('id',$id)->first();
        $projects=Projects::all();
        $agents=Agent::all();
        return view('front.pages.agency_detail',compact('agency','projects','agents'));
    }
    public function property(){
        $property=Property::all();
        $meta = Webpages::Where("page_title", "property")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.property',compact('property','meta','data'));
    }
    public function search_property(Request $request){
        $meta = Webpages::Where("page_title", "property")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        $city_name=$request->input('city_name');
        if(isset($city_name) && !empty($city_name)){
            $search_property=Property::where('city_name','LIKE','%'.$city_name.'%')->get();
        }
        return view('front.pages.property',compact('search_property','meta','data'));
    }
    public function property_detail($provider){
        $projectid=Property::where('url_slug','=',$provider)->first();
        $assign = DB::table('features_property')
        ->join("features","features_property.features_id","=","features.id")
        ->join('properties','features_property.property_id','=','properties.id')
        ->select('features.name as FeaturesName', 'properties.id as propertiesID',)
        ->get();
        $properties = Property::where('id',$projectid->id)->first();
        $agent =Agent::all();
        $images=Image::all();
        return view('front.pages.property_detail',compact('properties','assign','agent','images'));
    }
    public function blog(){
        $blog=Blog::all();
        $meta = Webpages::Where("page_title", "blog")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.blog',get_defined_vars());
    }
    public function blog_detail($provider){
        $blogsetail = Blog::where('title',$provider)->first();
        $meta = Webpages::Where("page_title", "blog")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        $blog = Blog::where('id',$blogsetail->id)->first();
        return view('front.pages.blog_detail',compact('blog','data','meta'));
    }
    public function contact(){
        $meta = Webpages::Where("page_title", "contact")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.contact',get_defined_vars());
    }
    public function about(){
        return view('front.pages.about');
    }
    public function faq(){
        return view('front.pages.faq');
    }
    public function pricing(){
        return view('front.pages.pricing');
    }
    public function error(){
        return view('front.pages.404');
    }
    public function soon(){
        return view('front.pages.coming_soon');
    }

    public function project_detail($provider){
        $projectid=Projects::where('url_slug','=',$provider)->first();
        $assign = DB::table('features_projects')
        ->join("features","features_projects.features_id","=","features.id")
        ->join('projects','features_projects.projects_id','=','projects.id')
        ->select('features.name as FeaturesName', 'projects.id as projectID',)
        ->get();
        $project = Projects::where('id',$projectid->id)->first();
        $agent =Agent::all();
        $agencies=Agency::all();
        $images=Project_image::all();
        return view('front.pages.project_detail',compact('project','assign','agent','agencies','images'));
    }

}
