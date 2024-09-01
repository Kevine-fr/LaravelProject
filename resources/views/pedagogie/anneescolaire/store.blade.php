<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'année d'étude</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #2d3748;">
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="mb-4 text-white">Ajouter une année d'étude</h2>
        <form action="{{ route('anneescolaire.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom" class="text-white">Date de debut de l'année scolaire :</label>
                <input type="date" class="form-control" id="nom" name="date_de_debut" required>
            </div>
            <div class="form-group">
                <label for="prenom" class="text-white">Date de fin de l'année scolaire :</label>
                <input type="date" class="form-control" id="prenom" name="date_de_fin" required>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
