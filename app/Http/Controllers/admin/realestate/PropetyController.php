<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Cities;
use App\Models\Category;
use App\Models\Features;
use App\Models\Projects;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropetyController extends Controller
{
    public function index()
    {
        // $record = Property::all();
        return view('admin.modules.realestate.property.listing');
    }
    public function create(Request $request)
    {
        $city=Cities::all();
        $project=Projects::all();
        $feature=Features::all();
        $categories=Category::with('SubCategory')->get();
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if (is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Property::where('id', $updateId)->first();
        }
        return view('admin.modules.realestate.property.create', compact('data','city','feature','project','categories'));
    }







    public function destroy($id)
    {
        $delete = property::findOrFail($id);
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }
}
