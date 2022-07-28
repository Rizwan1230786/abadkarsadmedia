<?php

namespace App\Http\Controllers\agency;

use App\Models\Agent;
use App\Models\Agency;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AgencyPortal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AgentsController extends Controller
{
    public function index()
    {
        $agency_id = Auth::user()->agency_id;
        $record = Agent::where('agency', $agency_id)->get();
        return view('agency.modules.agent.listing', compact('record'));
    }

    public function create(Request $request)
    {
        $agency = Agency::all();
        $city = Cities::all();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Agent::where('id', $updateId)->first();
        }
        return view('agency.modules.agent.create', compact('data', 'agency', 'city'));
    }

    public function submit(Request $request)
    {

        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:agency_portals'
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $data = $request->all();
            $updateId = $request->id;
            $post = Agent::find($updateId);
            if (isset($updateId) && $updateId != 0) {
                $type = 'success';
                $message = "Data updated successfully";
                if (isset($data['image']) && !empty($data['image'])) {
                    $oldimage = public_path('assets/images/agent/' . $post->image);
                    if (File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image'] = $filename;
                    request()->image->move(public_path('assets/images/agent/'), $filename);
                }
                $post->update($data);
            } else {
                if (isset($data['image']) && !empty($data['image'])) {
                    $filename = time() . '.' . request()->image->getClientOriginalExtension();
                    $data['image'] = $filename;
                    request()->image->move(public_path('assets/images/agent/'), $filename);
                }
                $agent = Agent::Create($data);
                $randum_pasword = rand(10000000,30000000);
                $agentportal = new AgencyPortal();
                $agentportal['email'] = $agent->email;
                $agentportal['agent_id']=$agent->id;
                $agentportal['password'] = encrypt($randum_pasword);
                $agentportal['type'] = "agent";
                Mail::send('agency.modules.agent.mail.mails', ['email' => $agentportal['email'], 'password' => $randum_pasword], function ($message) use ($request) {
                    $message->to($request->email);
                    $message->from("support@abadkar.com");
                    $message->subject('Send Mail');
                });
                $agentportal->save();
            }
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }

    public function destroy($id)
    {

        $delete = Agent::findOrFail($id);
        $oldimage = public_path('assets/images/agent/' . $delete->image);
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

    public function resend_email_agency(Request $request){
        $resend_data=AgencyPortal::where('agency_id',$request->id)->first();
        $password=decrypt($resend_data->password);
        $email=$resend_data->email;
        Mail::send('agency.modules.agent.mail.mails', ['email'=> $email , 'password' => $password], function($message) use($email){
            $message->to($email);
            $message->from("support@abadkar.com");
            $message->subject('Send Mail');
        });
        return redirect()->back();

    }
}
