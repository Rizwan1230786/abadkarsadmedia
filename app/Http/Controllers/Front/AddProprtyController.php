<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Area;
use App\Models\State;
use App\Models\Cities;
use App\Models\UrlSlug;
use App\Models\Category;
use App\Models\Features;
use App\Models\Property;
use App\Models\Webpages;
use App\Models\SubCategory;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Property\addProperty;


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
        return view("front.pages.userside.property.add_property", compact('meta', 'data', 'category', 'city', 'state', 'feature'));
    }
    public function myformAjax($id)
    {
        $areas = DB::table("areas")->where("city_id", $id)->lists("name", "id");
        return json_encode($areas);
    }
    public function fetch_subtype(Request $request)
    {
        $data['areas'] = SubCategory::where("category_id", $request->city_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function submit(addProperty $request)
    {
        $request->validate([
            'subcat_id' => 'required',
        ]);
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
                if (isset($request->image) && !empty($request->image)) {
                    $image = $request->image[0];
                    $filename = rand(1000000000, 9999999999) . '.' . 'webp';
                    $destinationPath = public_path('assets/images/properties/');
                    $img = Image::make($image->getRealPath())->encode('webp', 75);
                    $img->resize(360, 250, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . $filename);
                }
                $user_id = Auth::guard('customeruser')->user()->id;
                $data['is_expired'] = Carbon::now()->addMonth($data['is_expired']);
                $data = array(
                    'area_id' => ($data['area_id'] ?? 0),
                    'user_id' => $user_id,
                    'city_name' => $data['city_name'],
                    'name' => $data['title'],
                    'type' => $data['property_purpose'],
                    'location' => $data['location'],
                    'longitude' => ($data['longitude'] ?? null),
                    'latitude' => ($data['latitude'] ?? null),
                    'category' => $data['category_id'],
                    'subcat_id' => $data['subcat_id'],
                    'price' => $data['price'],
                    'unit' => $data['unit'],
                    'descripition' => $data['description'],
                    'front_dim' => $data['front_dim'],
                    'back_dim' => $data['back_dim'],
                    'land_area' => $data['land_area'],
                    'is_expired' => $data['is_expired'],
                    'listed_date' => Carbon::now()->format('Y-m-d'),
                    'status' => 1,
                    "url_slug" => $data['url_slug'],
                    'image' => $filename,
                    'number_of_bedrooms' => $data['number_of_bedrooms'],
                    'number_of_bathrooms' => $data['number_of_bathrooms'],
                    'number_of_floors' => $data['number_of_floors'],
                    'video_link' => $data['video_link'],
                );
                $query = Property::create($data);
                UrlSlug::where('city_id', $request->city_name)->update(['status' => 1]);
                Area::where("id" , $request->area_id)->update(['status' => 1]);
                $query->features()->attach($request->feature);
                if (isset($request->image) && !empty($request->image)) {
                    foreach ($request->image as $image) {
                        $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
                        $Path = public_path('assets/images/properties/multipleimages/jpg/');
                        $img = Image::make($image->getRealPath())->encode('jpg', 100);
                        $img->resize(1100, 450, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($Path . $filename);
                        $filename2 = rand(1000000000, 9999999999) . '.' . 'webp';
                        $Path2 = public_path('assets/images/properties/multipleimages/webp/');
                        $img2 = Image::make($image->getRealPath())->encode('webp', 75);
                        $img2->resize(1100, 450, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($Path2 . $filename2);
                        // request()->image->move($destinationPath, $data['image']);
                        PropertyImage::create(['image' => $filename, 'property_id' => $query->id, 'image_webp' => $filename2]);
                    }
                }
                Auth::logout();
                return redirect()->back()->with('message', 'Property Added!');
            } else {
                return redirect()->back()->with('message', 'email or password is incorrect');
            }
        }
        return redirect()->back()->with('message', 'Please enter email and password!');
    }
}
