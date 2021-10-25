<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Client;
use App\Contact;
use App\Gallery;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $messages = Contact::selectRaw('id')->get();
        $products = Product::where('visible',1)->get();
        $clients = Client::where('visible',1)->get();
        $blogs = Blog::where('visible',1)->get();

        $last_message = Contact::OrderBy('created_at','desc')->first();
        $last_product = Product::OrderBy('created_at','desc')->first();
        $last_gallery = Gallery::OrderBy('created_at','desc')->first();
        $last_client = Client::OrderBy('created_at','desc')->first();
        $last_blog = Blog::OrderBy('created_at','desc')->first();
        return view('home',compact('messages','products','clients','blogs',
            'last_message','last_product','last_gallery','last_client','last_blog'));
    }
}
