<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', ["invoices" => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.form');
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
            "title" => "string",
            "date" => "date",
            "priceht" => "numeric",
            "tva" => "numeric",
        ],
        [
            "title.string" => "Ce titre est invalide",
            "date.date" => "Cette date n'est pas valide",
            "priceht.numeric" => "Ce prix n'est pas valide",
            "tva.numeric" => "Cette TVA n\'est pas valide",
        ]);

        $new_id = $request->id;

        $new_date = $request->date;

        $number_rand = rand(0, 9) . rand(0, 9);

        $new_numero = $new_date . '-' . $new_id . '-' . $number_rand;


        Invoice::create([
            "title" => $request->title,
            "date" => $request->date,
            "priceht" => $request->priceht,
            "tva" => $request->tva,
            "pricettc" => $request->priceht * (1 + $request->tva / 100),
            "number" => $new_numero,
        ]);



        return view('invoices.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoices = Invoice::findOrFail($id);
        return view("invoices.show", [
            "invoices" => $invoices
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
        $invoices = Invoice::findOrFail($id);
        return view("invoices.edit", [
            "invoices" => $invoices
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
        $invoices = Invoice::findOrFail($id);

        $new_date = $request->date;

        $number_rand = rand(0, 9) . rand(0, 9);

        $new_numero = $new_date . '-' . $id . '-' . $number_rand;

        Invoice::create([
            "title" => $request->title,
            "date" => $request->date,
            "priceht" => $request->priceht,
            "tva" => $request->tva,
            "pricettc" => $request->priceht * (1 + $request->tva / 100),
            "number" => $new_numero,
        ]);

        $invoices->save();

        return redirect()->route('invoices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoices = Invoice::findOrFail($id);

        $invoices->delete();

        return view('invoices.delete');
    }
}
