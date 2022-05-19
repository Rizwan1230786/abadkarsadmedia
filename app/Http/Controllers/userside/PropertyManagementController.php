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
use Illuminate\Support\Arr;

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

        $user = Property::query();

        // Search for a property based on their category name.
        if (!empty($data['category_id'])) {
            $data['category_id'] = Category::select('name')->where('id', $data['category_id'])->first();
            $user->where('category', $data['category_id']->name);
            if (!empty($data['subcat_id'])) {
                $user->where(['subcat_id' => $data['subcat_id'], 'category' => $data['category_id']->name]);
            }
        }
        // Search for a property based on their property_purpose or type.
        if (!empty($data['property_perpose'])) {
            $user->orwhere('type', $data['property_perpose']);
        }
        // Search for a property based on their area_size.
        if (!empty($data['size'])) {
            $user->orwhere('area_size', $data['size']);
        }
        // Search for a property based on their price.
        if (!empty($data['price'])) {
            $user->orwhere('price', $data['price']);
        }
        // Search for a property based on their location.
        if (!empty($data['location'])) {
            $user->where('location', $data['location']);
        }
        // Search for a property based on their state_id.
        // if (Arr::has($data, 'state_id')) {
        //     $user->where('state_id', $data['state_id']);
        // }
        // Search for a property based on their city_name.
        if (Arr::has($data, 'city_name')) {
            $user->where('city_name', $data['city_name']);
        }
        // Search for a property based on their area_id.
        if (Arr::has($data, 'area_id')) {
            $user->where('area_id', $data['area_id']);
        }
        // Search for a property based on their user_name.
        // if (Arr::has($data, 'user_name')) {
        //     $user->where('member_ship', $data['user_name']);
        // }
        // Search for a property based on their id_or_ref.
        if (Arr::has($data, 'id_or_ref')) {
            $user->orwhere('id', $data['id_or_ref']);
        }
        // Search for a property based on their date_from.
        // if (Arr::has($data, 'date_from')) {
        //     $user->whereDate('created_at', $data['date_from']);
        // }
        // Search for a property based on their date_to.
        // if (Arr::has($data, 'date_to')) {
        //     $user->whereDate('created_at', $data['date_to']);
        // }
        // Search for a property based on their contact_person_name.
        // if (Arr::has($data, 'contact_person_name')) {
        //     $user->where('user_id sy get karna', $data['contact_person_name']);
        // }
        // Search for a property based on their contact_person_name.
        // if (Arr::has($data, 'contact_phone')) {
        //     $user->where('user_id sy get karna', $data['contact_phone']);
        // }
        $data = $user->get();
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
    public function zone_detail(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.zone_detail', compact('meta', 'data'));
    }
}
