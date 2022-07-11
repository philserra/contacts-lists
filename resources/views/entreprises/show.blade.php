@extends('layouts.app')

@section('title', 'liste des entreprises')

@section('content')

<h1>Entrerpise: {{$entreprise->id}}</h1>


<div class="card-container d-flex justify-content-center p-2">
    <div class="card  p-2" style="width: 18rem;">
        <div class="card-content flex-column d-flex align-items-center">       
<h4>Entreprise: {{$entreprise->name}} </h4>
<p>Status: {{$entreprise->status}}</p>
<p>Siren: {{$entreprise->siren}}</p>
<p>Email: {{$entreprise->email}}</p>
<p>Tel: {{$entreprise->phone}}</p>
<div class="edit-button-wrapper">
    <button><a href="{{route("entreprises.index",)}}">Retour entreprises</a></button>
</div>
        </div>
    </div>
</div>
    

@endsection