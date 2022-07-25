<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Agency;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class AgencyController extends Controller
{
    public function index()
    {
        $record = Agency::all();
        return view('admin.modules.realestate.agency.listing', compact('record'));
    }

    public function create(Request $request)
    {
        $city = Cities::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Agency::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.agency.create', compact('data', 'city'));
    }
    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $data=$request->all();
            $data['password']=Hash::make('abadkar');
            $updateId = $request->id;
            $post = Agency::find($updateId);
            if (isset($updateId) && $updateId != 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($request->image) && !empty($request->image)) {
                    $oldimage = public_path('assets/images/agency/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image']=$filename;
                    request()->image->move(public_path('assets/images/agency/'), $filename);
                }
                $post->update($data);
            } else {
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image']=$filename;
                    request()->image->move(public_path('assets/images/agency/'), $filename);
                }
                Mail::send('admin.modules.realestate.agency.mail.mails', ['email'=> $request->email , 'password' => 'abadkar'], function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Send Mail');
                });
                Agency::Create($data);
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }
    public function destroy($id)
    {
        $delete = Agency::findOrFail($id);
        $oldimage = public_path('assets/images/agency/' . $delete->image);
        if (File::exists($oldimage)) {
            File::delete($oldimage);
        }
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
