@extends('layouts.app')

@section('title', 'Formulaire de Conntacts')

@section('content')

<h1>Contact {{$contact->id}}</h1>

<div class="card-container d-flex justify-content-center p-2">
<div class="card  p-2" style="width: 18rem;">
    <div class="card-content flex-column d-flex align-items-center">
<h2>Nom: {{$contact->lastname}}</h2>
<h3>Prenom: {{$contact->firstname}}  </h3>
<p>Tel: {{$contact->phone}}</p>
<p>Email: {{$contact->email}}</p>
<div class="edit-button-wrapper">
    <button><a href="{{route("contacts.index",)}}">Retour contacts</a></button>
</div>
</div>
</div>
</div>
    

@endsection