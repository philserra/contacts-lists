@extends('layouts.app')

@section('title', 'Formulaire facture')

@section('content')

<h1>Formulaire facture</h1>

<div class="form-container">
    <div class="contact-form-wrapper d-flex justify-content-center">
<form action="{{route('invoices.store')}}" method="post" class="contact-form">

    <div>   
    <label for="title">Titre</label>
    <input type="text" name="title" value="{{old('title')}}" class="form-control rounded border-white mb-3 form-input" id="title">
    </div>
        

    <div>   
    <label for="date">Date</label>
    <input type="date" name="date" value="{{old('date')}}" class="form-control rounded border-white mb-3 form-input" id="date">  
    </div>

    <div>    
    <label for="priceht">Montant HT</label>
    <input type="number" name="priceht" value="{{old('priceht')}}" class="form-control rounded border-white mb-3 form-input" id="priceht">
    </div>


    <div>
    <label for="tva">Taux de TVA</label>
    <input type="number" name="tva" value="{{old('tva')}}" class="form-control rounded border-white mb-3 form-input" id="tva">
    </div>

    <input type="text">

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