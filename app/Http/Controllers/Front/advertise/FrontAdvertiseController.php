<?php

namespace App\Http\Controllers\Front\advertise;

use App\Models\Pakges;
use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FrontAdvertiseController extends Controller
{
    public function advertise()
    {
        $pakges=Pakges::where('status',1)->get();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.advertisement.advertise', get_defined_vars());
    }
    public function pakges_detail($id){
        $pakges=Pakges::where('status',1)->get();
        $detail=Pakges::where('title',$id)->first();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('front.pages.advertisement.pakges_detail', get_defined_vars());
    }
    public function send_mail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'subject' => 'required',
        ]);
        $type='success';
        $message="Email send successfully!";
        $data = $request->all();
        $email_data = array(
            'email' => "rizwan.13347@gmail.com",
            'data'  => $data,

        );
        $response = Mail::send('front.pages.advertisement.email.pakges_contectus_email', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'])->subject($email_data['data']['subject'])->from($email_data["data"]["email"], $email_data['data']['name']);
        });
        if (Mail::failures()) {
            $type = 'error';
            $message = "Unknonw error occur";
        }
        return response(['type'=>$type,'message'=>$message]);
    }
}
