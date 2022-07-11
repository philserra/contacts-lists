@extends('layouts.app')

@section('title', 'Liste Entreprises')

@section('content')

<div class="success-container flex-column d-flex align-items-center">
    <h1>Bravo, votre entreprise est bien enregistré</h1><br>
        <div class="edit-button-wrapper">
            <button><a href="{{route("entreprises.index",)}}">Retour aux entreprises</a></button>
        </div>
    
    </div>



@endsection