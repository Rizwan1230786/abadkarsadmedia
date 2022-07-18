<?php

namespace App\Http\Controllers\Front\pdf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use PDF;
class PdfController extends Controller
{
    public function index($slug){
        // $data = Projects::where('title',$slug)->first();
        $project = Projects::where('url_slug',$slug)->first();
        $pdf = PDF::loadView('front.pdf.pdf', compact('project'));
        return $pdf->download('Detail.pdf');
}

}
