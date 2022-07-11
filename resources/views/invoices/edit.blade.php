@extends('layouts.app')

@section('title', 'Modifier l\'entreprise')

@section('content')

<h1>Modifier l'entreprise</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
        <form action="{{route('invoices.update', [$invoices->id])}}" method="post" class="contact-form" >
    
            @method('PUT')
        
            <div class="">
              <label for="title">Titre</label>
              <input type="text" name="title" value="{{$invoices->title}}" class="form-control rounded border-white mb-3 form-input" id="title">
            </div>
        
    
            <div class="">
              <label for="date">Date</label>
              <input type="date" name="date" value="{{$invoices->date}}" class="form-control rounded border-white mb-3 form-input" id="date">
            </div>

            <div class="">
              <label for="priceht">Prix HT</label>
              <input type="number" name="priceht" value="{{$invoices->priceht}}" class="form-control rounded border-white mb-3 form-input" id="priceht">
            </div>

        
            <div class="">   
              <label for="tva">TVA</label>
              <input type="number" name="tva" value="{{$invoices->tva}}" class="form-control rounded border-white mb-3 form-input" id="tva">
            </div>
    
        
            <div class="submit-button-wrapper">
            <input type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</div>

    
@endsection