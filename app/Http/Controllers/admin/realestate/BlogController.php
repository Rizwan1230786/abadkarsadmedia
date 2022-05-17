<?php

namespace App\Http\Controllers\admin\realestate;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Blog::all();
        return view('admin.modules.realestate.blog.listing', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.realestate.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'descripition' => 'required',
            'content' => 'required',
        ]);
        $pic = $request->file('image')->store('public');
        $picture = explode('/', $pic);
        $check = Blog::create([
            'title' => $request->title,
            'image' => $picture[1],
            'descripition' => $request->descripition,
            'content' => $request->content,
        ]);
        return redirect()->route('admin:blog.index')->with('message', 'Blog added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Blog::where('id', $id)->first();
        return view('admin.modules.realestate.blog.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasfile('image')) {
            $data = Blog::find($id);
            $oldimage = public_path('storage/' . $data->image);
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }
            $imagePath = public_path('storage/' . $request->image);
            $pic = $request->file('image')->store('public');
            $picture = explode('/', $pic);
            Blog::where('id', $id)
                ->update([
                    'title' => $request->title,
                    'image' => $picture[1],
                    'descripition' => $request->descripition,
                    'content' => $request->content,
                ]);
            return redirect()->route('admin:blog.index')->with('message', "Blog Updated Successfully");
        } else {
            Blog::where('id', $id)
                ->update([
                    'title' => $request->title,
                    'descripition' => $request->descripition,
                    'content' => $request->content,
                ]);
            return redirect()->route('admin:blog.index')->with('message', "Blog Updated Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delete = Blog::findOrFail($id);
        $oldimage = public_path('storage/' . $delete->image);
        if (File::exists($oldimage)) {
            File::delete($oldimage);
        }
        $user = $delete->delete();
        if ($user) {
            return response(['status' => true]);
        } else {
            return response(['status' => false]);
        }
    }


    public function upload(Request $request)
    {

        // $fileName=$request->file('file')->getClientOriginalName();
        // $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        // return response()->json(['location'=>"/storage/$path"]);

        $imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location' => "/storage/$imgpath"]);
    }
}
