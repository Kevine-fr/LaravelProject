<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body{
        height: 100dvh;
        width: 100%;
        display: flex;
        background-color: #E5E4E4;
    }

    a:hover{
        text-decoration: none; 
    }
        /* Start Container left code */

    .left{
        width: 16.5%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 15px;
    }
    .left-title{
        display: flex;
        flex-direction: column;
    }
    .left-logo{
        display: flex;
        align-items: center;
    }
    .left-logo i{
        color:#0CC2E7;
        padding-left: 0.5rem;
    }
    .left-title img{
        width: 12.5%;
        border-radius: 50%;
    }
    .left-title h4{
        padding: 0;
        margin: 0;
    }
    /* .left-menu{
        
    } */
    .left-items-menu{
        background-color: #0CC2E7;
        border-radius: 7.5px;
        padding: 10px;
        margin: 10px 0 10px 0;
        display: flex;
    }
    .left-items-menu:hover{
          background-color: #5FE1E3;
          cursor: pointer;
    }
    .left-items-menu i{
        color: white;
    }
    .left-item{
        color:white;
        padding-left: 1rem;
        margin: 0;
    }
    .left-setting-menu{
        display: flex;
    }
    .left-setting-menu i{
        color: grey;
    }
    .left-setting-menu p{
        color: grey;
    }
    .left-profil{
        display: flex;
        justify-content: space-between;
    }
    .left-img-name{
        display: flex;
    }
    .left-img-name img{
        width: 30px;
        height: 30px;
    }
    .left-img-name p{
        padding-left: 0.75rem;
        margin: 0;
    }

        /* End Container left code */


        /* Start Container center code */

    .center{
        padding: 5px 10px 0 10px;
        width: 58.5%;
        max-height: 100vh;
    }
    .center-title{
        display: flex;
        justify-content: space-between;
    }
    .center-title h3{
        color: #29C0CA;
    }
    .center-search{
        width: 60%;
    }
    .center-search span{
        border-top-left-radius: 7.25px;
        border-bottom-left-radius: 7.25px;
        color:#9C9C9C
    }
    .center-subtitle{
        display: flex;
        justify-content: space-between;
    }
    .period{
        padding: 10px;
        display:flex;
        background-color: white;
        border-radius: 7.25px;
        align-items: center;
        justify-content: space-between;
    }
    .period i{
        color:#9C9C9C;
        font-size:large;
        padding-right: 5px;
    }
    .period p{
        color:#9C9C9C;
        font-size:small;
        margin: 0;
    }
    a.list-group-item {
    color: black; 
    text-decoration: none;
    transition: transform 0.8s; 
    color: #6c757d; 
    font-weight: 200;
    }
    a.list-group-item:hover {
        color: whitesmoke; 
        scale: 0.90;
        animation-duration: 1150ms;
        transform: translateX(80px); 
        background-color: #5FE1E3;
        border-radius: 5px; 
    }
    .center-content-tilte{
        display: flex;
        background-color: #393939;
        color: white;
        border-radius: 7.25px;
        margin-top: 10px;
    }
    .center-content-subtitle{
        overflow: auto;
        max-height:82vh;
    }
    .center-content-subtitle-row{
        display: flex;
        align-items: center;
        background-color: white;
        border-radius: 7.25px;
        margin-top: 5px;
    }
    .btn-action{
        background-color: #0CC2E7;
    }
            /* End Container center code */


    .right{
        width: 25%;
        height: 100vh;
        padding: 5px 5px 10px 10px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .right-title{
        display: flex;
        justify-content: end;
    }
    .right-add-btn{
        color: white;
        display: flex;
        align-items: center;
    }
    .right-add-btn p{
        margin: 0;
    }
    .right-tilte-profil{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .right-tilte-profil h5{
        border-radius: 7.5px;
        background-color:#E5E4E4;
        padding: 7.5px;
    }
    .right-subtitle{
        background-color: white;
        justify-content: space-between;
        margin-top:5px ;
        width: 100%;
        border-radius: 7.25px;
        display: flex;
    }
    .right-subtitle svg{
        width: 160px;
        height: 160px;
        margin: 10px;

    }
    .skill{
        justify-content: start;
        display: flex;
        margin: 10px;
        width: 160px;
        height: 160;
        }
    .outer {
          width: 160px;
          height: 160px;
          border-radius: 50%;
          padding: 20px;
          background-color: #E5E4E4; /* Couleur info de Bootstrap */
          box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
                      -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
        }
     .inner {
          width: 120px;
          height: 120px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #E5E4E4; /* Couleur info de Bootstrap */
          box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                      inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
                      -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                      0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                      0px 12px 10px -10px rgba(0, 0, 0, 0.05);
        }

    #number {
          font-weight: 600;
          color: white;
        }
    circle{
        fill: none;
        stroke: #5FE1E3;
        stroke-width: 20px;
        stroke-dashoffset: 472;
        stroke-dasharray: 472;
        animation: anim 2s linear forwards;
    }
    svg{
        position: absolute;
    }
    @keyframes anim {
        100%{
            stroke-dashoffset: 162;
        }
    }
    .right-effective{
        border-radius: 7.25px;
        margin-top: 5px;
        padding: 10px 5px 0px 5px;
        background-color: #393939;
        color: white;
    }
    .right-effective-content{
        display: flex;
        justify-content: space-between;
    }
    .right-effective-content-tilte{
        display: flex;
        justify-content: space-between;
        color: white;
    }
    .right-effective-content-tilte p{
        font-size: small;
        padding: 0 0.5rem 0 0.5rem;
    }
    .right-titlte-content{
        margin-top: 5px;
        display: flex;
    }
    .right-titlte-content-div{
        width: 33.33%;
    }
    .right-titlte-content-div p{
        margin: 0;
    }
    .right-titlte-content-division{
        /* bg-primary text-center text-white px-4 */
        text-align: center;
        color: white;
        padding: 0 1rem 0 1rem;
        border-top-right-radius:10px;
        border-top-left-radius:10px
    }
    .right-title-content-subdivision{
        background-color: white;
        text-align: center;
        border-radius: 7.5px;
    }
    .right-title-content-subdivision h6{
        padding: 1rem 0 1rem 0;
        color: #6c757d;
        margin: 0;
    }
    .right-content-bottom{
        width: 100%;

    }
    .right-content-bottom-top{
        display: flex;
    }
    .right-content-bottom-left{
        width: 50%;
    }
    .right-content-bottom-bottom{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 7.5px 0 7.5px 0;
        text-align: center;
        color: white;
    }
    .right-content-bottom-bottom-first{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 7.5px 0 7.5px 0;
        text-align: center;
        color: white;
    }
    .right-content-bottom-bottom p{
        margin: 0;
    }
    .right-bottom-content-div{
        display: flex;
        margin: 0 5px 5px 0;

    }
    .right-bottom-content-div-percent{
        display: flex;
        width: 95%;
        padding: 5px;
        align-items: center;
        justify-content: space-between;
        background-color: white;
    }
    .right-bottom-content-div-percent p{
        margin: 0;
    }
    .right-bottom-color{
        width: 5%;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .value{
        font-size: x-small;
    }
    .skilltwo {
        width: 45px;
        height: 50px;
        position: relative;
        }

        .outertwo {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        padding: 5px;
        box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
                    -6px -6px 10px -1px rgba(0, 0, 0, 0.07); /* Ombre noire */
        }

        .innertwo {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #E5E4E4; /* Couleur principale blanche */
        box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                            inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
                            -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                            0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                            0px 12px 10px -10px rgba(0, 0, 0, 0.05);
        }
        #number {
        font-weight: 600;
        color: #555;
        }
        .right-content-bottom-right{
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50%;
    }
        .skillthree{
          width: 160px;
          height: 160px;
          /* position: relative; */
        }
        .outerthree {
          width: 160px;
          height: 160px;
          border-radius: 50%;
          padding: 20px;
          background-color: #5FE1E3; /* Couleur info de Bootstrap */
          box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
                      -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
        }

        .innerthree {
          width: 120px;
          height: 120px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #5FE1E3; /* Couleur info de Bootstrap */
          box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                      inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
                      -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                      0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                      0px 12px 10px -10px rgba(0, 0, 0, 0.05);
        }

        #number {
          font-weight: 600;
          color: #555;
        }


