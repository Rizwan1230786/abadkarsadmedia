<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Cities;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function index()
    {
        $record = Agent::all();
        return view('admin.modules.realestate.agent.listing', compact('record'));
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
        return view('admin.modules.realestate.agent.create', compact('data', 'agency', 'city'));
    }


    public function submit(Request $request)
    {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if (isset($request->image) && !empty($request->image)) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->file('image')) {
                request()->image->move(public_path('assets/images/agent/'), $filename);
            }
        }
        if ($validator->passes()) {
            $type = 'success';
            $message = "Data add successfully";
            $updateId = $request->id;
            $data = array(
                "name" => $request->name,
                "email" => $request->email,
                "office_address" => $request->office_address,
                "office_number" => $request->office_number,
                "mobile_number" => $request->mobile_number,
                "fax_number" => $request->fax_number,
                "descripition" => $request->descripition,
                "agency" => $request->agency_id,
                "city_name" => $request->city_name,
            );

            Agent::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }



    public function destroy($id)
    {
        if (isset($id) && $id != 1) {
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
        } else {
            return response(['status' => false]);
        }
    }
}
