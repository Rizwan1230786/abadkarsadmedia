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
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

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
        if ($request->email1 == null) {
            $request->validate([
                'CaptchaCode' => 'required|valid_captcha',

            ]);
        }
        $data = $request->all();
        if ($data['email'] || $data['email1'] ?? '') {
            $user = Customeruser::where('email', $data['email1'])->first();
            if ($user == null) {
                $newData = array('email' => $data['email'], 'password' => Hash::make($data['password']), 'firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'contact' => $data['contact']);
                Customeruser::create($newData);
                $newCustomer = Customeruser::select(["id", "firstname", "lastname", "email"])->Where(['email' => $request["email"]])->first();
                Auth::guard('customeruser')->login($newCustomer);
            } else {
                $oldCustomer = Customeruser::select(["id", "password", "email"])->Where(['email' => $request["email1"]])->first();
                $nextContinue = Hash::check($request["password1"], $oldCustomer['password']);
                if ($nextContinue == true)
                    Auth::guard('customeruser')->login($oldCustomer);
            }
            if (Auth::check()) {
                $user_id = Auth::guard('customeruser')->user()->id;
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . request()->image->extension();
                    $data['image'] = $filename;
                    request()->image->move(public_path('assets/images/properties/'), $filename);
                }
                $data['is_expired'] = Carbon::now()->addMonth($data['is_expired']);
                $data = array('status' => 1, 'area_id' => $data['area_id'], 'user_id' => $user_id, 'city_name' => $data['city_name'], 'name' => $data['title'], 'type' => $data['property_purpose'], 'location' => $data['location'], 'category' => $data['category_id'], 'subcat_id' => $data['subcat_id'], 'price' => $data['price'], 'unit' => $data['unit'], 'descripition' => $data['description'], 'front_dim' => $data['front_dim'], 'back_dim' => $data['back_dim'], 'land_area' => $data['land_area'], 'is_expired' => $data['is_expired']);

                $query = Property::create($data);
                $query->features()->attach($request->feature);
                Auth::logout();
                return redirect()->back()->with('message', 'Property Added!');
            } else {
                return redirect()->back()->with('message', 'email or password is incorrect');
            }
        }
        return redirect()->back()->with('message', 'Please enter email and password!');
    }
}
