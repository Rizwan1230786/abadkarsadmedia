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
use App\Models\Features;
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
        $category = Category::with('url_slugs')->get();

        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $agents = Agent::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.index', compact('property', 'project', 'city', 'agents', 'meta', 'data', 'category', 'flats', 'search_city', 'feature'));
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
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        $property = Property::paginate(4);
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
        $category=Category::all();
        $property = Property::paginate(4);
        ////end////////
        $category = Category::with('cities')->with('url_slugs')->with('areas')->get();
        $get_city_name = Cities::where('slug', $city_slug)->first();
        $url_slug = UrlSlug::where('city_id', '=', $get_city_name->id)->first();
        $city_area = Area::where('city_id', '=', $get_city_name->id)->orderBy('id', 'DESC')->get();
        // $category_area=Cities::where('slug', $cityName)->with('areas')->get();
        $city_search_property = Property::where(['city_name'=>$get_city_name->id,'status'=>1])->get();
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
        $city_search_property = Property::where(['city_name'=>$url_slug->city_id,'status'=>1])->get();

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
          $category=Category::all();
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
        $agent = Agent::all();
        $images = Image::all();
        $Check_facility = Property_facilities::all();
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.property_detail', compact('properties', 'assign', 'agent', 'images','meta','data'));
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
        
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $meta = Webpages::Where("page_title", "property")->first();
        return view('front.pages.property_detail', compact('properties', 'assign', 'agent', 'images','meta','data'));
    }
    public function search_city_area_base_property($slug1, $slug2)
    {
        $area = Area::where('slug', '=', $slug2)->first();
        $area_search_property = Property::where('area_id', $area->id)->get();
        $property = Property::paginate(5);
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();

        return view('front.pages.property', compact('property', 'meta', 'data', 'area_search_property'));
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
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        if ($request->type == null) {
            $request->type = $request->type1;
        }
        if ($request->category == null) {
            $request->category = $request->category1;
        }
        if ($request->city_name == null) {
            $request->city_name = $request->city_name1;
        }
        if ($request->number_of_bedrooms == null) {
            $request->number_of_bedrooms = $request->number_of_bedrooms1;
        }
        if ($request->number_of_bathrooms == null) {
            $request->number_of_bathrooms = $request->number_of_bathrooms1;
        }
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $city_name =  $request->city_name;
        $category_name = $request->category;
        $area_id = $request->input('area_id');
        $city_id = Cities::where('slug', $city_name)->first();
        $category_id = Category::where('name', $category_name)->first();
        $purpose = $request->type;
        $bedrooms = $request->number_of_bedrooms;
        $bathrooms = $request->number_of_bathrooms;
        $property = Property::where('status', 1)->paginate(4);
        if (isset($city_id) && !empty($city_id)) {
            $search_property = Property::where(['city_name' => $city_id->id, 'status' => 1])->get();
            foreach ($search_property as $search) {
                $get = Cities::where('id', $search->city_name)->first();
                $name = $get->name;
            }
            $count = Property::where(['city_name' => $city_id->id, 'status' => 1])->count();
        } elseif (isset($category_id) && !empty($category_id)) {
            $search_property = Property::where(['category' => $category_id->id, 'status' => 1])->get();
            foreach ($search_property as $search) {
                if (isset($search) && !empty($search)) {
                    $get = Category::where('id', $search->category)->first();
                    $name = $get->name;
                }
            }
            $name = $category_id->name;
            $count = Property::where(['category' => $category_id->id, 'status' => 1])->count();
        } elseif (isset($area_id) && !empty($area_id)) {
            $search_property = Property::where(['area_id' => $area_id, 'status' => 1])->get();
            $count = Property::where(['area_id' => $area_id, 'status' => 1])->count();
        } elseif (isset($purpose) && !empty($purpose)) {
            $search_property = Property::where(['type' => $purpose, 'status' => 1])->get();
            $name = $purpose;
            $count = Property::where(['type' => $purpose, 'status' => 1])->count();
        } elseif (isset($bedrooms) && !empty($bedrooms)) {
            $search_property = Property::where(['number_of_bedrooms' => $bedrooms, 'status' => 1])->get();
            $name = $bedrooms . " " . "Bedrooms";
            $count = Property::where(['number_of_bedrooms' => $bedrooms, 'status' => 1])->count();
        } elseif (isset($bathrooms) && !empty($bathrooms)) {
            $search_property = Property::where(['number_of_bathrooms' => $bathrooms, 'status' => 1])->get();
            $name =  $bathrooms . " " . "Bathrooms";;
            $count = Property::where(['number_of_bathrooms' => $bathrooms, 'status' => 1])->count();
        }
        return view('front.pages.property', get_defined_vars());
    }
    public function redirect_search_property(Request $request)
    {

        $category = Category::with('url_slugs')->get();
        $flats = Category::with('cities')->with('url_slugs')->get();
        $property = Property::where('status', 1)->limit(6)->get();
        $project = Projects::all();
        $search_city = Cities::with('url_slugs')->with('areas', function ($q) {
            $q->where('status', 1);
        })->with('properties')->get();
        $feature = Features::all();
        $city = Cities::all();
        $category = Category::all();
        $meta = Webpages::Where("page_title", "property")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $city_name =  $request->city_name;
        $category_name = $request->category;
        $area_id = $request->input('area_id');
        $city_id = Cities::where('slug', $city_name)->first();
        $category_id = Category::where('name', $category_name)->first();
        $purpose = $request->type;
        $bedrooms = $request->number_of_bedrooms;
        $bathrooms = $request->number_of_bathrooms;
        $property = Property::where('status', 1)->paginate(4);
        if (isset($city_id) && !empty($city_id)) {
            $search_property = Property::where(['city_name' => $city_id->id, 'status' => 1])->get();
            foreach ($search_property as $search) {
                $get = Cities::where('id', $search->city_name)->first();
                $name = $get->name;
            }
            $count = Property::where(['city_name' => $city_id->id, 'status' => 1])->count();
        } elseif (isset($category_id) && !empty($category_id)) {
            $search_property = Property::where(['category' => $category_id->id, 'status' => 1])->get();
            foreach ($search_property as $search) {
                if (isset($search) && !empty($search)) {
                    $get = Category::where('id', $search->category)->first();
                    $name = $get->name;
                }
            }
            $name = $category_id->name;
            $count = Property::where(['category' => $category_id->id, 'status' => 1])->count();
        } elseif (isset($area_id) && !empty($area_id)) {
            $search_property = Property::where(['area_id' => $area_id, 'status' => 1])->get();
            $count = Property::where(['area_id' => $area_id, 'status' => 1])->count();
        } elseif (isset($purpose) && !empty($purpose)) {
            $search_property = Property::where(['type' => $purpose, 'status' => 1])->get();
            $name = $purpose;
            $count = Property::where(['type' => $purpose, 'status' => 1])->count();
        } elseif (isset($bedrooms) && !empty($bedrooms)) {
            $search_property = Property::where(['number_of_bedrooms' => $bedrooms, 'status' => 1])->get();
            $name = $bedrooms . " " . "Bedrooms";
            $count = Property::where(['number_of_bedrooms' => $bedrooms, 'status' => 1])->count();
        } elseif (isset($bathrooms) && !empty($bathrooms)) {
            $search_property = Property::where(['number_of_bathrooms' => $bathrooms, 'status' => 1])->get();
            $name =  $bathrooms . " " . "Bathrooms";;
            $count = Property::where(['number_of_bathrooms' => $bathrooms, 'status' => 1])->count();
        }
        return view('front.pages.property', get_defined_vars());
    }
    public function fetchState(Request $request)
    {
        $city_id = Cities::where('slug', $request->city_slug)->first();
        $data['areas'] = Area::where("city_id", $city_id->id)->get(["areaname", "id", "slug"]);
        return response()->json($data);
    }
}
