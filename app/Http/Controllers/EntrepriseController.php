<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise = Entreprise::all();
        return view('entreprises.index', ["entreprise" => $entreprise]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.form');
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
            "name" => "string",
            "status" => "string",
            "siren" => "numeric | digits_between:9,9",
            "email" => "email:rfc,dns",
            "phone" => "string",
        ],
        [
            "name.string" => "Ce nom d'entreprise n'est pas valide",
            "status.string" => "Ce statut n'est pas valide",
            "siren.numeric" => "Ce siren n'est pas valide",
            "siren.digits_between" => "Ce siren n'est pas valide",
            "email.email" => "Cet email n'est pas valide",
            "phone.string" => "Ce telephone n'est pas valide",
        ]);

        Entreprise::create([
            "name" => $request->name,
            "status" => $request->status,
            "siren" => $request->siren,
            "email" => $request->email,
            "phone" => $request->phone
        ]);

        return view("entreprises.success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        return view("entreprises.show", [
            "entreprise" => $entreprise
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
        $entreprise = Entreprise::findOrFail($id);
        return view("entreprises.edit", [
            "entreprise" => $entreprise
        ]);
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
        $entreprise = Entreprise::findOrFail($id);

        $entreprise->name = $request->name;
        $entreprise->status = $request->status;
        $entreprise->siren = $request->siren;
        $entreprise->email = $request->email;
        $entreprise->phone = $request->phone;

        $entreprise->save();

        return redirect()->route('entreprises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::findOrFail($id);

        $entreprise->delete();

        return view('entreprises.delete');

    }
}
