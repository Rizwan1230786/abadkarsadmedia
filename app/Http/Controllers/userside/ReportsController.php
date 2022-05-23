<?php

namespace App\Http\Controllers\userside;

use App\Models\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function all_reports(){
        $meta = Webpages::Where("page_title", "home")->first();
        $data = Webpages::where("status", "=", 1)->orderBy('page_rank', 'asc')->get();
        return view('userside.modules.reports.all_reports',get_defined_vars());
    }
}
