@extends('layouts.app')

@section('title', 'Formulaire de Conntacts')

@section('content')

<div class="success-container flex-column d-flex align-items-center">
<h1>Ce contact est bien enregistré</h1> <br>
    <div class="edit-button-wrapper">
        <button><a href="{{route("contacts.index",)}}">Retour contacts</a></button>
    </div>

</div>




@endsection