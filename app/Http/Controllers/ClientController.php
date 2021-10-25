<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::orderBy('serial','desc')->get();
        return view('client',compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'address'=>'nullable',
            'contact'=>'nullable',
            'serial'=>'nullable|numeric',
            'photo' => 'required|mimes:png|max:5000',
        ]);

        $file = $request['photo'];
        $ext = strtolower($file->getClientOriginalExtension());
        $file_full_name = 'client-' . time() . '.' . $ext;
        $file->storeAs('client_photo', $file_full_name, 'public');

        Client::firstOrCreate([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
            'serial' => $request->serial,
            'photo' => $file_full_name,
        ]);
        return redirect()->back()->with('notification','New client is added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'update_name' => 'required|max:100',
            'update_address'=>'nullable',
            'update_contact'=>'nullable',
            'update_serial'=>'nullable|numeric',
            'update_photo' => 'mimes:png|max:5000',
        ]);

        $client = Client::find($id);
        $fileFullName = $client->photo;

        if(isset($request['update_photo']))
        {
            Storage::delete('/public/client_photo/'.$fileFullName);
            $file = $request['update_photo'];
            $ext = strtolower($file->getClientOriginalExtension());
            $fileFullName = 'client-' . time() . '.' . $ext;
            $file->storeAs('client_photo', $fileFullName, 'public');
        }

        $client->update([
            'name' => $request->update_name,
            'address' => $request->update_address,
            'contact' => $request->update_contact,
            'serial' => $request->update_serial,
            'visible' => $request->visible,
            'photo' => $fileFullName,
        ]);
        return redirect()->back()->with('notification','Client is updated successfully!');
    }

    public function delete($id)
    {
        $client = Client::find($id);
        Storage::delete('/public/client_photo/'.$client['photo']);
        $client->delete();
        return redirect()->back()->with('notification','Client is deleted successfully!');
    }
}
