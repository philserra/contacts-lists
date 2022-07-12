<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	@vite('resources/css/app.css')
</head>
<body>
<div class="wrapper flex-column d-flex align-items-center justify-content-center 
p-2" style="height: 100vh;">
	<div class="title">
	<h1> <span class="s1">Bienvenue dans votre</span><span class="s2"> solution </span><span class="s3"> de gestion d'entreprise</span></h1>
</div>
<div class="edit-button-wrapper d-flex align-items-center p-2">
	<div class="p-2">
	<button><a href="{{route("contacts.index",)}}">liste des contacts</a></button>
</div>
<div class="p-2">
	<button><a href="{{route("entreprises.index",)}}">liste des factures</a></button>
</div>
<div class="p-2">
	<button><a href="{{route("invoices.index",)}}">liste des factures</a></button>
</div>
</div>


	</div>
</div>
</body>
</html>