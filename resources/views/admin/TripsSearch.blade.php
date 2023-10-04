<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ffdf620d94.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">



<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-2">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"  href="{{route('dashboardAdmin')}}">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Trips</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Trips</h6>
            </nav>
         
        </div>
  </nav>
    <section class="min-vh-1 mb-1">
            @php
                $imagePath = asset('img/curved-images/curved14.jpg');
            @endphp
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{ $imagePath }}');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Welcome to our website !</h1>
                            <p class="text-lead text-white">This page provides a registration opportunity for shuttle companies and associated subscriptions. By registering, you can benefit from easy and fast access to our professional shuttle service for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="position-absolute w-100 z-index-1 bottom-0">
           
            </div>
            </div>
            
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n5">
                    <div class="col-xl-6 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                            </div>
                            <div class="card-body">      
                                <label><h6>Select your Choice : </h6></label>

                                <form role="form text-left" >
                                <div class="input-group" style="width: 560px">
                                <select  name="searchByDepart" type="text" id="searchByDepart"class="form-select text-center" aria-label="trajet">
                                    <option selected> Start</option>
                                    @foreach($voyagesSelect as $voyage )
                                    <option value="{{$voyage->depart}}">{{$voyage->depart}}</option>
                                    @endForeach
                                </select>
                                <select name="searchByDestination" type="text" id="searchByDestination"class="form-select text-center" aria-label="de ville">
                                    <option selected> Destination</option>
                                 @foreach($voyagesSelect as $voyage )
                                    <option value="{{$voyage->destination}}">{{$voyage->destination}}</option>
                                    @endForeach
                                </select>
                                <select name="searchByStart" type="time" id="searchByStart"class="form-select text-center" aria-label="de ville">
                                    <option selected>Heure Depart</option>
                                 @foreach($voyagesSelect as $voyage )
                                    <option value="{{$voyage->heur_debut_aller}}">{{$voyage->heur_debut_aller}}</option>
                                    @endForeach
                                </select>
                                
                            </div>

                                    
                                    <div class="text-center">
                                        <button href="{{route('TripsSearch')}}" type="submit"class="btn bg-gradient-dark w-100 my-4 mb-2"> Search  <i class="fas fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    

</section>


    <div class="container-fluid py-6">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-0 mx-auto">
                <div class="card mb-4">
                    <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">TRIPS</h5>
                    </div>
                 
                    
                            <div class="rounded shadow p-3 mt-4">
                            <div class="row "> 
                            @foreach ($voyages as $voyage) 

                            <div class="col-sm-5 col-md-6">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg rounded shadow p-3">
                                        <div class="d-flex flex-column">
                                            <a class="align-middle text-left text-sm">
                                            <i class="fa-solid fa-bus me-3" style="font-size: 24px;">
                                            <h6># Trip number : {{$voyage->id}}</h6>
                                            </i>
                                            </a>
                                            <span class="mb-2 text-xs"><br><small>Depart - Desctination :</small> <span class="text-dark font-weight-bold ms-sm-2">{{$voyage->depart}} - {{$voyage->destination}}</span></span>
                                            <span class="mb-2 text-xs">HORAIRE ALLER : <span class="text-dark ms-sm-2 font-weight-bold">{{$voyage->heur_debut_aller}} - {{$voyage->heur_debut_retour}}</span></span>
                                            <span class="mb-2 text-xs">HORAIRE RETOUR <span class="text-dark ms-sm-2 font-weight-bold">{{$voyage->heur_fin_aller}} - {{$voyage->heur_fin_retour}}</span></span>
                                         </div>
                                        <div class="ms-auto text-end w-20">
                                            <span class="mb-2 text-xxs text-dark ms-sm-2 font-weight-bold"><br></span>
                                                <br><img src="img/qr.png" class="img-fluid" style="height: 90px" alt="profile picture">
<br>    <small><a  href="{{route('deleteTrip',['id' => $voyage->id])}}"  class="btn btn-outline-danger mt-2 "  >Delete</a></small>
                                        </div>

                                </li>
                                
                            </div>   
                            @endforeach

                        </div>            
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</main>

<!--   Core JS Files   -->
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/smooth-scrollbar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
    .modified {
        border: 2px solid #8bc34a;
        border-radius: 10px;
    }

