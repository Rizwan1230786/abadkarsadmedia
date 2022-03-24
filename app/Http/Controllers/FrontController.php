<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Contactus;
use App\Traits\ContactTrait;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class FrontController extends Controller
{
    use ContactTrait;

    public function home(){
        return view('Front.Pages.home');
    }
    public function about(){
        return view('Front.Pages.about');
    }
    public function prevent(){
        return view('Front.Pages.prevent');
    }
    public function blog(){
        return view('Front.Pages.blog');
    }
    public function faq(){
        return view('Front.Pages.faq');
    }
    public function outbreak(){
        return view('Front.Pages.outbreak');
    }
    public function comingsoon(){
        return view('Front.Pages.comingsoon');
    }
    public function contact(){
        return view('Front.Pages.contactus');
    }
    public function handwash(){
        return view('Front.Pages.handwash');
    }
 
    function message(Request $req){
        dd($req);
        $receiverNumber = '+923047122971';
        $message = 'Hello' ;
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($receiverNumber, [
            'from' => $twilio_number,
            'body' => $message,
           
        ]);
    }
    public function submit(Request $request) {
 
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|min:1|max:500|email',
            'phone'=>'required',
            'age' => 'required',
        ]);
        if ($validator->passes()) {
            $data = $request->except('_token');
            Contactus::updateOrCreate($data);
            $email_data = array( 'email' => "rizwan.13347@gmail.com","jahanzaib.shakeel.75@gmail.com", 'data'  => $data);
            Mail::send('Front.Pages.Email.contactus', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'])->subject('Covid-19 Send Email')->from($email_data["data"]["email"], "Covid-19 Email");
            });
            if (Mail::failures()) {
                $type = 'error';
                $message = "Unknonw error occur";
            }
            $type = 'success';
            $message = "Thank you for Considering Covid-19";
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
}
