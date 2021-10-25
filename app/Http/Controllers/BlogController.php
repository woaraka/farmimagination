<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::orderBy('serial','desc')->get();
        return view('blog',compact('blogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'headline' => 'required|max:999',
            'details'=>'required',
            'serial'=>'nullable|numeric',
            'photo' => 'required|mimes:jpeg,jpg,bmp,png|max:5000',
        ]);

        $file = $request['photo'];
        $ext = strtolower($file->getClientOriginalExtension());
        $file_full_name = 'blog-' . time() . '.' . $ext;
        $file->storeAs('blog_photo', $file_full_name, 'public');

        Blog::firstOrCreate([
            'headline' => $request->headline,
            'details' => $request->details,
            'serial' => $request->serial,
            'photo' => $file_full_name,
        ]);
        return redirect()->back()->with('notification','New blog is added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'update_headline' => 'required|max:999',
            'update_details'=>'required',
            'update_serial'=>'nullable|numeric',
            'visible'=>'required',
            'update_photo' => 'mimes:jpeg,jpg,bmp,png|max:5000',
        ]);
        $blog = Blog::find($id);
        $fileFullName = $blog->photo;

        if(isset($request['update_photo']))
        {
            Storage::delete('/public/blog_photo/'.$fileFullName);

            $file = $request['update_photo'];
            $ext = strtolower($file->getClientOriginalExtension());
            $fileFullName = 'blog-' . time() . '.' . $ext;
            $file->storeAs('blog_photo', $fileFullName, 'public');
        }

        $blog->update([
            'headline' => $request->update_headline,
            'details' => $request->update_details,
            'serial' => $request->update_serial,
            'visible' => $request->visible,
            'photo' => $fileFullName,
        ]);
        return redirect()->back()->with('notification','Blog is updated successfully!');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        Storage::delete('/public/blog_photo/'.$blog['photo']);
        $blog->delete();
        return redirect()->back()->with('notification','Blog is deleted successfully!');
    }
}
