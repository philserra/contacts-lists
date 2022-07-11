<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

    <nav class="navbar bg-muted">
        <form class="container-fluid justify-content-center">
          <button class="btn  btn-outline-success me-2" type="button"><a href="{{route('contacts.index')}}">Contacts</a></button>
          <button class="btn  btn-outline-success me-2" type="button"><a href="{{route('contacts.create')}}">Creer Contact</a></button>
          <button class="btn  btn-outline-danger me-2" type="button"><a href="{{route('entreprises.index')}}">Entreprises</a></button>
          <button class="btn  btn-outline-danger me-2" type="button"><a href="{{route('entreprises.create')}}">Creer Entreprise</a></button>
          <button class="btn  btn-outline-warning me-2" type="button"><a href="{{route('invoices.index')}}">Voir factures</a></button>
          <button class="btn  btn-outline-warning me-2" type="button"><a href="{{route('invoices.create')}}">Creer facture</a></button>
        </form>
      </nav>
   

    @yield('content')
    
</body>
</html>