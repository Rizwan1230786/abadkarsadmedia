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
use App\Models\Area;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Project_image;
use App\Models\Property_facilities;
use App\Models\Webpages;
use App\Models\subpages;
use App\Models\Category;
use App\Models\Customeruser;
use App\Models\Features;
use App\Models\Pakges;
use App\Models\PropertyImage;
use App\Models\Testimonials;
use App\Models\UrlSlug;

class FrontController extends Controller
{
    public function index()
    {
        $category = Category::with('cities')->with('url_slugs', function ($q) {
            $q->where('status', 1);
        })->get();
        $flats = Category::with('cities')->with('url_slugs', function ($q) {
            $q->where('status', 1);
        })->get();
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->orderBy('id', 'desc')->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $agents = Agent::all();
        $agency = Agency::all();
        $testimonials = Testimonials::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.index', get_defined_vars());
    }
    public function new_projects(){
        $category = Category::with('cities')->with('url_slugs', function ($q) {
            $q->where('status', 1);
        })->get();
        $flats = Category::with('cities')->with('url_slugs', function ($q) {
            $q->where('status', 1);
        })->get();
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->orderBy('id', 'desc')->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $agents = Agent::all();
        $agency = Agency::all();
        $testimonials = Testimonials::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.projects.new_projects', get_defined_vars());
    }
    public function project()
    {
        $project = Projects::paginate(4);
        $count = Projects::all()->count();
        $meta = Webpages::Where("page_title", "project")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.project', compact('project', 'meta', 'data', 'count'));
    }
    public function agent()
    {
        $meta = subpages::Where("page_title", "agents view")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $agents = Agent::paginate(4);
        $property = Property::where('status', 1)->latest()->take(3)->get();
        return view('front.pages.agent', get_defined_vars());
    }
    public function agent_detail($id)
    {
        $agents = Agent::where('id', $id)->get();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $property = Property::all();
        $meta = Webpages::Where("page_title", "home")->first();
        return view('front.pages.agent_detail', get_defined_vars());
    }
    public function agency()
    {
        $meta = subpages::Where("page_title", "agents view")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $agencies = Agency::paginate(4);

        return view('front.pages.agency', get_defined_vars());
    }
    public function agency_detail($id)
    {
        $agency = Agency::where('id', $id)->first();
        $projects = Projects::all();
        $agents = Agent::all();
        return view('front.pages.agency_detail', compact('agency', 'projects', 'agents'));
    }
    public function property()
    {
        $flats = Category::with('cities')->with('url_slugs')->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        $property = Property::orderBy('id', 'desc')->where('status', 1)->paginate(4);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function show_city($city_slug)
    {
        ///property search filter show data///
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        ////end////////
        $category = Category::with('cities')->with('url_slugs')->with('areas')->get();
        $get_city_name = Cities::where('slug', $city_slug)->first();
        $url_slug = UrlSlug::where('city_id', '=', $get_city_name->id)->first();
        $city_area = Area::where(['city_id' => $get_city_name->id, 'status' => 1])->orderBy('id', 'DESC')->get();
        // $category_area=Cities::where('slug', $cityName)->with('areas')->get();
        $city_search_property = Property::where(['city_name' => $get_city_name->id, 'status' => 1])->get();
        $property = Property::where('status', 1)->paginate(4);
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function show_city_area($categoryName, $urlslug)
    {
        ///property search filter show data///
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        ////end////////
        $category = Category::with('cities')->with('url_slugs')->with('areas')->get();
        $url_slug = UrlSlug::where('url_slug', '=', $urlslug)->first();
        $get_city_name = Cities::where('id', $url_slug->city_id)->first();
        $city_area = Area::where(['city_id' => $url_slug->city_id, 'status' => 1])->orderBy('id', 'DESC')->get();
        // $category_area=Cities::where('slug', $cityName)->with('areas')->get();
        $city_search_property = Property::where(['city_name' => $url_slug->city_id, 'status' => 1])->get();

        $property = Property::where('status', 1)->paginate(4);
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function area_peroperty($slug, $slug1, $slug2)
    {
        ///property search filter show data///
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        $property = Property::paginate(4);
        ////end////////
        $category_name = Category::where('name', $slug)->first();
        $city_slug = Cities::where('slug', $slug1)->first();
        $area = Area::where('slug', '=', $slug2)->first();
        $area_search_property = Property::where(['area_id' => $area->id, 'status' => 1])->get();
        $property = Property::paginate(4);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function single_property_detail($provider)
    {
        $projectid = Property::where('url_slug', '=', $provider)->first();
        $assign = DB::table('features_property')
            ->join("features", "features_property.features_id", "=", "features.id")
            ->join('properties', 'features_property.property_id', '=', 'properties.id')
            ->select('features.name as FeaturesName', 'properties.id as propertiesID',)
            ->get();
        $properties = Property::where('id', $projectid->id)->first();
        $user = Customeruser::where('id', $properties->user_id)->first();
        $agent = Agent::all();
        $images = Image::all();
        $property_images = PropertyImage::where('property_id', $properties->id)->get();
        $Check_facility = Property_facilities::all();
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property_detail', get_defined_vars());
    }
    public function property_detail($slug1, $provider)
    {
        $projectid = Property::where('url_slug', '=', $provider)->first();
        $assign = DB::table('features_property')
            ->join("features", "features_property.features_id", "=", "features.id")
            ->join('properties', 'features_property.property_id', '=', 'properties.id')
            ->select('features.name as FeaturesName', 'properties.id as propertiesID',)
            ->get();
        $properties = Property::where('id', $projectid->id)->first();
        $agent = Agent::all();
        $images = Image::all();
        $property_images = PropertyImage::all();
        $Check_facility = Property_facilities::all();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $meta = Webpages::Where("page_title", "property")->first();
        return view('front.pages.property_detail', get_defined_vars());
    }
    public function search_city_area_base_property($slug1, $slug2)
    {
        ///property search filter show data///
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        ////end////////
        $area = Area::where('slug', '=', $slug2)->first();
        $area_search_property = Property::where(['area_id' => $area->id, 'status' => 1])->get();
        $property = Property::where('status', 1)->paginate(5);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function blog()
    {
        $blog = Blog::paginate(4);
        $meta = Webpages::Where("page_title", "blog")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.blog', get_defined_vars());
    }
    public function blog_detail($provider)
    {
        $blogsetail = Blog::where('title', $provider)->first();
        $meta = Webpages::Where("page_title", "blog")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $blog = Blog::where('id', $blogsetail->id)->first();
        return view('front.pages.blog_detail', compact('blog', 'data', 'meta'));
    }
    public function contact()
    {
        $meta = Webpages::Where("page_title", "contact")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.contact', get_defined_vars());
    }
    public function about()
    {
        return view('front.pages.about');
    }
    public function faq()
    {
        return view('front.pages.faq');
    }
    public function pricing()
    {
        return view('front.pages.pricing');
    }
    public function error()
    {
        return view('front.pages.404');
    }
    public function soon()
    {
        return view('front.pages.coming_soon');
    }
    public function project_detail($provider)
    {
        $projectid = Projects::where('url_slug', '=', $provider)->first();
        $assign = DB::table('features_projects')
            ->join("features", "features_projects.features_id", "=", "features.id")
            ->join('projects', 'features_projects.projects_id', '=', 'projects.id')
            ->select('features.name as FeaturesName', 'projects.id as projectID',)
            ->get();
        $project = Projects::where('id', $projectid->id)->first();
        $agent = Agent::all();
        $agencies = Agency::all();
        $images = Project_image::all();
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.project_detail', get_defined_vars());
    }
    public function list($slug)
    {
        dd($slug);
        $category = Category::where('name', $slug)->first();
        $check = UrlSlug::where('category_id', $category->id)->get();
        $meta = Webpages::Where("page_title", "blog")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.list', get_defined_vars());
    }
    public function search_property(Request $request)
    {
        // $category = Category::with('url_slugs')->where('name', $request->category)->get();
        ////only category
        if (isset($request->category1) && !empty($request->category1)) {
            $request->category = $request->category1;
        }
        if (isset($request->city_name1) && !empty($request->city_name1)) {
            $request->city_name = $request->city_name1;
        }
        if (isset($request->land_area2) && !empty($request->land_area2)) {
            $request->land_area = $request->land_area2;
        }
        if (isset($request->unit2) && !empty($request->unit2)) {
            $request->unit = $request->unit2;
        }
        if (isset($request->min_price2) && !empty($request->min_price2)) {
            $request->min_price = $request->min_price2;
        }
        if (isset($request->max_price2) && !empty($request->max_price2)) {
            $request->min_price = $request->min_price2;
        }
        if (isset($request->min_price2) && !empty($request->min_price2)) {
            $request->max_price = $request->max_price2;
        }
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        if (isset($request->category) && !empty($request->category)) {
            $property = Property::where('category', $request->category)->paginate(4);
        }
        ///only city name
        if (isset($request->city_name) && !empty($request->city_name)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id])->paginate(4);
        }
        ///only city name and area
        if (isset($request->area_id) && !empty($request->city_name && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'area_id' => $request->area_id])->paginate(4);
        }
        /// city and catgorey
        if (isset($request->category) && !empty($request->city_name) && !empty($request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'category' => $request->category])->paginate(4);
        }
        /// city catgorey and area
        if (isset($request->category) && !empty($request->city_name) && !empty($request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        ////only purpose
        if (isset($request->type) && !empty($request->type)) {
            $property = Property::where('type', $request->type)->paginate(4);
        }
        /// city and purpose
        if (isset($request->category) && !empty($request->city_name && $request->type)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type])->paginate(4);
        }
        /// purpose and catgorey
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $property = Property::where(['type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        /// purpose and catgorey, city
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        /// purpose and catgorey, city ,area
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms)) {
            $property = Property::where('number_of_bedrooms', $request->number_of_bedrooms)->paginate(4);
        }
        ///bedrooms and category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->category)) {
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'category' => $request->category])->paginate(4);
        }
        ///bedrooms and city
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $cities->id])->paginate(4);
        }
        ///bedrooms and city, area
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $cities->id, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms and purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->type)) {
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type])->paginate(4);
        }
        ///bedrooms and city, category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        ///bedrooms and area, category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        
        ///bedrooms and city, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->type)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'type' => $request->type])->paginate(4);
        }
        ///bedrooms and city, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->type && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'type' => $request->type, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms and category, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'category' => $request->category])->paginate(4);
        }
        ///area size
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit])->paginate(4);
        }
        ///area size and category
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category])->paginate(4);
        }
        ///area size and category, city
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name])->paginate(4);
        }
        ///area size and category, city, purpose
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type])->paginate(4);
        }
        ///area size and category, city, purpose bedrooms
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type && $request->number_of_bedrooms)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type, 'number_of_bedrooms' => $request->number_of_bedrooms])->paginate(4);
        }
        ///area size and category, city, purpose bedrooms, bathrooms
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type && $request->number_of_bedrooms && $request->number_of_bedrooms)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type, 'number_of_bedrooms' => $request->number_of_bedrooms, 'number_of_bathrooms' => $request->number_of_bedrooms])->paginate(4);
        }
        $category = Category::all();
        $city = Cities::all();
        $feature  = Features::all();
        $count   = 'test';
        $name   = 'Testing';
        if (!empty($property)) {
            return view('front.pages.property', get_defined_vars());
        }
        return redirect()->back()->with('message', 'please select any search option!');
    }
    public function redirect_search_property(Request $request)
    {

        // dd($request->all());
        // $category = Category::with('url_slugs')->where('name', $request->category)->get();
        ////only category

        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        if (isset($request->category) && !empty($request->category)) {
            $property = Property::where('category', $request->category)->paginate(4);
        }
        ///only city name
        if (isset($request->city_name) && !empty($request->city_name)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id])->paginate(4);
        }
        ///only city name and area
        if (isset($request->area_id) && !empty($request->city_name && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'area_id' => $request->area_id])->paginate(4);
        }
        /// city and catgorey
        if (isset($request->category) && !empty($request->city_name) && !empty($request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'category' => $request->category])->paginate(4);
        }
        /// city catgorey and area
        if (isset($request->category) && !empty($request->city_name) && !empty($request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        ////only purpose
        if (isset($request->type) && !empty($request->type)) {
            $property = Property::where('type', $request->type)->paginate(4);
        }
        /// city and purpose
        if (isset($request->category) && !empty($request->city_name && $request->type)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type])->paginate(4);
        }
        /// purpose and catgorey
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $property = Property::where(['type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        /// purpose and catgorey, city
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        /// purpose and catgorey, city ,area
        if (isset($request->category) && !empty($request->type && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['city_name' => $cities->id, 'type' => $request->type, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms)) {
            $property = Property::where('number_of_bedrooms', $request->number_of_bedrooms)->paginate(4);
        }
        ///bedrooms and category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->category)) {
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'category' => $request->category])->paginate(4);
        }
        ///bedrooms and city
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $cities->id])->paginate(4);
        }
        ///bedrooms and city, area
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $cities->id, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms and purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->type)) {
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type])->paginate(4);
        }
        ///bedrooms and city, category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type, 'category' => $request->category])->paginate(4);
        }
        ///bedrooms and area, category
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'type' => $request->type, 'category' => $request->category, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms and city, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->type)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'type' => $request->type])->paginate(4);
        }
        ///bedrooms and city, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->type && $request->area_id)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'type' => $request->type, 'area_id' => $request->area_id])->paginate(4);
        }
        ///bedrooms and category, purpose
        if (isset($request->number_of_bedrooms) && !empty($request->number_of_bedrooms && $request->city_name && $request->category)) {
            $cities = Cities::where('slug', $request->city_name)->first();
            $property = Property::where(['number_of_bedrooms' => $request->number_of_bedrooms, 'city_name' => $request->city_name, 'category' => $request->category])->paginate(4);
        }
        ///area size
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit])->paginate(4);
        }
        ///area size and category
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category])->paginate(4);
        }
        ///area size and category, city
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name])->paginate(4);
        }
        ///area size and category, city, purpose
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type])->paginate(4);
        }
        ///area size and category, city, purpose bedrooms
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type && $request->number_of_bedrooms)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type, 'number_of_bedrooms' => $request->number_of_bedrooms])->paginate(4);
        }
        ///area size and category, city, purpose bedrooms, bathrooms
        if (isset($request->land_area) && !empty($request->land_area && $request->unit && $request->unit && $request->category && $request->city_name && $request->type && $request->number_of_bedrooms && $request->number_of_bedrooms)) {
            $property = Property::where(['land_area' => $request->land_area, 'unit' => $request->unit, 'category' => $request->category, 'city_name' => $request->city_name, 'type' => $request->type, 'number_of_bedrooms' => $request->number_of_bedrooms, 'number_of_bathrooms' => $request->number_of_bedrooms])->paginate(4);
        }
        $category = Category::all();
        $city = Cities::all();
        $feature  = Features::all();
        $count   = 'test';
        $name   = 'Testing';
        if (!empty($property)) {
            return view('front.pages.property', get_defined_vars());
        }
        return redirect()->back()->with('message', 'please select any search option!');
    }
    public function fetchState(Request $request)
    {
        $city_id = Cities::where('slug', $request->city_slug)->first();
        $data['areas'] = Area::where("city_id", $city_id->id)->get(["areaname", "id", "slug"]);
        return response()->json($data);
    }
}
