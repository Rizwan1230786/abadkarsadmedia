<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Agency;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
            $updateId = $request->id;
            if (isset($request->image) && !empty($request->image)) {
                $filename = time() . '.' . request()->image->getClientOriginalExtension();
                if ($request->file('image')) {
                    $imagePath = $request->file('image');
                    request()->image->move(public_path('assets/images/agency/'), $filename);
                }
            }
            $data = array(
                "name" => $request->name,
                "email" => $request->email,
                "office_address" => $request->office_address,
                "office_number" => $request->office_number,
                "mobile_number" => $request->mobile_number,
                "fax_number" => $request->fax_number,
                "descripition" => $request->descripition,
                "image" => $filename,
                "city_name" => $request->city_name,
            );
            Agency::updateOrCreate(array('id' => $updateId), $data);
        } else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type' => $type, 'message' => $message]);
    }

    public function destroy($id)
    {
        if (isset($id) && $id != 1) {
            $delete = Agency::findOrFail($id);
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
