<?php

namespace App\Http\Controllers\Front;

use App\Models\Projects;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Cities;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class FrontController extends Controller
{
    public function view(){
        $property=Property::all();
        $project=Projects::all();
        $city=Cities::all();
        return view('front.index',compact('property','project','city'));
    }
    public function list(){
        $project=Projects::all();
        return view('front.pages.project',compact('project'));
    }
    public function agent(){
        return view('front.pages.agent');
    }
    public function agent_detail(){
        return view('front.pages.agent_detail');
    }
    public function agency(){
        return view('front.pages.agency');
    }
    public function agency_detail(){
        return view('front.pages.agency_detail');
    }
    public function property(){
        $property=Property::all();
        return view('front.pages.property',compact('property'));
    }
    public function property_detail($id){
        $assign = DB::table('features_property')
        ->join("features","features_property.features_id","=","features.id")
        ->join('properties','features_property.property_id','=','properties.id')
        ->select('features.name as FeaturesName', 'properties.id as propertiesID',)
        ->get();

        $property = Property::where('id',$id)->get();
        return view('front.pages.property_detail',compact('property','assign'));
    }
    public function blog(){
        return view('front.pages.blog');
    }
    public function blog_detail(){
        return view('front.pages.blog_detail');
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
        $project = Projects::where('id',$id)->get();
        return view('front.pages.project_detail',compact('project','assign'));
    }

}
