<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Gestion d'année scolaire</title>
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    a{
        color: white;
    }
</style>

<body style="background-color: #2d3748;">
    <div class="container mt-5">
        <ul class="nav nav-tabs">
        <li class="nav-item">
                <a class="nav-link active" href="#cours">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('anneescolaire.index')}}">Année scolaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#etudiant">Salle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#annee-scolaire">Étudiant</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <div id="cours" class="tab-pane fade show active">
                <!-- Contenu de la page Cours -->
                <!-- Ajoutez vos éléments ici -->
            </div>
            <div id="etudiant" class="tab-pane fade">
                <!-- Contenu de la page Étudiant -->
                <h2>Étudiant</h2>
                <!-- Ajoutez vos éléments ici -->
            </div>
            <div id="annee-scolaire" class="tab-pane fade">
                <!-- Contenu de la page Année scolaire -->
                <h2>Année scolaire</h2>
                <!-- Ajoutez vos éléments ici -->
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS (facultatif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
