@extends('layouts.app')

@section('title', 'Supprimer facture')

@section('content')

<div class="edit-container flex-column d-flex align-items-center">
    <h1>Cette facture a ete supprimé des fichiers</h1><br>
    <div class="edit-button-wrapper">
        <button><a href="{{route("invoices.index",)}}">Retour aux factures</a></button>
    </div>
    </div>




@endsection