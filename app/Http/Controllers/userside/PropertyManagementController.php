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
use Illuminate\Support\Facades\Auth;

class PropertyManagementController extends Controller
{
    public function inventory_search()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        $category = Category::all();
        return view('userside.modules.property_management.inventory_search', get_defined_vars());
    }
    public function fetchState()
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
        $user_id = Auth::user()->id;
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
            $price = explode(" ", $data['price']);
            if (isset($price[0]) && $price[0] == 0) {
                $user->where('price', '<', $price[1]);
            } elseif (isset($price[1]) && $price[1] == 0) {
                $user->where('price', '>', $price[0]);
            } else {
                $user->whereBetween('price', [$price[0], $price[1]]);
            }
        }
        // Search for a property based on their location.
        if (!empty($data['location'])) {
            $user->orwhere('location', $data['location']);
            // Search for a property based on their state_id.
            if (!empty($data['state_id'])) {
                // $user->orwhere(['state_id'=> $data['state_id'],'location', $data['location']]);
            }
            // Search for a property based on their city_name.
            if (!empty($data['city_id'])) {
                // 'state_id'=> $data['state_id'],'location', $data['location']
                $user->orwhere(['city_name' =>  $data['city_id'],]);
            }
            // Search for a property based on their area_id.
            if (!empty($data['area_id'])) {
                // 'state_id'=> $data['state_id'],'location', $data['location']
                $user->orwhere(['area_id' =>  $data['area_id'], 'city_name' =>  $data['city_id'],]);
            }
        }
        // Search for a property based on their user_name.
        // if (!empty($data['user_name'])) {
        //     $user->where('member_ship', $data['user_name']);
        // }
        // Search for a property based on their id_or_ref.
        if (!empty($data['id_or_ref'])) {
            $user->orwhere('id', $data['id_or_ref']);
        }
        // Search for a property based on their date_from.
        if (!empty($data['date_from'])) {
            $from =  $data['date_from'];
            $to =  $data['date_to'];
            $user->WhereBetween('created_at', [$from, $to]);
        }

        // Search for a property based on their contact_person_name.
        // if (!empty($data['contact_person_name'])) {
        //     $user->where('user_id sy get karna', $data['contact_person_name']);
        // }
        // Search for a property based on their contact_person_name.
        // if (!empty($data['contact_phone'])) {
        //     $user->where('user_id sy get karna', $data['contact_phone']);
        // }
        $user = $user->where('user_id', $user_id)->get();
        return response()->json($user);
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
    public function listing_policy()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.listing_policy', compact('meta', 'data'));
    }
    public function zone_detail()
    {
        $city = Cities::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.zone_detail', get_defined_vars());
    }
    public function all_listing(){
        $user_id = Auth::user()->id;
        $property=Property::where('user_id',$user_id)->get();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.active_listing.all_listing',get_defined_vars());
    }
}
