@extends('baseAdmin')

@section('content') 
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Subscriptions</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Subscriptions</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <form class="d-flex ms-auto" method="get" action="{{route('ViewAllAbonnements')}}">
                            <input type="hidden" name="_token" value="wcjh4hMxh0tYOeTcSiG2ezm1G9LVXTG3bNhLqUxJ">    
                        <button class="input-group-text text-body" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
                         <input type="search" name="search" id="search" class="form-control" placeholder=" Type here...">
                        </form>
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="{{route('EntreprisesProfiles')}}">Profils Societies</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">LogOut</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
  </nav>
<!--PART 1-->


<!--PART 2-->
    
<nav class="container-fluid py-4">
<div class="row">
    <header class=" py-5" style=" background-image: linear-gradient(to right in HSL, white, purple);">
            <div class="container px-6 px-lg-6 my-6" style=" object-fit:cover ;box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);  background-image: url('img/report.jpg');background-position-y: 80%; background-size: cover; padding-top: 50px; padding-bottom: 50px;">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder text-end ">All Reports</h1>
                </div>
            </div>
</nav>
</div>
</div>

<div class="container">

        
        
       
   </div>
<div class="row">
        <div class="row mt-4">
        <div class="col-lg-16">
         <div class="card z-index-2">
           <div class="card-header pb-0">
            
             <h3 class="ms-2 mt-4 mb-0 text-center">Clients Reports <br> </h3>
               
             </p>
           </div>
           <div class="card-body p-1">
             <div class="chart">
               <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
             </div>
           </div>
         </div>
              
        </div> 
        </div>

    <div class="row mt-6">
        @foreach ($repports as $repport)
        @foreach ($entreprises as $entreprise)
        @if ($entreprise->id == $repport->id_entreprise)
            <div class="col-lg-6 col-md-8 ms-md-auto mt-4">
                <div class="card bg-gradient-primary">
                    <div class="card-body">
                        <div class="author align-items-center">
                            <img src="img/repport.png" alt="..." class="avatar shadow">
                            <div class="name ps-2">
                                <span class="text-white">About : {{$entreprise->nom}}</span>
                                <div class="stats">
                                    <small class="text-white">Posted on : {{$repport->created_at}} </small>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-white">  Subject : "{{$repport->subject}}"</p></h5>
                        <p class="mt-4 text-white">"{{$repport->description}}."</p>
                    
                 
                    <a href="{{route('deleteReport',['id' => $repport->id])}}" class="btn btn-outline-white text-xs  " data-toggle="tooltip" data-original-title="Edit user">
                                             Delete
                                        </a> 
                  </div>
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

</div>
</div>
</main>

<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">hello</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3">
                <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="form-check form-switch ps-0">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/smooth-scrollbar.min.js"></script>
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
<style>
        .ticket-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

        .ticket-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            }

        .ticket-icon {
            font-size: 24px;
            color: #333;
            }

        .ticket-title {
            margin: 0;
            }

        .ticket-info {
            margin-bottom: 5px;
            }

        .ticket-info-icon {
            margin-right: 5px;
            }

            .ticket-footer {
            text-align: right;
            }

            .ticket-footer .btn-primary {
            border-radius: 20px;
            }
            .ticket-img {
                width: 450px;
                height: 150px;
                border-radius: 5px;
                margin-bottom: 10px;
                object-position: center;
                border-radius: 5px;
                }

        </style>








<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  
 <script>
      var companies =[];
      var clientNumbers=[];
      var reportNumbers=[];
      var commentNumbers=[];
      var reportNumbers=[];

                
                @foreach ($ReportEntreprise as $CE)
                    @foreach($entreprises as $entreprise)
                        @if($entreprise->id == $CE->id_entreprise && $CE->nbReports > 0) 
                            companies.push("{{$entreprise->nom}}");
                            reportNumbers.push({{ $CE->nbReports }});
                        @endif
                    @endforeach
                @endforeach
     
    
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
        labels:companies,
        datasets: [
          {
            label: "Reports",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: reportNumbers,
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
<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/plugins/perfect-scrollbar.min.js"></script>
<script src="js/plugins/smooth-scrollbar.min.js"></script>
@endsection











