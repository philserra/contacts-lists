@extends('layouts.app')

@section('title', 'Modifier l\'entreprise')

@section('content')

<h1>Modifier l'entreprise</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
        <form action="{{route('entreprises.update', [$entreprise->id])}}" method="post" class="contact-form" >
    
            @method('PUT')
        
            <div class="">
              <label for="name">Nom</label>
              <input type="text" name="name" value="{{$entreprise->name}}" class="form-control rounded border-white mb-3 form-input" id="name">
            </div>
        
    
            <div class="">
              <label for="status">Statut</label>
              <input type="text" name="status" value="{{$entreprise->status}}" class="form-control rounded border-white mb-3 form-input" id="status">
            </div>

            <div class="">
              <label for="siren">Siren</label>
              <input type="number" name="status" value="{{$entreprise->siren}}" class="form-control rounded border-white mb-3 form-input" id="status">
            </div>

        
            <div class="">   
              <label for="email">Email</label>
              <input type="text" name="email" value="{{$entreprise->email}}" class="form-control rounded border-white mb-3 form-input" id="email">
            </div>
    
        
            <div class="">
              <label for="phone">Telephone</label>
              <input type="text" name="phone" value="{{$entreprise->phone}}" class="form-control rounded border-white mb-3 form-input" id="phone">
            </div>
        
    
        
            
            <div class="submit-button-wrapper">
            <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</div>

    
@endsection