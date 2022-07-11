@extends('layouts.app')

@section('title', 'Modifier le Contacts')

@section('content')

<h1>Modifier le contact</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
        <form action="{{route('contacts.update', [$contact->id])}}" method="post" class="contact-form" >
    
            @method('PUT')
        
            <div class="">
              <label for="firstname">Prenom</label>
              <input type="text" name="firstname" value="{{$contact->firstname}}" class="form-control rounded border-white mb-3 form-input" id="firstname">
            </div>
        
    
            <div class="">
              <label for="lastname">Nom</label>
              <input type="text" name="lastname" value="{{$contact->lastname}}" class="form-control rounded border-white mb-3 form-input" id="lastname">
            </div>

        
    
        
            <div class="">
              <label for="phone">Telephone</label>
              <input type="text" name="phone" value="{{$contact->phone}}" class="form-control rounded border-white mb-3 form-input" id="phone">
            </div>
        
    
        
            <div class="">   
              <label for="email">Email</label>
              <input type="text" name="email" value="{{$contact->email}}" class="form-control rounded border-white mb-3 form-input" id="email">
            </div>
            
            <div class="submit-button-wrapper">
            <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</div>

    
@endsection