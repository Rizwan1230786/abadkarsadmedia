<?php

namespace App\Http\Controllers\Front;

use App\Models\State;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Webpages;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customeruser;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AddProprtyController extends Controller
{
    public function add_property()
    {
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $category = Category::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.userside.property.add_property', compact('meta', 'data', 'category', 'city', 'state', 'feature'));
    }
    public function fetch_subtype(Request $request)
    {
        $data['areas'] = SubCategory::where("category_id", $request->city_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function submit(Request $request)
    {
        $data = $request->all();
        if ($data['email']) {
            $user = Customeruser::where('email', $data['email'])->first();
            if ($user == null) {
                $data = array('email' => $data['email'], 'password' => Hash::make($data['password']), 'firstname' => $data['name']);
                $newUser = Customeruser::create($data);
                $credentials = $request->only('email', 'password');
            } else {
                $credentials = $request->only('email', 'password');
            }
            Auth::guard('customeruser')->attempt($credentials);
        }
        $id = Auth::user()->id;
        $data = array('user_id' => $id, 'location' => $data['address'], 'city_name' => $data['city_name'], 'latitude' => $data['latitude'], 'longitude' => $data['longitude']);
        $newUser = Property::create($data);
        Auth::logout();
    }
}
