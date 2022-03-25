<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{

    public function index()
    {
        // $record = Properties::all();
        return view('admin.modules.realestate.properties.listing',);
    }

    public function create(Request $request)
    {
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.properties.create', compact('data'));
    }


    public function destroy($id)
    {
        $delete = Property::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }


}
