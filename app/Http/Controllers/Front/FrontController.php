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

class FrontController extends Controller
{
    public function view(){
        $property=Property::all();
        $project=Projects::all();
        $city=Cities::all();
        $agents=Agent::all();
        return view('front.index',compact('property','project','city','agents'));
    }
    public function list(){
        $project=Projects::all();
        return view('front.pages.project',compact('project'));
    }
    public function agent(){
        $agents=Agent::all();
        return view('front.pages.agent',get_defined_vars());
    }
    public function agent_detail($id){
        $agents=Agent::where('id',$id)->get();
        $property=Property::all();
        return view('front.pages.agent_detail',get_defined_vars());
    }
    public function agency(){
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
        return view('front.pages.property',compact('property',));
    }
    public function property_detail($id){
        $assign = DB::table('features_property')
        ->join("features","features_property.features_id","=","features.id")
        ->join('properties','features_property.property_id','=','properties.id')
        ->select('features.name as FeaturesName', 'properties.id as propertiesID',)
        ->get();
        $properties = Property::where('id',$id)->first();
        $agent =Agent::all();
        $images=Image::all();
        return view('front.pages.property_detail',compact('properties','assign','agent','images'));
    }
    public function blog(){
        $blog=Blog::all();
        return view('front.pages.blog',get_defined_vars());
    }
    public function blog_detail($id){
        $blog = Blog::where('id',$id)->first();
        return view('front.pages.blog_detail',compact('blog'));
    }
    public function contact(){
        return view('front.pages.contact');
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

    public function project_detail($id){

        $assign = DB::table('features_projects')
        ->join("features","features_projects.features_id","=","features.id")
        ->join('projects','features_projects.projects_id','=','projects.id')
        ->select('features.name as FeaturesName', 'projects.id as projectID',)
        ->get();
        $project = Projects::where('id',$id)->first();
        $agent =Agent::all();
        $agencies=Agency::all();
        $images=Project_image::all();
        return view('front.pages.project_detail',compact('project','assign','agent','agencies','images'));
    }

}
