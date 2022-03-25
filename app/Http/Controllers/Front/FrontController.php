<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function view(){
        return view('front.index');
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
        return view('front.pages.property');
    }
    public function property_detail(){
        return view('front.pages.property_detail');
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
