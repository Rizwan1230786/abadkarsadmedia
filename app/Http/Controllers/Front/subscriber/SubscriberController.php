<?php

namespace App\Http\Controllers\Front\subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{

    public function index(){
        $record=Subscriber::all();
        return view('admin.modules.subscriber.listing',compact('record'));
    }
    public function subscriber_mail(Request $request){
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);
        $data = $request->all();
        $query=Subscriber::create($data);
        if(isset($query) && !empty($query)){
            return redirect()->back()->with('message','Subscribe successfully!');
        }
    }
}
