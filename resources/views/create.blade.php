<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Ajout profil</title>
</head>
<body style="background-color: #C2EEEB;">

<style>
    a{
        text-decoration: none;
        color: #C2EEEB;
    }
    a:hover{
        text-decoration: none;
    }
.arrow-back{
    padding: 2.5px 7.5px 2.5px 7.5px;
    border-radius: 50%;
    background-color: white;
    margin-top: 25px;
}
    
</style>

            

    <div class="container-fluid vh-100 align-items-center">
            
        <div class="d-flex align-items-center justify-content-between">
            <div class="arrow-back">
                <a id="scroll-top-btn" href="{{route('user.index')}}"><i class="fas fa-arrow-left"></i></a>
            </div>
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
        </div>
            

        <div class="d-flex align-items-center my-3">

            <div class="container-sm rounded bg-white m-0">
                
                <h6 class="pt-4 text-secondary">Ajouter un profil</h6>
                <hr class="pb-2">

                <form action="{{ route('user.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                    <div class="pb-3">
                        <label for="">Nom</label>
                        <input type="text" placeholder="Nom" name="name" class="form-control text-dark rounded" required>
                        <div class="valid-tooltip">
                            Nom valide!
                        </div>
                    </div>

                    <div class="pb-3">
                        <label for="">Prénom</label>
                        <input type="text" placeholder="Prénom" name="first_name" class="form-control text-dark rounded" required>
                        <div class="valid-tooltip">
                            Prénom valide!
                        </div>
                    </div>

                    <div class="pb-3">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" name="email" class="form-control text-dark rounded" required>
                        <div class="invalid-tooltip">
                            Veuillez saisir '@' dans votre Email!
                        </div>
                    </div>

                    <div class="pb-3">
                        <label for="">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" name="password" class="form-control text-dark rounded" required>
                        <div class="valid-tooltip">
                            Mot de passe invalide!
                        </div>
                    </div>

                    <div class="pb-3">
                        <label for="">Confirmation de mot de passe</label>
                        <input type="password" placeholder="Confirmation de mot de passe" class="form-control text-dark rounded" required>
                        <div class="invalid-tooltip">
                            Ce champ ne correspond pas au champ mot de passe!
                        </div>
                    </div>

                    <div class="py-2">
                        <select name="role" id="role" class="form-control" value="Pédagogie" required>
                        <option value="" disabled selected>Choisir un profil</option>
                        @foreach ($roles as $role)
                                @if ($role->id != 1)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="d-flex justify-content-between py-3">
                        <a href="{{route('user.index')}}" class="text-secondary font-weight-light">
                            Annuler
                        </a>

                        <button type="submit" class="btn btn-info text-white">
                            Ajouter
                        </button>
                    </div>
                
                </form>

            </div>

            <div class="container-sm d-flex align-items-center justify-content-center">
                <img src="images/three.jpeg" alt="" class="rounded-circle img-fluid">
            </div>


        </div>

        
    </div>

    <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
    
</body>
</html>