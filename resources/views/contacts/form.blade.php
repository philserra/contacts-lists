@extends('layouts.app')

@section('title', 'Formulaire de Conntacts')

@section('content')

<h1>Formulaire de Contacts</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
<form action="{{route('contacts.store')}}" method="post" class="contact-form">

    <div >
        
    <label for="firstname">Prenom</label>
    <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control rounded border-white mb-3 form-input" id="firstname">
        
    </div>

    <div >
        
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control rounded border-white mb-3 form-input" id="lastname">
        
    </div>

    <div class="form-row mb-4">
        
    <label for="phone">Telephone</label>
    <input type="text" name="phone" value="{{old('phone')}}" class="form-control rounded border-white mb-3 form-input" id="phone">
        
    </div>

    <div >
        
    <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control rounded border-white mb-3 form-input" id="email">
        
    </div>

    <div class="submit-button-wrapper">
    <input type="submit" value="Enregistrer">
    </div>
</div>


@if ($errors->any())
<div class="text-center border border-light p-5">

        <ul class="text-center border border-light p-5">
            @foreach ($errors->all() as $error)
              <li >{{ $error }}</li>
            @endforeach
        </ul>
      </div>
</div>
    @endif 



</form>
@endsection