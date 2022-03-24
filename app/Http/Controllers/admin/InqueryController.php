<?php

namespace App\Http\Controllers\admin;
use App\Models\Contactus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InqueryController extends Controller
{
    public function index(){
        $record=Contactus::orderBy('id', 'DESC')->get();
        return view('admin.modules.inquery.listing',compact('record'));
    }
    public function detail(Request $req){
        $detail=Contactus::where('id',"=", $req->id)->first();
        return view('admin.modules.inquery.detail' ,compact('detail'));
    }
}
