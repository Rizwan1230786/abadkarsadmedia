<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function view(){
        $property=Property::all();
        return view('front.index',compact('property'));
    }
    public function list(){
        return view('front.pages.list');
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
        $property = Property::where('id',$id)->get();
        return view('front.pages.property_detail',compact('property'));
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

}
