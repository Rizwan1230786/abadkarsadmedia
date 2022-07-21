<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Core;

class SitemapXmlController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->config = Core::config();
    }

    public function index(){
        $brands = DB::table('brands')
        ->where('active', 1)
        ->orderBy('position', 'asc')
        ->orderBy('title', 'asc')
        ->get();

        $device = DB::table('devices')
        ->leftJoin('brands', 'devices.brand_id', 'brands.id')
        ->select('devices.*', 'brands.id as brand_id', 'brands.title as brand_title', 'brands.slug as brand_slug')
        ->where('status', 'active')->orderBy('id', 'desc')->get();

        return response()->view('frontend/'.$this->config->template.'/sitemap', [
            'brands' => $brands,
            'device' => $device,
        ])->header('Content-Type', 'text/xml');
    }

}
