@extends('layouts.app')

@section('title', 'Supprimer entreprise')

@section('content')

<div class="edit-container flex-column d-flex align-items-center">
    <h1>Cette entreprise a ete supprimé des fichiers</h1><br>
    <div class="edit-button-wrapper">
        <button><a href="{{route("entreprises.index",)}}">Retour aux entreprises</a></button>
    </div>
    </div>




@endsection