</style>

<body>

    @if (auth()->check() && auth()->user()->hasRole('Administrateur'))

    <div class="left">
        <div class="left-title">
            <div class="left-logo">
                <img src="images/three.jpeg" alt="">
                <h4><i>Studlearn</i></h4>
            </div>

            <br>

            <div class="left-menu">
                <a href="{{route('user.index')}}" class="text-white">
                <div class="left-items-menu" style="background-color: #5FE1E3;">
                    <i class="material-icons">bar_chart</i>
                    <h6 class="left-item">
                        Home
                    </h6>
                </div>
                </a>
                <a href="{{route('anneescolaire.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">event</i>
                    <h6 class="left-item">
                        Année-scolaire
                    </h6>
                </div>
                </a>
                <a href="{{route('professeur.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">card_travel</i>
                    <h6 class="left-item">
                    Professeur
                    </h6>
                </div>
                </a>
                <a href="{{route('etudiant.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">school</i>
                    <h6 class="left-item">
                    Etudiant
                    </h6>
                </div>
                </a>
                <a href="{{route('classe.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">meeting_room</i>
                    <h6 class="left-item">
                    Classe
                    </h6>
                </div>
                </a>
                <a href="{{route('cours.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">book</i>
                    <h6 class="left-item">
                    Cours
                    </h6>
                </div>
                </a>
                <a href="{{route('salle.index')}}" class="text-white">
                <div class="left-items-menu">
                    <i class="material-icons">store</i>
                    <h6 class="left-item">
                    Salle
                    </h6>
                </div>
                </a>
            </div>
        </div>
        <div class="left-subtitle">
            <div class="left-setting-menu">
                <i class="material-icons">account_circle</i>
                <p class="left-item">{{auth()->user()->roles->first()->name}}</p>
            </div>
            <br>
            <div class="left-setting-menu">
                <i class="material-icons">help_outline</i>
                <p class="left-item">Assistance</p>
            </div>
            <hr>
            <div class="left-profil">
                <div class="left-img-name">
                    <img src="images/two.jpg" alt="" class="rounded-circle">
                    <p>{{Auth::user()->name}}</p>
                </div>
                <i class="material-icons">more_vert</i>
            </div>
        </div>
    </div>

    <div class="center">
        <div class="center-title">
            <h3>Dashbord</h3>
            <div class="center-search">
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
              </div>
            </div>
        </div>
        <div class="center-subtitle">
            <div class="period">
                <i class="material-icons">calendar_today</i>
                <p>Depuis toujours</p>
            </div>
            <button type="button" class="btn btn-light dropdown-toggle text-dark" data-toggle="modal" data-target="#filterModal">
                Filtrer
            </button>
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
                            <a class="list-group-item" href="">Pédagogie</a>
                            <a class="list-group-item" href="">Sécretariat</a>
                            <a class="list-group-item" href="">Professeur</a>
                            <a class="list-group-item" href="">Etudiant</a>
                        </ul>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-content">
            <div class="center-content-tilte">
                <div class="col  text-center p-2"><h6>Prénom</h6></div>
                <div class="col  text-center p-2"><h6>Nom</h6></div>
                <div class="col  text-center p-2"><h6>Profil</h6></div>
                <div class="col  text-center p-2"><h6>Role</h6></div>
                <div class="col  text-center p-2"><h6> Date de création</h6></div>
                <div class="col  text-center p-2"><h6>Actions</h6></div>                    
            </div>
            @if($nb_user >= 1)
                <div class="center-content-subtitle">
                    @foreach($personne as $person)
                    <div class="center-content-subtitle-row">
                        <div class="col  text-center p-2">{{$person->first_name}}</div>
                        <div class="col  text-center p-2">{{$person->name}}</div>
                        <div class="col  text-center p-2 text-info">{{$person->roles->first()->name}}</div>
                        <div class="col  text-center p-2 text-secondary">{{$person->roles->first()->id}}</div>
                        <div class="col  text-center p-2 text-secondary">{{$person->created_at->format('d/m/Y')}}</div>
                        <div class="col  text-center p-2"><button class="btn-action btn  text-white">Actions</button></div>
                    </div>
                    @endforeach
            </div>
            @else
                <div class="d-flex justify-content-center text-secondary py-2">
                    Aucun profil n'a été enregistrer !
                </div>
            @endif
        </div>
    </div>

    <div class="right">
        <div>
            <div class="right-title">
                <button class="btn right-add-btn btn-info">
                    <a  href="{{route ('user.store')}}" style="text-decoration: none; color:#fff">
                        <p>Ajouter un profil</p>
                    </a>  
                </button>
            </div>
            <div class="right-subtitle">
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <linearGradient id="GradientColor">
                    <stop offset="0%" stop-color="#e91e63" />
                    <stop offset="100%" stop-color="#673ab7" />
                    </linearGradient>
                </defs>
                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                </svg>
                <div class="right-tilte-profil">
                    <h5 class="text-info">Etudiant</h5>
                </div>
            </div>
            <div class="right-effective">
                    <div class="right-effective-content">
                        <div class="right-effective-content-tilte">
                        <i class="material-icons">desktop_windows</i>
                        <p >Effectif de pédagogie</p>
                        </div>
                        <div>
                        <p>{{$nb_pedagogie}}</p>
                        </div>
                    </div>
                    <div class="right-effective-content">
                        <div class="right-effective-content-tilte">
                        <i class="material-icons">computer</i>
                        <p >Effectif de sécrétariat</p>
                        </div>
                        <div>
                        <p>{{$nb_secretariat}}</p>
                        </div>
                    </div>
                    <div class="right-effective-content">
                        <div class="right-effective-content-tilte">
                        <i class="material-icons">card_travel</i>
                        <p>Effectif de professeur</p>
                        </div>
                        <div>
                        <p>{{$nb_professeur}}</p>
                        </div>
                    </div>
                    <div class="right-effective-content">
                        <div class="right-effective-content-tilte">
                        <i class="material-icons">school</i>
                        <p>Effectif d'étudiant</p>
                        </div>
                        <div>
                        <p>{{$nb_etudiant}}</p>
                        </div>
                    </div>
                    </div>
                <div class="right-titlte-content">
                <div class="right-titlte-content-div">
                    <div class="bg-primary right-titlte-content-division">
                        <p>Classes</p>
                    </div>
                    <div class="right-title-content-subdivision">
                        <h6>{{$nb_classe}}</h6>
                    </div>
                    </div>
                    <div class="right-titlte-content-div px-1">
                    <div class="bg-success right-titlte-content-division">
                        <p>Cours</p>
                    </div>
                    <div class="right-title-content-subdivision">
                        <h6>{{$nb_cours}}</h6>
                    </div>
                    </div>
                    <div class="right-titlte-content-div">
                    <div class="bg-info right-titlte-content-division">
                        <p>Salles</p>
                    </div>
                    <div class="right-title-content-subdivision">
                        <h6>{{$nb_salle}}</h6>
                    </div>
                    </div>
                </div>
            </div>
            <div class="right-content-bottom">
            <div class="right-content-bottom-bottom-first bg-info">
                    <p>Pourcentages des profils administratifs</p>
                </div>
                <div class="right-content-bottom-top"> 
                    <div class="right-content-bottom-left">
                        <div class="right-bottom-content-div">
                            <div class="right-bottom-content-div-percent">
                                <div class="skilltwo">
                                    <div class="outertwo bg-info">
                                        <div class="innertwo">
                                            <div id="number">
                                                @if(($nb_pedagogie + $nb_professeur + $nb_secretariat) != 0)
                                                <p class="value">{{number_format($nb_secretariat * 100 / ($nb_pedagogie + $nb_professeur + $nb_secretariat), 2)}}%</p>
                                                @else
                                                <p class="value">0%</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>% Sécrétariat</p>
                            </div>
                            <div class="right-bottom-color bg-info"></div>
                        </div>
                        <div class="right-bottom-content-div">
                            <div class="right-bottom-content-div-percent">
                                <div class="skilltwo">
                                    <div class="outertwo bg-primary">
                                        <div class="innertwo">
                                            <div id="number">
                                            @if(($nb_pedagogie + $nb_professeur + $nb_secretariat) != 0)
                                                <p class="value">{{number_format($nb_professeur * 100 / ($nb_pedagogie + $nb_professeur + $nb_secretariat), 2)}}%</p>
                                                @else
                                                <p class="value">0%</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>% Professeur</p>
                            </div>
                            <div class="right-bottom-color bg-primary"></div>
                        </div>
                        <div class="right-bottom-content-div">
                            <div class="right-bottom-content-div-percent">
                                <div class="skilltwo">
                                    <div class="outertwo bg-success">
                                        <div class="innertwo">
                                            <div id="number">
                                            @if(($nb_pedagogie + $nb_professeur + $nb_secretariat) != 0)
                                                <p class="value">{{number_format($nb_pedagogie * 100 / ($nb_pedagogie + $nb_professeur + $nb_secretariat), 2)}}%</p>
                                                @else
                                                <p class="value">0%</p>
                                                @endif
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <p>% Pédagogie</p>
                            </div>
                            <div class="right-bottom-color bg-success"></div>
                        </div>
                    </div>
                    <div class="right-content-bottom-right">
                    <div class="skillthree">
                          <div class="outerthree">
                            <div class="innerthree">
                              <div id="number">
                                <p class="m-0 text-white">
                                  {{$nb_pedagogie + $nb_professeur + $nb_secretariat}}
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="right-content-bottom-bottom bg-success">
                    <p>Effectif des profils administratifs</p>
                </div>
            </div>
        </div>
        <script>
            let number =document.getElementById("number")
            let counter = 0
            setInterval(()=>{
                if(counter == 65){
                    clearInterval()
                }else{
                    counter += 1
                    number.style.color = "#393939"
                    number.innerHTML = counter + "%"
                }
            }, 30)
        </script>
    </div>
    
    @else
        <div class="text-center text-white">
            Vous n'êtes pas administrateur !
        </div>

    @endif

                            <!-- Js code -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>