<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();

        return view('index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('create');
    }

    public function addContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts',
        ]);

        DB::table('contacts')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ]
        );

        return redirect()->route('contact.index');
    }

    public function show($id)
    {
        $contact = DB::table('contacts')->where('id', $id)->first();

        return view('show')->with('contact', $contact);
    }

    public function edit($id)
    {
        $contact = DB::table('contacts')->where('id', $id)->first();

        return view('edit')->with('contact', $contact);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts',
        ]);

        DB::table('contacts')->where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'updated_at' => date('Y/m/d H:i:s'),
            ]
        );

        return redirect()->route('contact.index');
    }

    public function delete($id)
    {
        DB::table('contacts')->where('id', $id)->delete();

        return redirect()->route('contact.index');
    }

    public function orderbyName()
    {
        $contacts = DB::table('contacts')->orderBy('name', 'asc')->get();

        return view('index')->with('contacts', $contacts);
    }

    public function orderbyDate()
    {
        $contacts = DB::table('contacts')->orderBy('created_at', 'desc')->get();

        return view('index')->with('contacts', $contacts);
    }

    public function search(Request $request)
    {
        $contacts = DB::table('contacts')->where('name', 'like', "%$request->search%")->orWhere('email', 'like', "%$request->search%")->get();

        return view('index')->with('contacts', $contacts);
    }
}
