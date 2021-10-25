<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('product',compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'price'=>'required_with:unit|numeric|nullable',
            'unit'=>'required_with:price|nullable',
            'photo' => 'required|mimes:jpeg,jpg,bmp,png|max:5000',
        ]);
        $file = $request['photo'];
        $ext = strtolower($file->getClientOriginalExtension());
        $file_full_name = 'product-' . time() . '.' . $ext;
        $file->storeAs('product_photo', $file_full_name, 'public');

        Product::firstOrCreate([
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
            'photo' => $file_full_name,
        ]);
        return redirect()->back()->with('notification','Product is added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'update_name' => 'required|max:100',
            'update_price'=>'required_with:update_unit|numeric|nullable',
            'update_unit'=>'required_with:update_price|nullable',
            'latest'=>'required',
            'visible'=>'required',
            'update_photo' => 'nullable|mimes:jpeg,jpg,bmp,png|max:5000',
        ]);
        $product = Product::find($id);

        $fileFullName = $product->photo;

        if(isset($request['update_photo']))
        {
            Storage::delete('/public/product_photo/'.$fileFullName);

            $file = $request['update_photo'];
            $ext = strtolower($file->getClientOriginalExtension());
            $fileFullName = 'product-' . time() . '.' . $ext;
            $file->storeAs('product_photo', $fileFullName, 'public');
        }

        $product->update([
            'name' => $request->update_name,
            'price'=> $request->update_price,
            'unit'=>$request->update_unit,
            'latest'=>$request->latest,
            'visible'=>$request->visible,
            'photo' => $fileFullName,
        ]);
        return redirect()->back()->with('notification','Product is updated successfully!');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        Storage::delete('/public/product_photo/'.$product['photo']);
        $product->delete();
        return redirect()->back()->with('notification','Product is deleted successfully!');
    }
}
