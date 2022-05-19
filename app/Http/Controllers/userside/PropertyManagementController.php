<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Features;
use App\Models\State;
use App\Models\Webpages;
use Illuminate\Http\Request;

class PropertyManagementController extends Controller
{
    public function post_listing()
    {
        $city = Cities::all();
        $state = State::all();
        $feature = Features::all();
        $category = Category::all();
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.property_management.post_listing2', compact('meta', 'data', 'category', 'city', 'state', 'feature'));
    }
    public function inventory_search(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();

        return view('userside.modules.property_management.inventory_search',get_defined_vars());
    }
}
