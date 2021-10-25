<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::orderBy('serial','desc')->get();
        $categories = Gallery::selectRaw('category')->groupBy('category')->orderBy('category')->get();
        return view('gallery',compact('galleries','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description'=>'required|max:100',
            'category'=>'required|max:100',
            'serial'=>'nullable|numeric',
            'photo' => 'required|mimes:jpeg,jpg,bmp,png|max:5000',
        ]);

        $class = preg_replace("/[^a-zA-Z0-9]+/", "", $request->category);

        $file = $request['photo'];
        $ext = strtolower($file->getClientOriginalExtension());
        $file_full_name = 'gallery-' . time() . '.' . $ext;
        $file->storeAs('gallery_photo', $file_full_name, 'public');

        Gallery::firstOrCreate([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'class' => $class,
            'serial' => $request->serial,
            'photo' => $file_full_name,
        ]);
        return redirect()->back()->with('notification','Item is added in gallery successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'update_name' => 'required|max:100',
            'update_description'=>'required|max:100',
            'update_category'=>'required|max:100',
            'update_serial'=>'nullable|numeric',
            'visible'=>'required',
            'update_photo' => 'mimes:jpeg,jpg,bmp,png|max:5000',
        ]);
        $class = preg_replace("/[^a-zA-Z0-9]+/", "", $request->update_category);

        $gallery = Gallery::find($id);

        $fileFullName = $gallery->photo;

        if(isset($request['update_photo']))
        {
            Storage::delete('/public/gallery_photo/'.$fileFullName);

            $file = $request['update_photo'];
            $ext = strtolower($file->getClientOriginalExtension());
            $fileFullName = 'gallery-' . time() . '.' . $ext;
            $file->storeAs('gallery_photo', $fileFullName, 'public');
        }

        $gallery->update([
            'name' => $request->update_name,
            'description' => $request->update_description,
            'category' => $request->update_category,
            'class' => $class,
            'serial' => $request->update_serial,
            'visible' => $request->visible,
            'photo' => $fileFullName,
        ]);
        return redirect()->back()->with('notification','Item is updated in the gallery successfully!');
    }

    public function delete($id)
    {
        $gallery = Gallery::find($id);
        Storage::delete('/public/gallery_photo/'.$gallery['photo']);
        $gallery->delete();
        return redirect()->back()->with('notification','Item is deleted from the gallery successfully!');
    }
}
