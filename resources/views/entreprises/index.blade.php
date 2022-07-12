@extends('layouts.app')

@section('title', 'Liste Entreprises')

@section('content')

<h1>Liste Entreprises</h1>

<ul>
@foreach ($entreprise as $entrepris)
<div class="card-container d-inline-flex  p-2">
<div class="card p-2" style="width: 17rem;">
    <div class="card-content flex-column d-flex align-items-center">
<h3>Entreprise: {{$entrepris->id}}</h3>

    <p>Nom: {{$entrepris->name}}</p> 

    <p>Status: {{$entrepris->status}}</p> 

    <p>Siren: {{$entrepris->siren}}</p> 

    <p>Email: {{$entrepris->email}}</p> 

    <p>Tel: {{$entrepris->phone}}</p> 

    <div class="detail-button-wrapper">
        <button><a href="{{route("entreprises.show",[$entrepris->id])}}">Voir Details</a></button>
        </div>
</div>


    <div class="edit-button-wrapper">
    <button><a href="{{route("entreprises.edit", [$entrepris->id])}}">Modifier</a></button>
    </div>
    

<form action="{{route("entreprises.destroy", [$entrepris->id])}}" method="post">
@method('DELETE')

<div class="submit-button-wrapper">
<input type="submit" value="Supprimer">
</div>

</form>
</div>
</div>
@endforeach
</ul>
@endsection