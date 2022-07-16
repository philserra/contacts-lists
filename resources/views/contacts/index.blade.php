@extends('layouts.app')

@section('title', 'Liste de Contacts')

@section('content')

<h1>Liste de Contacts</h1>

@foreach ($contacts as $contact)
<div class="card-container d-inline-flex p-2">
    <div class="card p-2" style="width: 17rem;">
        <div class="card-content flex-column d-flex align-items-center ">
            <h3>Contact ID : {{$contact->id}}</h3>

                <p>Nom: {{$contact->lastname}}</p> 

                <p>Prénom: {{$contact->firstname}}</p> 

                <p>Tel: {{$contact->phone}}</p> 

                <p>Email: {{$contact->email}}</p>

                <div class="detail-button-wrapper">
                    <button><a href="{{route("contacts.show",[$contact->id])}}">Voir Details</a></button>
                    </div>
        </div>     

        <div class="edit-button-wrapper">
            <button><a href="{{route("contacts.edit", [$contact->id])}}">Modifier</a></button>
        </div>

        <div class="creat-button-wrapper">
        <button class=""><a href="{{route('invoices.create', [$contact->id])}}">Creer facture</a></button>
        </div>
       


        <form action="{{route("contacts.destroy", [$contact->id])}}" method="post">
         @method('DELETE')

            <div class="submit-button-wrapper">
                <input type="submit" value="Supprimer">
            </div>

        </form>
    </div>
</div>
@endforeach


@endsection