<?php

namespace App\Http\Controllers\Front;

use Session;
use App\Models\Agent;
use App\Models\Cities;
use App\Models\Category;
use App\Models\Projects;
use App\Models\Property;
use App\Models\Webpages;
use App\Models\Customeruser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUs\Contact;
use App\Models\Features;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Facade\FlareClient\Http\Client;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class FrontUserController extends Controller
{
    public function userpanel()
    {
        if (Auth::guard('customeruser')->check()) {
            $category = Category::with('cities')->with('url_slugs')->get();
            $flats = Category::with('cities')->with('url_slugs')->get();
            $property = Property::limit(6)->get();
            $project = Projects::all();
            $search_city = Cities::with('url_slugs')->with('areas')->with('properties')->get();
            $feature = Features::all();
            $city = Cities::all();
            $agents = Agent::all();
            $meta = Webpages::Where("page_title", "home")->first();
            $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
            return view('front.pages.index', compact('property', 'project', 'city', 'agents', 'meta', 'data', 'category', 'flats', 'search_city', 'feature'));
        } else {
            return view('front.pages.customeruser.login');
        }
    }
    public function index()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.customeruser.login', compact('meta', 'data'));
    }
    public function signup()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.customeruser.regiter', compact('meta', 'data'));
    }
    public function regester(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:customerusers',
            'password' => 'required|string|min:8',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        if (isset($input) && !empty($input)) {
            $type = 'success';
            $message = 'Create Acount Successfully';
            $query = Customeruser::create($input);
            if ($request->file('image')) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                $imagePath = $request->file('image');
                request()->image->move(public_path('assets/images/userphoto/'), $filename);
                $query->image = $filename;
            }
            $query->save();
            return response()->json(['type' => $type, 'message' => $message]);
        }
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = Customeruser::where('google_id', $user->id)->orwhere('email', $user->email)->first();

            if ($finduser) {
                $newUser = Customeruser::where('email', $user->email)->update([
                    'firstname' => $user->name,
                    'google_id' => $user->id,
                ]);
                Auth::login($finduser);
                return redirect()->intended('user/userpanel');
            } else {
                $newUser = Customeruser::create([
                    'firstname' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect()->intended('user/userpanel');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function submitLogin(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|min:4',
            'password' => 'required',
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::guard('customeruser')->attempt($credentials)) {
                $type = 'success';
                $message = "You are login successfully";
            } else
                $message = "Invalid Email/Password";
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('front.index')->with('success', "Logout Successfully!");
    }

    public function edit_profile()
    {
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.user.customeruserprofile.edit_profile', compact('meta', 'data'));
    }
    public function update_user(Request $request, $id)
    {
        $data = Customeruser::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->education = $request->education;
        $data->country = $request->country;
        $data->region = $request->region;
        $data->experience = $request->experience;
        $data->detail = $request->detail;
        if (isset($request->image) && !empty($request->image)) {
            $oldimage = public_path('assets/images/userphoto/' . $data->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            $data->image = $filename;
            $imagePath = $request->file('image');
            request()->image->move(public_path('assets/images/userphoto/'), $filename);
        }
        $data->update();
        $type = 'success';
        $message = "User update successfully";
        if (isset($data) && !empty($data)) {
            return response()->json(['type' => $type, 'message' => $message]);
        }
    }
    public function contact_us(Contact $request)
    {
        $message = "Fill the data in proper way!";
        $data = $request->all();
        if (isset($data["email"]) && !empty($data["email"])) {
            Mail::send('front.email.contact_us', ['data' => $data], function ($message) use ($data) {
                $message->to('jahanzaib.shakeel.75@gmail.com');
                $message->from($data["email"]);
                $message->subject('Customer Support');
            });
            $message = "Our support team contact you soon!";
        } else {
            $message = "Please provide an email.";
        }
        return redirect()->back()->with('message', $message);
    }
}
