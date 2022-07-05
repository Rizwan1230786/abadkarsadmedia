<?php

namespace App\Http\Controllers\admin\developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Features;
use App\Models\develop;
use App\Models\tags;

class DeveloperPatner extends Controller
{
    public function show_create()
    {
        return view('admin.modules.developer.create');
    }
    public function create(Request $request)
    {
        $data = $request->except('_token');
        $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
        $Path = public_path('assets/images/developer/jpg/');
        $img = Image::make($data['image']->getRealPath())->encode('jpg', 100);
        $img->resize(1100, 450, function ($constraint) {
            $constraint->aspectRatio();
        })->save($Path . $filename);
        $filename2 = rand(2000000000, 9999999999) . '.' . 'webp';
        $Path2 = public_path('assets/images/developer/webp/');
        $img2 = Image::make($data['image']->getRealPath())->encode('webp', 75);
        $img2->resize(1100, 450, function ($constraint) {
            $constraint->aspectRatio();
        })->save($Path2 . $filename2);
        $data['image'] = $filename;
        $data['image_webp'] = $filename2;
        develop::create(['name' => $data['name'], 'address' => $data['address'], 'phone_no' => $data['phone_no'], 'image' => $data['image'], 'image_webp' => $data['image_webp']]);
        return redirect()->back()->with('message', 'Developer Added!');
    }

    public function developer_index()
    {
        $developer = develop::all();
        return view('admin.modules.developer.index', compact('developer'));
    }

    public function developer_update($id)
    {
        $data = develop::find($id);
        return view('admin.modules.developer.update', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data = $request->except('_token');
        if (isset($id) && $id > 0) {
            $filename = rand(1000000000, 9999999999) . '.' . 'jpg';
            $Path = public_path('assets/images/developer/jpg/');
            $img = Image::make($data['image']->getRealPath())->encode('jpg', 100);
            $img->resize(1100, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($Path . $filename);
            $filename2 = rand(2000000000, 9999999999) . '.' . 'webp';
            $Path2 = public_path('assets/images/developer/webp/');
            $img2 = Image::make($data['image']->getRealPath())->encode('webp', 75);
            $img2->resize(1100, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($Path2 . $filename2);
            $data['image'] = $filename;
            $data['image_webp'] = $filename2;
            develop::where('id', $id)->update(['name' => $data['name'], 'address' => $data['address'], 'phone_no' => $data['phone_no'], 'image' => $data['image'], 'image_webp' => $data['image_webp']]);
        }
        return redirect()->back()->with('message', 'Data Updated!');
    }

    public function delete($id)
    {
        $pannel = develop::find($id);
        $pannel->delete();
        return response()->json([
            'message' => 'Data deleted successfully!'
        ]);
    }

    public function tags(){
        return view('admin.modules.tags.tag');
    }

    public function create_tag(Request $request)
    {
    $data = $request->except('_token');
    tags::create($data);
    return redirect()->back()->with('message', 'Tag Added!');

    }

    public function tag_update(Request $request)
    {
        $id = $request->id;
        $data = $request->except('_token');
        tags::where('id', $id)->update(['name' => $data['name']]);
        return redirect()->back()->with('message', 'Tag Updated!');
    }

    public function edit_form($id)
    {
        $tag = tags::find($id);
        return view('admin.modules.tags.edit_tag', get_defined_vars());
    }

    public function delete_tag($id)
    {
        $tag = tags::find($id);
        $tag->delete();
        return redirect()->back()->with('message', 'Deleted successfully');
    }

    public function view_tag()
    {
        $tag = tags::all();
        return view('admin.modules.tags.view_tag', get_defined_vars());
    }

}
