<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ConntactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    public function index()
    {
        $contacts = Contact::orderBy('id','desc')->get();
        return view('contact',compact('contacts'));
    }

    public function store(Request $request)
    {
        if($request->name != null && $request->email && $request->reason && $request->message)
        {
            Contact::firstOrCreate([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'purpose' => $request->reason,
                'message' => $request->message,
            ]);
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'purpose' => $request->reason,
                'message' => $request->message,
            );

            Mail::to('woaraka22@gmail.com')->send(new ConntactEmail($data));

            return response()->json("Your message is submitted successfully!");
        }
        else
        {
            return response()->json("Message submission was unsuccessful!");
        }
    }

    public function delete($id)
    {
        $message = Contact::find($id);
        $message->delete();
        return redirect()->back()->with('notification','Contact message is deleted successfully!');
    }
}
