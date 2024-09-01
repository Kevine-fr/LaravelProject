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

a{
    color: black;
    text-decoration: none; 
}

a:hover{
    color: white;
    text-decoration: none; 
}

.btn-danger:hover {
        background-color: darkred;
        color: white;
    }

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

<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-white">Liste des personnes</h1>
        
        <div>
        <button type="button" class="btn btn-success"><i class="fas fa-paper-plane"></i><a href="{{route ('user.store')}}" class="text-white"> Ajouter</a></button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filterModal"><i class="fas fa-filter"></i> Filtrer</button>

        </div>
    </div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Profil</th>
            <th scope="col" class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personne as $person)
            <tr>
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->email }}</td>
                <td>
                    @if($person->roles->first()->name == 'Pedagogie')
                        <span class="text-success" style="font-weight: 600;">{{ $person->roles->first()->name }}</span>
                    @elseif($person->roles->first()->name == 'Secretariat')
                        <span class="text-primary">{{ $person->roles->first()->name }}</span>
                    @elseif($person->roles->first()->name == 'Professeur')
                        <span class="text-warning">{{ $person->roles->first()->name }}</span>
                    @endif
                </td>

                <td class="text-right">
                    <button type="button" class="btn btn-secondary mr-1" style="font-weight: 600;"><a href="{{ route('user.edit', ['id' => $person->id , 'id_role' => $person ->roles->first()->id]) }}">Modifier</a></button>
                    <button type="button" class="btn btn-danger mr-1" style="font-weight: 600;">
                    <button type="button" class="btn btn-secondary mr-2" style="font-weight: 600;">


                    <form action="{{ route('user.delete', ['id' => $person->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-dark" style="font-weight: 600;">Supprimer</button>
                    </form>


                    </button>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
</div>

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
