@extends('layouts.app')

@section('title', 'Supprimer contact')

@section('content')

<div class="edit-container flex-column d-flex align-items-center">
<h1>Ce contact a ete supprimé</h1><br>
<div class="edit-button-wrapper">
    <button><a href="{{route("contacts.index",)}}">Retour contacts</a></button>
</div>
</div>


@endsection