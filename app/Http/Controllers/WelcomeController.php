<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Client;
use App\Gallery;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::where('visible',1)->orderBy('id','desc')->get();
        $galleries = Gallery::where('visible',1)->OrderBy('serial','desc')->get();
        $gallery_class = Gallery::select('class','category')->groupBy('class','category')->where('visible',1)->get();
        $clients = Client::where('visible',1)->OrderBy('serial','desc')->get();
        $blogs = Blog::where('visible',1)->OrderBy('serial','desc')->get();
        return view('welcome',compact('products','galleries','gallery_class','clients','blogs'));
    }
}
