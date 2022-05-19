<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Features;
use App\Models\Property;
use App\Models\State;
use App\Models\Webpages;
use Illuminate\Http\Request;

class PropertyManagementController extends Controller
{
    public function inventory_search()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $category = Category::all();
        return view('userside.modules.property_management.inventory_search', get_defined_vars());
    }
    public function fetchState(Request $request)
    {
        $data['state'] = State::all();
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['city'] = Cities::where('state', $request->state_id)->get();
        return response()->json($data);
    }
    public function fetchArea(Request $request)
    {
        $data['area'] = Area::where('city_id', $request->city_id)->get();
        return response()->json($data);
    }
    public function fetchData(Request $request)
    {
        $box = $request->all();
        $data =  array();
        parse_str($box['data'], $data);
        dd($data);
        $data['area'] = Property::where(
            [
                'category_id' => $data['category_id'],
                'subcat_id' => $data['category_id'],
                'property_perpose' => $data['property_perpose'],
                'area_size' => $data['size'],
                'price' => $data['price'],
                'location' => $data['location'],
                // 'state_id' => $data['state_id'],
                'city_name' => $data['city_id'],
                'area_id' => $data['area_id'],
                // 'member_ship' => $data['user_name'],
                // 'id' => $data['id_or_ref'],
                'date_from' => $data['date_from'],
                'date_to' => $data['date_to'],
                // 'user_id sy get karna' => $data['contact_person_name'],
                // 'user_id sy get karna' => $data['contact_phone'],
                // 'unit' => $data['h_areaunit'],
            ]
        )->get();
        return response()->json($data);
    }
    public function post_listing()
    {
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $category = Category::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.post_listing2', compact('meta', 'data', 'category', 'city', 'state', 'feature'));
    }
    public function listing_policy(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.listing_policy', compact('meta', 'data'));
    }
}
