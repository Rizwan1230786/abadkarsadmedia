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
use App\Models\UrlSlug;

class FrontController extends Controller
{
    public function index()
    {
        $category = Category::with('cities')->with('url_slugs')->get();

        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::limit(4)->get();
        $project = Projects::all();
        $city = Cities::all();
        $agents = Agent::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.index', compact('property', 'project', 'city', 'agents', 'meta', 'data', 'category', 'flats'));
    }
    public function project()
    {
        $project = Projects::paginate(4);
        $meta = Webpages::Where("page_title", "project")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.project', compact('project', 'meta', 'data'));
    }
    public function agent()
    {
        $meta = subpages::Where("page_title", "agents view")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $agents = Agent::paginate(4);
        return view('front.pages.agent', get_defined_vars());
    }
    public function agent_detail($id)
    {
        $agents = Agent::where('id', $id)->get();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $property = Property::all();
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
        $property = Property::paginate(4);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', compact('property', 'meta', 'data'));
    }
    public function show_city_area($categoryName, $urlslug)
    {
        $category = Category::with('cities')->with('url_slugs')->with('areas')->get();
        $url_slug = UrlSlug::where('url_slug', '=', $urlslug)->first();
        $get_city_name = Cities::where('id', $url_slug->city_id)->first();
        $city_area = Area::where('city_id', '=', $url_slug->city_id)->orderBy('id', 'DESC')->get();

        // $category_area=Cities::where('slug', $cityName)->with('areas')->get();
        $city_search_property = Property::where('city_name', '=', $url_slug->city_id)->get();
        $property = Property::paginate(4);
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', get_defined_vars());
    }
    public function area_peroperty($slug, $slug1, $slug2)
    {
        $category = Category::where('name', $slug)->first();
        $city = Cities::where('slug', $slug1)->first();
        $area = Area::where('slug', '=', $slug2)->first();

        $area_search_property = Property::where('area_id', '=',  $area->id)->get();
        dd( $area);
        dd($area_search_property);
        $property = Property::paginate(4);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property', compact('property', 'meta', 'data', 'area_search_property'));
    }
    // public function search_property(Request $request){
    //     $meta = Webpages::Where("page_title", "property")->first();
    //     $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
    //     $city_name=$request->input('city');
    //     if(isset($city_name) && !empty($city_name)){
    //         $search_property=Property::where('city_name','LIKE','%'.$city_name.'%')->get();
    //     }
    //     return view('front.pages.property',compact('search_property','meta','data'));
    // }
    public function single_property_detail($provider)
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
        $Check_facility = Property_facilities::all();
        return view('front.pages.property_detail', compact('properties', 'assign', 'agent', 'images'));
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
        $Check_facility = Property_facilities::all();
        return view('front.pages.property_detail', compact('properties', 'assign', 'agent', 'images'));
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
        return view('front.pages.project_detail', compact('project', 'assign', 'agent', 'agencies', 'images'));
    }




    public function list($slug){
        $category=Category::where('name',$slug)->first();
        $check=UrlSlug::where('category_id',$category->id)->get();
        $meta = Webpages::Where("page_title", "blog")->first();
        $data=Webpages::where("status", "=", 1)->orderBy('page_rank','asc')->get();
        return view('front.pages.list',get_defined_vars());
    }

}
