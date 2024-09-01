<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

      /* text edit : fa fa-edit	 */

        html, body {
            height: 100%;
            margin: 0;
        }
        .container-fluid, .row {
            height: 100%;
        }
        * {
            text-decoration: none;
        }
        .align-items-center{
          color: grey;
        }
        .align-items-center:hover{
          background-color: #5FE1E3;
          cursor: pointer;
          color: white;
        }
        .skill{
          width: 150px;
          height: 160;
          position: relative;
        }
        .outer {
          width: 150px;
          height: 150px;
          border-radius: 50%;
          padding: 20px;
          background-color: #5FE1E3; /* Couleur info de Bootstrap */
          box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
                      -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
        }

        .inner {
          width: 105px;
          height: 105px;
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

        .skilltwo {
  width: 40px;
  height: 45px;
  position: relative;
}

.outertwo {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  padding: 5px;
  background-color: #ffffff; /* Couleur principale blanche */
  box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
              -6px -6px 10px -1px rgba(0, 0, 0, 0.07); /* Ombre noire */
}

.innertwo {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffffff; /* Couleur principale blanche */
  box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                      inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
                      -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                      0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                      0px 12px 10px -10px rgba(0, 0, 0, 0.05);
}

#numbertwo {
  font-weight: 600;
  color: #555;
}

    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable([
              
              ['Task', 'Hours per Day'],
              ['Pédagogie',     11],
              ['Sécrétariat',      2],
              ['Professeur',  2],
              ['Etudiant', 2],
              ['Classe',    7]
            ]);

            var options = {
              title: "Diagramme circulaire d'effectif"
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
          }
        </script>

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container-fluid h-100 ">

        <div class="row">

            <div class="col-2 h-100 d-flex flex-column fixed-size">
                
                <div class="flex-grow-1">

                  <div class="d-flex px-2 py-3">
                    <img src="images/three.jpeg" alt="Image avec bords arrondis" class="rounded-circle" width="30" height="30">
                    <h4 class="text-info px-2"><i>Studlearn</i></h4>
                  </div>

                  <div class="p-2">

                  <div class="bg-info p-2 d-flex align-items-center rounded">
                    <i class="material-icons text-white">bar_chart</i>
                    <h6 class="px-4 m-0 text-white">Home</h6>

                    </div>
                  
                    <div class="my-2 p-2 d-flex align-items-center rounded">
                    <i class="material-icons">event</i>
                    <h6 class="px-4 m-0 ">Année scolaire</h6>

                    </div>

                    <!-- <div class="p-2 d-flex justify-content-between align-items-center">
                    <i class="material-icons">desktop_windows</i>
                    <h6 class="px-5 m-0">Pédagogie</h6>

                    </div>

                    <div class="p-2 d-flex justify-content-between align-items-center">
                    <i class="material-icons">computer</i>
                    <h6 class="px-5 m-0">Sécrétariat</h6>

                    </div> -->

                    <!-- <div class=" p-2 d-flex justify-content-between align-items-center">
                    <i class="material-icons">card_travel</i>
                    <h6 class="px-5 m-0">Professeur</h6>

                    </div> -->


                    <div class="my-2 p-2 d-flex align-items-center rounded">
                    <i class="material-icons ">school</i>
                    <h6 class="px-4 m-0">Classe</h6>

                    </div>
    
                    <!-- <div class="p-2 d-flex align-items-center">
                    <i class="fas fa-user-graduate p-1"></i>
                    <h6 class="px-5 m-0">Etudiant</h6>

                    </div> -->

                    <div class="my-2 p-2 d-flex align-items-center rounded">
                    <i class="material-icons ">book</i>
                    <h6 class="px-4 m-0">Cours</h6>

                    </div>

                    <div class="my-2 p-2 d-flex align-items-center rounded">
                    <i class="material-icons">store</i>
                    <h6 class="px-4 m-0">Salle</h6>

                    </div>

                  </div>

                </div>

                <div class="bg-white flex-grow-1 d-flex flex-column justify-content-end">

                <div class="d-flex align-items-center px-3 py-2 rounded">
                    <i class="material-icons">account_circle</i>
                    <p class="px-3 m-0" >Administrateur</p>
                </div>

                <div class="d-flex align-items-center px-3 py-2 rounded">
                    <i class="material-icons">help_outline</i>
                    <p class="px-3 m-0">Assistance</p>
                </div>

                <hr class="my-2">

                <div class="d-flex px-3">
                    <img src="images/two.jpg" alt="" width="30" height="30" class="rounded-circle" class="px-2">
                    <div class="flex-column">
                        <div class="col px-2">
                            <p style="font-size:16px;" class="px-1">Diantouadi</p>
                        </div>
                    </div>
                    <i class="material-icons px-4">more_vert</i>
                </div>

                </div>
        
            </div>

            <div class="col-7 h-100" style="background-color:#E5E4E4;">

              <div class="d-flex justify-content-between my-1">
                <h3 class="" style="color:#29C0CA">Dashbord</h3>
                <div class="col-7 rounded">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search" style="color:#9C9C9C"></i></span>
                    <input type="text" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
                  </div>
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between bg-white rounded px-2 align-items-center">
                  <i class="material-icons" style="color:#9C9C9C;font-size:large">event</i>
                  <p class="m-0 px-2" style="color:#9C9C9C;font-size:small">Depuis toujours</p>
                </div>
                <div class="dropdown">
                  <button class="btn btn-light dropdown-toggle text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filtrer
                  </button>
                  <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">Pédagogie</button></li>
                    <li><button class="dropdown-item" type="button">Sécrétariat</button></li>
                    <li><button class="dropdown-item" type="button">Professeur</button></li>
                    <li><button class="dropdown-item" type="button">Etudiant</button></li>

                  </ul>
                </div>
              </div>

              <div class="my-2">
                <!-- Master Classe -->
              <div class="container" style="overflow:auto;max-height:88vh;">
                <div class="row bg-white rounded">
                  <div class="col  text-center p-2"><h6>Prénom</h6></div>
                  <div class="col  text-center p-2"><h6>Nom</h6></div>
                  <div class="col  text-center p-2"><h6>Profil</h6></div>
                  <div class="col  text-center p-2"><h6>Traitement</h6></div>
                  <div class="col  text-center p-2"><h6> Date de création</h6></div>
                  <div class="col  text-center p-2"><h6>Actions</h6></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Kévine</div>
                  <div class="col  text-center p-2">Diantouadi</div>
                  <div class="col  text-center p-2 text-primary">Administrateur</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">26/06/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Natliane</div>
                  <div class="col  text-center p-2">Tabaho</div>
                  <div class="col  text-center p-2 text-primary">Sécrétaire</div>
                  <div class="col  text-center p-2 text-danger">01</div>
                  <div class="col  text-center p-2 text-secondary">06/11/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Kaneki</div>
                  <div class="col  text-center p-2">Ken</div>
                  <div class="col  text-center p-2 text-primary">Professeur</div>
                  <div class="col  text-center p-2 text-danger">21</div>
                  <div class="col  text-center p-2 text-secondary">11/02/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Azert</div>
                  <div class="col  text-center p-2">Nazaki</div>
                  <div class="col  text-center p-2 text-primary">Professeur</div>
                  <div class="col  text-center p-2 text-danger">33</div>
                  <div class="col  text-center p-2 text-secondary">12/07/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Ameli</div>
                  <div class="col  text-center p-2">Destroy</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">52</div>
                  <div class="col  text-center p-2 text-secondary">03/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Josias</div>
                  <div class="col  text-center p-2">Ludger</div>
                  <div class="col  text-center p-2 text-primary">Sécrétariat</div>
                  <div class="col  text-center p-2 text-danger">07</div>
                  <div class="col  text-center p-2 text-secondary">11/11/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
                <div class="row bg-white my-1 rounded">
                  <div class="col  text-center p-2">Emmanuel</div>
                  <div class="col  text-center p-2">Preski</div>
                  <div class="col  text-center p-2 text-primary">Pédagogie</div>
                  <div class="col  text-center p-2 text-danger">11</div>
                  <div class="col  text-center p-2 text-secondary">16/04/2023</div>
                  <div class="col  text-center p-2"><button class="btn btn-info text-white">Actions</button></div>
                </div>
              </div>
            </div>
          </div>

            <div class="col-3 h-100 py-1 fixed-size" style="background-color:#E5E4E4;">

              <div class="d-flex justify-content-end">
                <button class="btn btn-primary text-white d-flex">
                  <i class="material-icons px-1">add</i><p class="m-0">Ajouter un profil</p>
                </button>
              </div>

              <div class="my-2 p-2 bg-white rounded">
                <h6 class="text-secondary">Diagramme circulaire</h6>

                <div class="justify-content-start" id="piechart"></div>

                  <div class="justify-content-between d-flex">
                    <div class="justify-content-between d-flex">
                      <i class="material-icons text-secondary">desktop_windows</i>
                      <p class="text-secondary px-2" style="font-size:small;">Effectif de pédagogie</p>
                    </div>
                    <div class="">
                      <p class="text-secondary">1</p>
                    </div>
                  </div>
                  <div class="justify-content-between d-flex">
                    <div class="justify-content-between d-flex">
                      <i class="material-icons text-secondary">computer</i>
                      <p class="text-secondary px-2" style="font-size:small;">Effectif de sécrétariat</p>
                    </div>
                    <div class="">
                      <p class="text-secondary">0</p>
                    </div>
                  </div>
                  <div class="justify-content-between d-flex">
                    <div class="justify-content-between d-flex">
                      <i class="material-icons text-secondary">card_travel</i>
                      <p class="text-secondary px-2" style="font-size:small;">Effectif de professeur</p>
                    </div>
                    <div class="">
                      <p class="text-secondary">0</p>
                    </div>
                  </div>
                  <div class="justify-content-between d-flex">
                    <div class="justify-content-between d-flex">
                      <i class="material-icons text-secondary">school</i>
                      <p class="text-secondary px-2" style="font-size:small;">Effectif d'étudiant</p>
                    </div>
                    <div class="">
                      <p class="text-secondary">0</p>
                    </div>
                  </div>
                  <div class="justify-content-between d-flex">
                    <div class="justify-content-between d-flex">
                      <i class="material-icons text-secondary">class</i>
                      <p class="text-secondary px-2" style="font-size:small;">Effectif de classe</p>
                    </div>
                    <div class="">
                      <p class="text-secondary">0</p>
                    </div>
                  </div>

              </div>
              
              <div class="rounded d-flex justify-content-between">

                <div class="col-4">
                  <div class="bg-primary text-center text-white px-4" style="border-top-right-radius:10px;border-top-left-radius:10px">
                    <p class="m-0">Classes</p>
                  </div>
                  <div class="bg-white text-center text-secondary rounded">
                    <h6 class="py-3 text-dark m-0">11</h6>
                  </div>
                </div>
                <div class="col-4 px-1">
                  <div class="bg-success text-center text-white px-4" style="border-top-right-radius:10px;border-top-left-radius:10px">
                    <p class="m-0">Cours</p>
                  </div>
                  <div class="bg-white text-center text-secondary rounded">
                    <h6 class="py-3 text-dark m-0">9</h6>
                  </div>
                </div>
                <div class="col-4">
                  <div class="bg-info text-center text-white px-4" style="border-top-right-radius:10px;border-top-left-radius:10px">
                    <p class="m-0">Salles</p>
                  </div>
                  <div class="bg-white text-center text-secondary rounded">
                    <h6 class="py-3 text-dark m-0">21</h6>
                  </div>
                </div>

              </div>

              <div class="my-2 bg-white rounded">
                <div class="">
                    <div class="bg-success text-center text-white px-4" style="border-top-right-radius:10px;border-top-left-radius:10px">
                      <p class="m-0 py-2">Effectif total des profils</p>
                    </div>
                    <div class="bg-white text-secondary rounded py-2 d-flex justify-content-between mx-2">
                      <!-- A revoir!!! -->
                        <div class="skill ml-1 col-6">
                          <div class="outer">
                            <div class="inner">
                              <div class="number">
                                <p class="m-0 text-white">
                                  101
                              </p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-6" style="background-color:#E5E4E4">

                          <div class="bg-white d-flex justify-content-between m-1" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                            <div class="d-flex">
                              <div class="bg-info text-info" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                                <p class="px-1"></p>
                              </div>
                              <p class="m-0 py-2 px-1 small">
                                %Sécrétariat
                              </p>
                            </div>
                            <div class="skilltwo mx-2 ">
                              <div class="outertwo">
                                <div class="innertwo">
                                  <div class="numbertwo">
                                    <p class="m-0 text-secondary" style="font-size:x-small">
                                      31%
                                  </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-white d-flex justify-content-between m-1" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                            <div class="d-flex">
                              <div class="bg-primary text-info" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                                <p class="px-1"></p>
                              </div>
                              <p class="m-0 py-2 px-1 small">
                                %Professeur
                              </p>
                            </div>
                            <div class="skilltwo mx-2 ">
                              <div class="outertwo">
                                <div class="innertwo">
                                  <div class="numbertwo">
                                    <p class="m-0 text-secondary" style="font-size:x-small">
                                      28%
                                  </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-white d-flex justify-content-between m-1" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                            <div class="d-flex">
                              <div class="bg-success text-info" style="border-bottom-left-radius:8px;border-top-left-radius:8px">
                                <p class="px-1"></p>
                              </div>
                              <p class="m-0 py-2 px-1 small">
                                %Pédagogie
                              </p>
                            </div>
                            <div class="skilltwo mx-2 ">
                              <div class="outertwo">
                                <div class="innertwo">
                                  <div class="numbertwo">
                                    <p class="m-0 text-secondary" style="font-size:x-small">
                                      41%
                                  </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                              
            </div>

        </div>

    </div>
    
</body>
</html>