@extends('layouts.app')

@section('title', 'Formulaire Entreprises')

@section('content')

<h1>Formulaire entreprises</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
<form action="{{route('entreprises.store')}}" method="post" class="contact-form">

    <div >
        
    <label for="name">Nom</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control rounded border-white mb-3 form-input" id="name">
        
    </div>

    <div >
        
    <label for="status">Statut</label>
    <input type="text" name="status" value="{{old('status')}}" class="form-control rounded border-white mb-3 form-input" id="status">
        
    </div>

    <div class="form-row mb-4">
        
    <label for="siren">Siren</label>
    <input type="number" name="siren" value="{{old('siren')}}" class="form-control rounded border-white mb-3 form-input" id="siren">
        
    </div>

    <div >
        
    <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control rounded border-white mb-3 form-input" id="email">
        
    </div>

    <div >
        
    <label for="phone">Telephone</label>
    <input type="text" name="phone" value="{{old('phone')}}" class="form-control rounded border-white mb-3 form-input" id="phone">
        
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