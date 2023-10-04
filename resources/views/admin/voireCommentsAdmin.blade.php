@extends('baseAdmin')
@section('content') 
        
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl custom-navbar"
            id="navbarBlur" navbar-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <a href="{{ route('consulterCommentaires') }}">
                        <h6 class="font-weight-bolder mb-0">Voir les Commentaires</h6>
                    </a>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <form action="{{ route('consulterCommentaires') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3">
                                        <i class="fas fa-search text-primary" style="font-size: 14px;"></i>
                                    </button>

                                    <div class="input-group shadow">
                                        <div class="input-group-append">
                                            <input type="search" class="form-control" name="search"
                                                placeholder="Chercher .."
                                                style="width: 400px; border-radius: 4px 0 0 4px !important; border: none !important;">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf 
                       <button type=" Submit" class="btn btn-primary btn-sm mb-0 me-3" target="_blank" ><i class="fa fa-user me-sm-1 " aria-hidden="true"></i> LogOut</a>
                    </form>
                    </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @php
            $type_abonnements = DB::table('type_abonnements')->get();
        @endphp
        <script>
            @if (session('success'))
                alert("{{ session('success') }}");
                // ici
            @endif

            @if ($errors->any())
                var errorMessage = "Errors:\n";
                @foreach ($errors->all() as $error)
                    errorMessage += "{{ $error }}\n";
                @endforeach
                alert(errorMessage);
            @endif
        </script>
        @php
            $imagePath1 = asset('');
        @endphp
        <div class="container-fluid py-4">
      
       <div class="row mt-4">
            
            <div class="col-lg-8 mb-lg-0 mb-4 ">
                <div class="card h-100 p-3" style=" background-image: linear-gradient(     to right in HSL,    white, purple);" >
                    <div class="overflow-hidden position-center border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
                    <div id="linechart" class="text-center"style= " width: 700px; height:400px"></div>

                </div>   
                </div>
            </div>
            <div class="col-lg-4 
            ">
                          <div class="card h-100">
                    <div class="card-header pb-0">
                    
                    <p class="text-sm">
                    <i class="fa fa-arrow-up text-success" aria-hidden="true"> Comments Most Liked</i>
                    </p>
                    </div>
                    <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                                             
                    @foreach ($dataComment as $comment)
                        @foreach ($clientComments as $client)
                        @if($client->id ==  $comment->id_client )

                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-html5 text-danger text-gradient"></i>
                            </span>
                        
                            <span class="timeline-step">
                                <i class="ni ni-money-coins text-dark text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $client->nom }}</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $comment->created_at }}</p>
                                
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @endforeach
                    </div>
                    </div>
                    </div>  
                
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-7 mt-4 w-100 rounded">

                    <div class="card shadow-blur"
                        style="background-image: url('{{ $imagePath1 }}'); background-size: cover;">
                        <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center"
                            style="background-image: url('{{ $imagePath1 }}'); background-size: cover;">
                            <h5 class="mb-0">Les commentaires</h5>
                        </div>
                        @if ($exprimerAbonnement === null)
                            <div class="text-center">
                                <h2 style="color: #999; font-style: italic;">Aucun résultat pour ce nom</h2>
                            </div>
                        @else
                            <ul class="list-group">
                                @foreach ($exprimerAbonnement as $comment)
                                    @php
                                        $client = DB::table('clients')
                                            ->where('id', $comment->id_client)
                                             ->first();
                                        $user = auth()->user();
                                        $typeAbonnement = DB::table('type_abonnements')
                                            ->where('id', $comment->id_type_abonnement)
                                            ->first();
                                    @endphp
                                    <div
                                        class="rounded shadow p-3 mt-4 card card-body blur shadow-blur mx-4 overflow-hidden h-100">
                                        <li class="p-4 mb-2 bg-gray-100 border-radius-lg rounded shadow p-3">
                                            <div class="row">
                                                <div class="col-md-6 text-start w-25 border-bottom">
                                                    <h6 class="mb-3 text-sm"><i class="fas fa-user-circle pe-2"
                                                            style="font-size: 25px"></i>{{ $client->nom }}</h6>
                                                </div>


                                            </div>

                                            <div>
                                                <div class=" p-3">
                                                    <p class="text-dark font-weight-bold">{{ $comment->description }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr class="horizontal dark text-start">
                                                <div class="col-md-6 text-end">
                                                    @if ($comment->nom_abonnement !== null)
                                                        <div class="mb-2 text-xs"><span
                                                                class="text-dark font-weight-bold">
                                                                {{ $comment->nom_abonnement }}
                                                            </span></div>
                                                    @endif

                                                    @if ($comment->heur_debut_retour !== null)
                                                        <div class="mb-2 text-xs"><span
                                                                class="text-dark font-weight-bold">
                                                                {{ $comment->heur_debut_retour }}
                                                            </span></div>
                                                    @endif

                                                </div>
                                                <div class="col-md-6">
                                                    @if ($comment->id_type_abonnement !== null)
                                                        <div class="mb-2 text-xs"><span
                                                                class="text-dark font-weight-bold">
                                                                {{ $typeAbonnement->nom }}
                                                            </span></div>
                                                    @endif

                                                    @if ($comment->heur_debut_aller !== null)
                                                        <div class="mb-2 text-xs"><span
                                                                class="text-dark font-weight-bold">
                                                                {{ $comment->heur_debut_alle }}
                                                            </span></div>
                                                    @endif

                                                </div>
                                                <hr class="horizontal dark text-start">
                                            </div>
                                            <a href="{{route('deleteComment',['id' => $comment->id])}}" class="btn btn-danger text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                             Delete
                                        </a>
                                        </li>
                                        <div class="row">
                                            <div
                                                class="button-container d-flex justify-content-center align-items-center button-container">



                                                <button class="btn">
                                                    <i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>
                                                    <span class="text-dark ms-2 font-weight-bold">
                                                        @if ($comment->likes === null)
                                                            0
                                                        @else
                                                            {{ $comment->likes }}
                                                        @endif
                                                    </span>
                                                </button>

                                                <button class="btn">
                                                    <i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>
                                                    <span class="text-dark ms-2 font-weight-bold">
                                                        @if ($comment->dislikes === null)
                                                            0
                                                        @else
                                                            {{ $comment->dislikes }}
                                                        @endif
                                                    </span>
                                                </button> 
                                                








                                            </div>
                                            <hr class="horizontal dark">
                                        </div>
                                    </div>
                                @endforeach

                            </ul>
                        @endif

                    </div>
                </div>
            </div>

        </div>

        @php
            $imagePath = asset('images/pexels-lumn-399161.jpg');
        @endphp


    </main>

    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                            Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .like-btn.clicked,
        .dislike-btn.clicked {
            animation: pulse 0.5s;
        }

        .like-btn.clicked {
            background-color: #28a745;
            color: #ffffff;
            transition: background-color 0.3s;
        }

        .dislike-btn.clicked {
            background-color: #dc3545;
            color: #ffffff;
            transition: background-color 0.3s;
        }


        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .textarea-container {
            position: relative;
            width: 700px;
            height: 250px;
        }

        .textarea-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('{{ $imagePath }}');
            background-size: cover;
            filter: blur(8px);
            z-index: -1;
        }

        .textarea-container textarea {
            background-color: transparent;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            color: #000;
            padding: 10px;
            width: 100%;
            height: 100%;
        }
    </style>
    <script>
        const textarea = document.querySelector('textarea');
        const charCount = document.querySelector('#char-count');

        textarea.addEventListener('input', function() {
            const remainingChars = 500 - textarea.value.length;
            charCount.innerText = remainingChars;

            if (remainingChars < 0) {
                charCount.classList.add('text-danger');
                textarea.classList.add('is-invalid');
                navigator.vibrate(100); // vibrate for 100ms
            } else {
                charCount.classList.remove('text-danger');
                textarea.classList.remove('is-invalid');
            }
        });
    </script>
    <script>
        // Get all button containers
        const buttonContainers = document.querySelectorAll('.button-container');

        buttonContainers.forEach(buttonContainer => {
            const commentId = buttonContainer.getAttribute('data-commentId');
            const likeButton = document.getElementById(`like-btn-${commentId}`);
            const dislikeButton = document.getElementById(`dislike-btn-${commentId}`);
            const likeCount = document.getElementById(`like-count-${commentId}`);
            const dislikeCount = document.getElementById(`dislike-count-${commentId}`);
            const likesInput = document.getElementById(`inlikes-${commentId}`);
            const dislikesInput = document.getElementById(`indislikes-${commentId}`);

            // Initialize the hidden input values if they are empty or NaN
            if (likesInput.value === '' || isNaN(parseInt(likesInput.value))) {
                likesInput.value = '0';
            }

            if (dislikesInput.value === '' || isNaN(parseInt(dislikesInput.value))) {
                dislikesInput.value = '0';
            }

            likeButton.addEventListener('click', () => {
                if (likeButton.classList.contains('active')) {
                    let currentLikes = parseInt(likeCount.textContent);
                    currentLikes--;
                    likeCount.textContent = currentLikes;
                    likeButton.classList.remove('active');
                    likesInput.value = decrementCount(parseInt(likesInput.value));
                } else {
                    let currentLikes = parseInt(likeCount.textContent);
                    currentLikes++;
                    likeCount.textContent = currentLikes;
                    likeButton.classList.add('active');
                    likesInput.value = incrementCount(parseInt(likesInput.value));

                    if (dislikeButton.classList.contains('active')) {
                        let currentDislikes = parseInt(dislikeCount.textContent);
                        currentDislikes--;
                        dislikeCount.textContent = currentDislikes;
                        dislikeButton.classList.remove('active');
                        dislikesInput.value = decrementCount(parseInt(dislikesInput.value));
                    }
                }
            });

            dislikeButton.addEventListener('click', () => {
                if (dislikeButton.classList.contains('active')) {
                    let currentDislikes = parseInt(dislikeCount.textContent);
                    currentDislikes--;
                    dislikeCount.textContent = currentDislikes;
                    dislikeButton.classList.remove('active');
                    dislikesInput.value = decrementCount(parseInt(dislikesInput.value));
                } else {
                    let currentDislikes = parseInt(dislikeCount.textContent);
                    currentDislikes++;
                    dislikeCount.textContent = currentDislikes;
                    dislikeButton.classList.add('active');
                    dislikesInput.value = incrementCount(parseInt(dislikesInput.value));

                    if (likeButton.classList.contains('active')) {
                        let currentLikes = parseInt(likeCount.textContent);
                        currentLikes--;
                        likeCount.textContent = currentLikes;
                        likeButton.classList.remove('active');
                        likesInput.value = decrementCount(parseInt(likesInput.value));
                    }
                }
            });
        });

        function toggleButton1(button) {
            button.classList.toggle('sendBtn');
            button.classList.toggle('text-strat');
            button.style.backgroundColor = '#87CEFA'; // Light blue color
            button.style.color = '#FFFFFF'; // White color
            button.type = 'submit';
        }

        function toggleButton2(button) {
            button.classList.toggle('myBtn2');
            button.classList.toggle('text-strat');
            button.style.backgroundColor = 'rgb(196, 6, 222)'; // Light blue color
            button.style.color = '#FFFFFF'; // White color
            button.type = 'submit';
        }

        function toggleButton(button) {

            var div = button.closest('.button-container');
            var commentId = div.dataset.commentid;

            var buttons = div.querySelectorAll('.like-btn, .dislike-btn');

            buttons.forEach(function(btn) {
                if (btn !== button) {
                    btn.classList.remove('clicked');
                }
            });

            button.classList.toggle('clicked');

            var likeCount = div.querySelector('.like-count');
            var dislikeCount = div.querySelector('.dislike-count');

            var likeValue = parseInt(likeCount.textContent);
            var dislikeValue = parseInt(dislikeCount.textContent);

            if (button.classList.contains('like-btn')) {
                if (button.classList.contains('clicked')) {
                    likeCount.textContent = incrementCount(likeValue);
                    if (dislikeValue > 0) {
                        dislikeCount.textContent = decrementCount(dislikeValue);
                    }
                } else {
                    likeCount.textContent = decrementCount(likeValue);
                }
            } else if (button.classList.contains('dislike-btn')) {
                if (button.classList.contains('clicked')) {
                    dislikeCount.textContent = incrementCount(dislikeValue);
                    if (likeValue > 0) {
                        likeCount.textContent = decrementCount(likeValue);
                    }
                } else {
                    dislikeCount.textContent = decrementCount(dislikeValue);
                }
            }
        }


        function incrementCount(value) {
            return value + 1;
        }

        function decrementCount(value) {
            return Math.max(0, value - 1);
        }
    </script>


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
            if (event.target.tagName.toLowerCase() != 'a') {
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

    
    <!--Statistiques likes / dislikes -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var visitor = <?php echo $visitor; ?>;
      console.log(visitor);
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(visitor);
        var options = {
          title: 'Site Client Likes Line Chart',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('linechart'));
        chart.draw(data, options);
        
      }
    </script>
@endsection
