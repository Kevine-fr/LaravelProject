<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Données des années scolaires</title>
</head>
<body>
@foreach ($classeanneescolaires as $classe)
        <p class="text-danger">{{ $classe->nom }}</p>
        <p> :{{ $classe->anneescolaires ? $classe->anneescolaires->count() : 0 }}</p>
        @foreach ($classe->anneescolaires as $c)
        <p>{{$c->date_de_debut}}</p>
        <p>{{$c->id}}</p>

        @endforeach
    </div>
@endforeach


    


</body>
</html>
