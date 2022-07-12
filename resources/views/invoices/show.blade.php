@extends('layouts.app')

@section('title', 'liste des entreprises')

@section('content')

<h1>Facture: {{$invoices->id}}</h1>


<div class="card-container d-flex justify-content-center p-2">
    <div class="card  p-2" style="width: 18rem;">
        <div class="card-content flex-column d-flex align-items-center">    
<h2>Entreprise: {{$invoices->title}} </h2>
<p>Status: {{$invoices->date}}</p>
<p>Prix HT: {{$invoices->priceht}}</p>
<p>TVA: {{$invoices->tva}}</p>
<p>Prix TTC: {{$invoices->pricettc}}</p>
<p>N° de facture: {{$invoices->number}}</p>
<div class="edit-button-wrapper">
    <button><a href="{{route("invoices.index",)}}">Retour </a></button>
</div>
        </div>
    </div>    
</div>
@endsection