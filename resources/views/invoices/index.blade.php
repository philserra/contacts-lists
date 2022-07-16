@extends('layouts.app')

@section('title', 'Liste Factures')

@section('content')

<h1>Liste Factures</h1>



@foreach ($invoices as $invoice)


<div class="card-containe d-inline-flex p-2" >
<div class="card p-2" style="width: 17rem">
    <div class="card-content flex-column d-flex align-items-center">
<h3>Facture: {{$invoice->id}}</h3>

    <p>Titre: {{$invoice->title}}</p> 

    <p>Date: {{$invoice->date}}</p> 

    <p>Prix HT: {{$invoice->priceht}} €</p> 

    <p>TVA: {{$invoice->tva}} %</p> 

    <p>Prix TTC: {{$invoice->pricettc}} €</p>

    <p>N° de facture: {{$invoice->number}}</p> 

    <div class="detail-button-wrapper">
    <button><a href="{{route("invoices.show",[$invoice->id])}}">Voir Details</a></button>
    </div>
</div>


    <div class="edit-button-wrapper">
    <button><a href="{{route("invoices.edit", [$invoice->id])}}">Modifier</a></button>
    </div>




<form action="{{route("invoices.destroy", [$invoice->id])}}" method="post">
@method('DELETE')

<div class="submit-button-wrapper">
<input type="submit" value="Supprimer">
</div>

</form>
</div>
</div>

@endforeach




@endsection