</style>
<script>
    $(document).ready(function() {
        $('.sendForm').on('click', function() {
            const row = $(this).closest('tr');
            const id = $(this).data('id');
            const depart = row.find('td:eq(0)').text().trim();
            const destination = row.find('td:eq(1)').text().trim();
            const trajet = row.find('td:eq(2)').text().trim();
            const heur_debut_aller = row.find('td:eq(3)').text().trim();
            const heur_fin_aller = row.find('td:eq(4)').text().trim();
            const heur_debut_retour = row.find('td:eq(5)').text().trim();
            const heur_fin_retour = row.find('td:eq(6)').text().trim();
            const etat = row.find('td:eq(8)').text().trim();

            // Ici, vous pouvez utiliser une requête AJAX pour envoyer les données au serveur.
            // Dans cet exemple, nous envoyons simplement les données en utilisant une formulaire.
            $('<form>', {
                method: 'POST',
                action: '{{}}'
            }).append($('<input>', {
                type: 'hidden',
                name: 'id',
                value: id
            })).append($('<input>', {
                type: 'hidden',
                name: 'depart',
                value: depart
            })).append($('<input>', {
                type: 'hidden',
                name: 'destination',
                value: destination
            })).append($('<input>', {
                type: 'hidden',
                name: 'trajet',
                value: trajet
            })).append($('<input>', {
                type: 'hidden',
                name: 'heur_debut_aller',
                value: heur_debut_aller
            })).append($('<input>', {
                type: 'hidden',
                name: 'heur_fin_aller',
                value: heur_fin_aller
            })).append($('<input>', {
                type: 'hidden',
                name: 'heur_debut_retour',
                value: heur_debut_retour
            })).append($('<input>', {
                type: 'hidden',
                name: 'heur_fin_retour',
                value: heur_fin_retour
            })).append($('<input>', {
                type: 'hidden',
                name: 'etat',
                value: etat
            })).appendTo('body').submit();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.editableText').on('click', function(e) {
            if ($(this).find('input').length === 0) { // Vérifie si l'input n'existe pas déjà
                const cell = $(this);
                const row = cell.closest('tr');
                const text = cell.text().trim();
                const input = $('<input>', {
                    class: 'form-control text-xs font-weight-bold mb-0',
                    id: 'example-text-input',
                    type: 'text',
                    value: $('<div>').text(text).html()
                }).css('width', cell.width());

                cell.empty().append(input);
                input.focus();

                input.animate({width: '100%'}, 500);

                input.on('blur keydown', function(e) {
                    if (e.type === 'blur' || e.which === 13) {
                        const text = input.val().trim();
                        cell.text(text);
                        row.addClass('modified');
                    }
                });
            } else {
                e.stopPropagation(); // Empêche la propagation de l'événement de clic lorsque l'input existe déjà
            }
        });


        $('.editableTime').on('click', function(e) {
            if ($(this).find('input').length === 0) { // Vérifie si l'input n'existe pas déjà
                const cell = $(this);
                const row = cell.closest('tr');
                const text = cell.text().trim();
                const input = $('<input>', {
                    class: 'form-control text-xs font-weight-bold mb-0',
                    id: 'example-text-input',
                    type: 'time',
                    value: $('<div>').text(text).html()
                }).css('width', '0px');

                cell.empty().append(input);
                input.focus();

                input.animate({width: '100%'}, 500);

                input.on('blur keydown', function(e) {
                    if (e.type === 'blur' || e.which === 13) {
                        const text = input.val().trim();
                        cell.text(text);
                        row.addClass('modified');
                    }
                });
            } else {
                e.stopPropagation(); // Empêche la propagation de l'événement de clic lorsque l'input existe déjà
            }
        });


        $('.editableSelect').on('click', function() {
            const cell = $(this);
            if (cell.find('select').length > 0) {
                return;
            }
            const row = cell.closest('tr');
            const text = cell.text().trim();
            const select = $('<select>', {
                class: 'form-select form-select-sm font-weight-bold',
                id: 'example-select-input',
            });
            const options = ['retard', 'normal', 'en panne'];
            options.forEach(function(option) {
                const optionElem = $('<option>', {
                    value: option,
                    text: option,
                });
                select.append(optionElem);
            });

            select.css({
                width: '100%',
                marginTop: '5px'
            });

            cell.empty().append(select);
            select.val(text);
            select.focus();

            select.on('blur', function() {
                const text = select.val().trim();
                cell.text(text);
                row.addClass('modified');
            });
        });







    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
