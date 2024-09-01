<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de création de profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        label {
            color: white;
        }
        a:hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: #2d3748;">
    @if (auth()->check() && auth()->user()->hasRole('Administrateur'))
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
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <li style="color:green">{{ $message }}</li>
                </div>
            @endif
            <div class="justify-content-between d-flex align-items-center">
                <h1 class="mb-4 text-white">Ajouter un profil</h1>
                <a href="{{ route('user.index') }}" class="btn btn-primary">Lister les profils</a>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="name" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe :</label>
                    <input type="password" class="form-control" id="mot_de_passe" name="password" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Profil :</label>
                    <select id="role" name="role" class="form-control">
                        @foreach ($roles as $role)
                            @if ($role->id != 1)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-3">Créer le profil</button>
            </form>
        </div>
    
    @else
        <div class="text-center text-white">
            Vous n'êtes pas administrateur !
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>