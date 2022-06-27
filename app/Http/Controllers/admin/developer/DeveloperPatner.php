<?php

namespace App\Http\Controllers\admin\developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Features;
use App\Models\develop;

class DeveloperPatner extends Controller
{
    public function show_create()
    {
        return view('admin.modules.developer.create');
    }
    public function create(Request $request)
    {
        
        $data = $request->all();
        $data = array(
            'name' => $data['name'],
            'address' => $data['address'],
            'phone_no' => $data['phone_no'],
          
            
        );
           
        if (isset($data['image']) && !empty($data['image'])) {
            foreach ($request->image as $image) {
                $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
                $Path = public_path('assets/images/developer/multiimages/jpg/' .$data->image);
                $img = Image::make($image->getRealPath())->encode('jpg', 100);
                $img->resize(1100, 450, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($Path . $filename);
                $filename2 = rand(1000000000, 9999999999) . '.' . 'webp';
                $Path2 = public_path('assets/images/developer/multiimages/webp/' .$data->image);
                $img2 = Image::make($image->getRealPath())->encode('webp', 75);
                $img2->resize(1100, 450, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($Path2 . $filename2);
                // request()->image->move($destinationPath, $data['image']);
                
            }
            develop::create(['image' => $filename,  'image_webp' => $filename2, $data]);
        
            return redirect()->back()->with('message', 'Developer Added!');

    }

}

  public function developer_index()
  {
      $developer = develop::all();
      return view('admin.modules.developer.index', compact('developer'));
  }

  public function developer_update(Develop $develop, $id)
  {
    $data = develop::find($id);
    return view('admin.modules.developer.update', compact('data'));
  }

  public function update(Request $request)
  {
      $id = $request->id;
      
      $data = $request->all();
      $data = array(
          'name' => $data['name'],
          'address' => $data['address'],
          'phone_no' => $data['phone_no'],
          'image' => $data['image'],
          
      );
      if(isset($id) && $id>0){
          $data = $request->$id;
          $data = develop::find($id);
          $query = develop::create($data);
      if (isset($data['image']) && !empty($data['image'])) {
          foreach ($request->image as $image) {
              $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
              $Path = public_path('assets/images/developer/multiimages/jpg/');
              $img = Image::make($image->getRealPath())->encode('jpg', 100);
              $img->resize(1100, 450, function ($constraint) {
                  $constraint->aspectRatio();
              })->save($Path . $filename);
              $filename2 = rand(1000000000, 9999999999) . '.' . 'webp';
              $Path2 = public_path('assets/images/developer/multiimages/webp/');
              $img2 = Image::make($image->getRealPath())->encode('webp', 75);
              $img2->resize(1100, 450, function ($constraint) {
                  $constraint->aspectRatio();
              })->save($Path2 . $filename2);
              // request()->image->move($destinationPath, $data['image']);
              develop::create(['image' => $filename,  'image_webp' => $filename2]);
          }
      }
          return redirect()->back()->with('message', 'Developer Added!');

  }

}

public function delete($id)
    {
        $pannel = develop::find($id);
        $pannel->delete();
        return response()->json([
            'message' => 'Data deleted successfully!'
          ]);
    }

             
             
    
}
