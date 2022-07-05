<?php

namespace App\Http\Controllers\userside;

use Carbon\Carbon;
use App\Models\Area;
use App\Models\State;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\property;
use App\Models\Webpages;
use Illuminate\Support\Arr;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Property\addProperty as PropertyAddProperty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserDashboard\AddProperty;
use App\Models\Image as ModelsImage;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
    public function fetch_zone_area(Request $request)
    {
        $data = Area::where('city_id', $request->city_id)->get();
        if (!empty($request->city_id) && !empty($request->zone_id)) {
            $data = Area::where(['city_id' => $request->city_id, 'zone' => $request->zone_id])->get();
        }
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
        $feature = Features::all();
        $user_id = Auth::user()->id;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $category = Category::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.post_listing2', get_defined_vars());
    }
    public function listing_policy()
    {
        $user_id = Auth::user()->id;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.listing_policy', get_defined_vars());
    }
    public function zone_detail()
    {
        $user_id = Auth::user()->id;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $city = Cities::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.zone_detail', get_defined_vars());
    }
    //////////active listing code/////////
    public function all_listing()
    {

        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        foreach ($property as $value) {
            $category_name = Category::where('id', $value->category)->get();
        }
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.active_listing.all_listing', get_defined_vars());
    }
    public function for_sale()
    {
        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.active_listing.for_sale', get_defined_vars());
    }
    public function for_rent()
    {
        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 1])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.active_listing.for_rent', get_defined_vars());
    }
    /////////end active all listing////////
    public function pending_all_listing()
    {
        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 0])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.pending_listing.all_listing', get_defined_vars());
    }
    public function pending_for_sale()
    {
        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 0])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.pending_listing.for_sale', get_defined_vars());
    }
    public function pending_for_rent()
    {
        $user_id = Auth::user()->id;
        $total_qouta = Property::where(['user_id' => $user_id])->count();
        $qouta_used = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $avilable = $total_qouta - $qouta_used;
        $property = Property::where(['user_id' => $user_id, 'status' => 0])->get();
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.pending_listing.for_rent', get_defined_vars());
    }
    public function submit_post_listing(AddProperty $request)
    {
        $request->validate([
            'subcat_id' => 'required',
        ]);
        $data = $request->all();
        if ($data['url_slug']) {
            if ($data['email']) {
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
                        'agency_id' => $data['agency_id'],
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
                        'video_link' => $data['video_link'],
                        'status' => 0,
                        "url_slug" => $data['url_slug'],
                        'image' => $filename,
                        'number_of_bedrooms' => $data['number_of_bedrooms'],
                        'number_of_bathrooms' => $data['number_of_bathrooms'],
                        'number_of_floors' => $data['number_of_floors'],
                    );
                    $query = Property::create($data);
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
                    // Auth::logout();
                    return redirect()->back()->with('message', 'Property Added!');
                } else {
                    return redirect()->back()->with('error', 'Email or password is incorrect');
                }
            }
            return redirect()->back()->with('error', 'Please enter email and password!');
        }
        return redirect()->back()->with('error', 'URL slug is missing!');
    }
    public function edit_for_sale($id)
    {

        $user_id = Auth::user()->id;
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $features_property = DB::table("features_property")->where("features_property.property_id", $id)
            ->pluck('features_property.features_id', 'features_property.features_id')
            ->all();
        $category = Category::all();
        $record = Property::where('id', $id)->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.post_listing2', get_defined_vars());
    }
    public function edit_for_rent($id)
    {

        $user_id = Auth::user()->id;
        $count_all = Property::where(['user_id' => $user_id, 'status' => 1])->count();
        $count_sale = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 1])->count();
        $count_rent = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 1])->count();
        $count_all_pending = Property::where(['user_id' => $user_id, 'status' => 0])->count();
        $count_sale_pending = Property::where(['user_id' => $user_id, 'type' => 'sale', 'status' => 0])->count();
        $count_rent_pending = Property::where(['user_id' => $user_id, 'type' => 'rent', 'status' => 0])->count();
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $features_property = DB::table("features_property")->where("features_property.property_id", $id)
            ->pluck('features_property.features_id', 'features_property.features_id')
            ->all();
        $category = Category::all();
        $record = Property::where('id', $id)->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.post_listing2', get_defined_vars());
    }
    public function update_post_listing(Request $request, $id)
    {
        $data = $request->all();
        $post = Property::find($id);
        if (isset($request->image) && !empty($request->image)) {
            $oldimage = public_path('assets/images/properties/' . $post->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            $post->image = $filename;
            $imagePath = $request->file('image');
            request()->image->move(public_path('assets/images/properties/'), $filename);
        }
        $data['is_expired'] = Carbon::now()->addMonth($data['is_expired']);
        $data = array(
            'area_id' => ($data['area_id'] ?? 0),
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
            'video_link' => $data['video_link'],
            'status' => 1,
            "url_slug" => $data['url_slug'],
            'image' => ($filename ?? ''),
            'number_of_bedrooms' => $data['number_of_bedrooms'],
            'number_of_bathrooms' => $data['number_of_bathrooms'],
            'number_of_floors' => $data['number_of_floors'],
        );
        $post->update($data);
        $post->features()->sync($request->feature);
        return redirect()->back()->with('message', 'Property Updated!');
    }

    public function client_main(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.client.client&leads',get_defined_vars());
    }

    public function all(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.management.all',get_defined_vars());
    }

    public function very_hot(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.management.very_hot',get_defined_vars());
    }

  
}
