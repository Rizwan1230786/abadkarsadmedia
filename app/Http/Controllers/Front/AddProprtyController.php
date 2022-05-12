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
use App\Http\Requests\Property\addProperty;
use App\Models\Customeruser;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function myformAjax($id)

    {

        $areas = DB::table("areas")

            ->where("city_id", $id)

            ->lists("name", "id");

        return json_encode($areas);
    }
    public function fetch_subtype(Request $request)
    {
        $data['areas'] = SubCategory::where("category_id", $request->city_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function submit(addProperty $request)
    {
        $data = $request->all();
        if ($data['email'] || $data['email1'] ?? '') {
            $user = Customeruser::where('email', $data['email'])->orwhere('email', $data['email1'])->first();
            if ($user == null) {
                $data = array('email' => $data['email'], 'password' => Hash::make($data['password']), 'firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'contact' => $data['contact']);
                Customeruser::create($data);
                $credentials = $request->only('email', 'password');
            } else {
                $credentials = array();
                $credentials['email'] = $request->email1;
                $credentials['password'] = $request->password1;
            }
            Auth::guard('customeruser')->attempt($credentials);
        }
        $user_id = Auth::guard('customeruser')->user()->id;
        if (isset($data['image']) && !empty($data['image'])) {
            $filename = time() . '.' . request()->image->extension();
            $data['image'] = $filename;
            request()->image->move(public_path('assets/images/properties/'), $filename);
        }
        $data = array('area_id' => $data['area_id'], 'user_id' => $user_id, 'location' => $data['address'], 'city_name' => $data['city_name'], 'latitude' => $data['latitude'], 'longitude' => $data['longitude'], 'name' => $data['title'], 'type' => $data['type'], 'category' => $data['category_id'], 'price' => $data['price'], 'unit' => $data['unit'], 'descripition' => $data['description']);
        $query = Property::create($data);
        $query->features()->attach($request->feature);
        Auth::logout();
        return redirect()->back()->with('message', 'Property Add Successfully');
    }
}
