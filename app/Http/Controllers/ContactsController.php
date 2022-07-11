<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', ["contacts" => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, )
    {
        $request->validate([
            "firstname" => "string",
            "lastname" => "string",
            "phone" => "string",
            "email" => "email:rfc,dns"

        ],
        [
            "firstname.string" => "le prenom est invalide",
            "lastname.string" => "le nom est invalide",
            "phone.string" => "ce numero est invalide",
            "email.email" => "cet email est invalide",
        ]
        );
        Contact::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "phone" => $request->phone,
            "email" => $request->email
        ]);
        return view('contacts.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', [
            "contact" => $contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', ["contact" => $contact]);

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
        $contact = Contact::findOrFail($id);

        $contact->lastname = $request->lastname;
        $contact->firstname = $request->firstname;
        $contact->phone = $request->phone;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->route('contacts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return view('contacts.delete');


    }
}
