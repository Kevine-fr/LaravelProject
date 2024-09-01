<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des profils</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style>

a.list-group-item {
    color: black; /* Couleur de base du texte */
    text-decoration: none; /* Supprime le soulignement */
    transition: transform 0.8s; /* Ajoute une transition de 800ms sur la propriété transform */
    color: #6c757d; /* Couleur du texte en gris clair */
    font-weight: 200;


}

a.list-group-item:hover {
    color: whitesmoke; /* Couleur au survol (success) */
    scale: 0.90;
    animation-duration: 1150ms;
    transform: translateX(80px); /* Décale l'élément de 20px vers la droite au survol */
    background-color: #28a745;
    border-radius: 5px; /* Bordure arrondie de 15px au survol */

}


    th {
        color: azure;
    }

    td {
        color: azure;
    }
</style>

<body style="background-color: #2d3748;">


@if($personne->isNotEmpty())

<div class="container mt-3">

    <div class="d-flex justify-content-between align-items-center">


        <h2 class="text-white">Liste des {{ $personne->first()->roles->first()->name }}</h2>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filterModal"><i class="fas fa-filter"></i> Filtrer</button>
    </div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personne as $person)
            <tr>
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->email }}</td>

                <td class="text-right">
                    <button type="submit" class="btn btn-secondary mr-2">Modifier</button>
                    <button type="submit" class="btn btn-danger mr-5">Supprimer</button>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@else

    <h4 class="text-white m-3">Aucun {{$role->name}} n'a été enregistrer !</h4>

@endif


<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filtrer par profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="list-group">
                <a class="list-group-item" href="{{ route('user.filter', ['id' => 2]) }}">Pédagogie</a>
                <a class="list-group-item" href="{{ route('user.filter', ['id' => 3]) }}">Sécretariat</a>
                <a class="list-group-item" href="{{ route('user.filter', ['id' => 4]) }}">Professeur</a>
                <a class="list-group-item" href="{{ route('user.index') }}">Tous</a>
            </ul>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
