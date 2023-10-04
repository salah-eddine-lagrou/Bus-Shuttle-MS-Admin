@extends('baseAdmin')

@section('content') 

<style>
        @media (min-width: 992px) {
            /* Styles for desktop views */
            #sidenav-main {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 250px; /* Adjust the width as needed */
                overflow-y: auto;
            }
        }

        .my-heading {
            margin: 10px;
            padding: 10px;
            padding-inline: 90px;
        }

    </style>

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <h6 class="font-weight-bolder mb-0">Exprimer un abonnement</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group" >
                        <form >
                            <div class="input-group" style="width: 400px">
                                <span class="input-group-text text-body">
                                  <button type="submit" class="submit-button" style="border: none">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                <input type="text" class="form-control" placeholder="Chercher par destination">
                            </div>
                        </form>

                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="#">Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa-solid fa-right-from-bracket me-2"></i>
                            <span class="d-sm-inline d-none">Se-deconnecter</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center mx-4">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <i class="fa-solid fa-bus me-3"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-7 mt-4 w-100">
                <div class="card">
                    <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Les commentaires</h5>
                        <a class="afficherAdd btn bg-gradient-primary mt-3 fixed-plugin-button-nav cursor-pointer" href="#">Exprimer par commentaire</a>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <!-- ICI l'affichage des offres -->
                            <div class="rounded shadow p-3 mt-4">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg rounded shadow p-3">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Nom Client</h6>
                                        <span class="mb-2 text-xs">Nom d'abonnement: <span class="text-dark font-weight-bold ms-sm-2">valeur</span></span>
                                        <span class="mb-2 text-xs">type d'abonnement: <span class="text-dark ms-sm-2 font-weight-bold">valeur</span></span>
                                        <span class="mb-2 text-xs">Heur debut aller: <span class="text-dark ms-sm-2 font-weight-bold">..:..</span></span>
                                        <span class="mb-2 text-xs">Heur debut retour: <span class="text-dark ms-sm-2 font-weight-bold">..:..</span></span>
                                        <span class="mb-2 text-xs">Description: <br><span class="text-dark ms-sm-2 font-weight-bold">You cannot put two separate columns inside a single element, as the element is intended to define a single header cell in a table. However, you can use the colspan attribute of the <th> element to merge two or more columns into a single header cell. Here's an example of how you could merge two columns into a single header cell:</span></span>
                                    </div>
                                    <div class="ms-auto text-end w-50">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </li>
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i><span class="text-dark ms-sm-2 font-weight-bold">12</span></button>
                                        <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i><span class="text-dark ms-sm-2 font-weight-bold">2</span></button>
                                        <hr class="horizontal dark">
                                    </div>
                                </div>
                            </div>
                            <div class="rounded shadow p-3 mt-4">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg rounded shadow p-3">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">Nom Client</h6>
                                        <span class="mb-2 text-xs">Nom d'abonnement: <span class="text-dark font-weight-bold ms-sm-2">valeur</span></span>
                                        <span class="mb-2 text-xs">type d'abonnement: <span class="text-dark ms-sm-2 font-weight-bold">valeur</span></span>
                                        <span class="mb-2 text-xs">Heur debut aller: <span class="text-dark ms-sm-2 font-weight-bold">..:..</span></span>
                                        <span class="mb-2 text-xs">Heur debut retour: <span class="text-dark ms-sm-2 font-weight-bold">..:..</span></span>
                                        <span class="mb-2 text-xs">Description: <br><span class="text-dark ms-sm-2 font-weight-bold">You cannot put two separate columns inside a single element, as the element is intended to define a single header cell in a table. However, you can use the colspan attribute of the <th> element to merge two or more columns into a single header cell. Here's an example of how you could merge two columns into a single header cell:</span></span>
                                    </div>
                                    <div class="ms-auto text-end w-50">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </li>
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i><span class="text-dark ms-sm-2 font-weight-bold">12</span></button>
                                        <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i><span class="text-dark ms-sm-2 font-weight-bold">2</span></button>
                                        <hr class="horizontal dark">
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="fixed-plugin ">
    <div class="augmenterWidth card shadow-lg overflow-auto" >
        <div class="card-header pb-0 pt-3 " >
            <div class="mt-3">
                <h6 class="mb-0" style="display: inline-block; margin-right: 10px;">Navbar Fixed</h6>
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button" style="display: inline-block; float: right;">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <div class="form-check form-switch ps-0">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>

            <hr class="horizontal dark my-sm-4">
            <div class="d-flex align-items-center justify-content-center">
                <div>
                    <h4 class="mt-3 mb-0 text-shadow font-weight-bold border-bottom text-center my-heading" style="border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">Formulaire d'exprimer ves besoins</h4>
                    <hr class="horizontal dark my-sm-4">
                </div>
            </div>
            <br>
            <form action="">
                <div class="card-body pt-4 p-3" style="border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                    <div class="form-group">
                        <h5 class="mt-3 mb-0">Abonnement : </h5>
                        <hr class="horizontal dark my-sm-4">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nom d'abonnement</label>
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                    <!-- Ici TypeAbonnement affichage de donnees -->
                    <div class="form-group">
                        <label for="example-select-input" class="form-control-label">Type d'abonnement</label>
                        <select class="form-control" id="example-select-input">
                            <option value="">Sélectionnez un type</option>
                            <option value="abonnement1">Abonnement 1</option>
                            <option value="abonnement2">Abonnement 2</option>
                            <option value="abonnement3">Abonnement 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-search-input" class="form-control-label">Description</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="decrire les politiques et les règles de l'abonnement"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Place départ</label>
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Destination</label>
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-week-input" class="form-control-label">Heur départ d'aller</label>
                        <input class="form-control" type="time" id="example-time-input">
                    </div>
                    <div class="form-group">
                        <label for="example-week-input" class="form-control-label">Heur départ de retour</label>
                        <input class="form-control" type="time" id="example-time-input">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <button class="btn bg-gradient-dark w-100" type="submit">Ajouter commentaire</button>
                <button class="btn btn-outline-dark w-100" type="button">Annuler l'opération</button>
            </form>
        </div>


    </div>
</div>
<!--   Core JS Files   -->
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/smooth-scrollbar.min.js"></script>
<script src="js/plugins/chartjs.min.js"></script>

<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Sales",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#fff",
                data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 500,
                        beginAtZero: true,
                        padding: 15,
                        font: {
                            size: 14,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        display: false
                    },
                },
            },
        },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c9f",
                borderWidth: 3,
                backgroundColor: gradientStroke1,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            },
                {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
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
<script>
    const afficherAddLink = document.querySelector('a.afficherAdd');
    const closeAddLink = document.querySelector('.closer');

    afficherAddLink.addEventListener('click', function(event) {
        event.preventDefault();

        const cardDiv = document.querySelector('div.augmenterWidth');
        cardDiv.style.width = '700px';
    });

    document.addEventListener('click', function(event) {
        if (event.target.tagName.toLowerCase() != 'a'){
            const cardDiv = document.querySelector('div.augmenterWidth');
            if (!event.target.closest('div.augmenterWidth')) {
                cardDiv.style.width = '200px';
            }
        }
    });
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="js/soft-ui-dashboard.min.js?v=1.0.7"></script>
@endsection