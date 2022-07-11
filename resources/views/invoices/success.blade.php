@extends('layouts.app')

@section('title', 'Liste Entreprises')

@section('content')

<div class="success-container flex-column d-flex align-items-center">
    <h1>Facture générée avec succée</h1> <br>
        <div class="edit-button-wrapper">
            <button><a href="{{route("invoices.index",)}}">Retour aux factures</a></button>
        </div>
    
    </div>
    



@endsection