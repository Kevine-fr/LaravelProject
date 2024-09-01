<!-- resources/views/etudiant/index.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .student-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Liste des étudiants</h1>
    @foreach ($etudiants as $etudiant)
        <div class="student-card">
            <h2>{{ $etudiant->user->nom }} {{ $etudiant->user->prenom }}</h2>
            <p><strong>Email:</strong> {{ $etudiant->user->email }}</p>
            <p><strong>Date de naissance:</strong> {{ $etudiant->date_de_naissance }}</p>
            <!-- Ajoutez d'autres champs spécifiques aux étudiants ici -->
        </div>
    @endforeach
</body>
</html>
