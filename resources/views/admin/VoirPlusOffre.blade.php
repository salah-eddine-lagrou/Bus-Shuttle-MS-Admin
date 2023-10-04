@extends('baseAdmin')
@section('content') 
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
-->  <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ffdf620d94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<link rel="icon" type="/image/png" href="/img/favicon.png">
 
 
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Infos Subscription </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Infos Subscription </h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="{{route('ListesOffres')}}">Offers Lists</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
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
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                2 days
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
@php
      
        $entreprise = DB::table('entreprises')
            ->where('id', $offre->id_entreprise)
            ->first();
            $created_at = \Carbon\Carbon::parse($offre->created_at);
        
   
            
            
     

         
            
            
        
            
    @endphp
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
       
        <!-- End Navbar --> 
        @php
            $imagePath1 = asset('../img/back.jpeg');
        @endphp
        <div class="container-fluid">
            <div class="min-height-200 border-radius-xl mt-4"
                style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2); background-image: url('{{ $imagePath1 }}'); background-position-y: 50%; background-size: cover; padding-top: 15px; padding-bottom: 15px;">
                <div class="w-100 text-end">
                    
                </div>
                <div class="container-fluid content-overlay" style="backdrop-filter: none !important;">

                    <div class="row">
                        <div class="col-md-6 my-auto text-center">
                            <div class="card card-body blur shadow-blur mx-4 overflow-hidden h-100">
                                <h4 for="" class="border-0 ps-0 pt-0 text-sm"> {{ $offre->titre }}
                                 </h4>
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <div class="card card-body blur shadow-blur mx-4 overflow-hidden h-100">
                                <div class="row gx-4 text-center">
                                    <div class="col-auto">
                                        <div class="avatar avatar-xl position-relative">
                                            <img src="{{ asset('/img/society.jpg') }}"
                                                alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                                        </div>
                                    </div>
                                    <div class="col-auto my-auto">
                                        <div class="h-100">
                                            <h3 class="mb-1">
                                                {{ $entreprise->nom }}
                                            </h3>
                                            <p class="mb-0 font-weight-bold text-sm">
                                                {{ $entreprise->secteur }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Content goes here -->
            {{-- <span class="mask bg-gradient-primary opacity-6"></span> --}}


        </div>





        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4" style="width: 100%">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <h4 class="mb-0 border text-center"
                                    style="font-family: Georgia, 'Times New Roman', Times, serif">Informations d'offre
                                    d'abonnement</h4>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-div">
                                        <hr class="horizontal gray-light my-4">
                                        <div class="card-body px-4 py-2 mt-4">
                                            <div class="mb-4">
                                                <h5 class="text-gradient text-dark mb-3">{{ $offre->titre }}</h5>
                                                <hr class="horizontal gray-light my-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="text-sm">
                                                            <strong>Date de début de l'offre:</strong>
                                                        </p>
                                                        <p class="border-top border-bottom py-2 text-sm">
                                                            {{ $offre->dateFinOffre }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="text-sm">
                                                            <strong>Date de fin de l'offre:</strong>
                                                        </p>
                                                        <p class="border-top border-bottom py-2 text-sm">
                                                            {{ $created_at->format('Y-m-d') }}
                                                        </p>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                            <div class="mt-4 py-2 text-center">
                                                <img src="{{ asset('/autocars/howitworks_compare.png') }}"
                                                    alt="" style="max-width: 100%; height: auto;">

                                            </div>
                                            
                                    </div>
                                </div>
                                </div>               

                                <div class="col-md-6">
                                  <video
                                                                src="/autocars/Blue Pink Abstract Gradient Animation Podcast Instagram Post.mp4"
                                                                autoplay loop muted playsinline
                                                                style="max-width: 100%; height: auto;"></video>
                                                        </div>
                                  
                                 <p class="mt-4 text-sm">
                                                    <strong>Description de l'offre:</strong>
                                                </p>
                                                <p class="border rounded p-3 text-sm">
                                                    {{ $offre->description }}
                                                </p>
                                        </div>               
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 w-100">
                                    <div class="custom-div">
                                        <hr class="horizontal gray-light my-4">


                                        <div class="card-body px-4 py-2 mt-4">
                                            <div class="mb-4">
                                                <hr class="horizontal gray-light my-4">

                                                <div class="row">
                                                <div class="col-12">
                                                    <div class="card mb-4">
                                                        <div class="card-body p-3">
                                                        <h5 class="text-dark text-dark mb-3">Abonnements</h5>

                                                                <div class="row">
                                                                @foreach($abonnements as $abonnement) 
                                                                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain shadow-xl  border-radius-xl">
<div class="position-relative">
<a class="d-block  border-radius-xl">
<img src="{{ asset('/img/bus-offre.png') }}"
                                                    alt="" style="max-width: 80%; height: auto; position:center;">
</a>
</div>
<div class="card-body px-1 pb-0">
<p class="text-gradient text-dark mb-2 text-sm">Subscription #{{$abonnement->id}}</p>
<a href="javascript:;">
<h5>
{{$abonnement->nom}}
</h5>
</a>
<p style=" overflow: hidden; height:6.5rem;">{{$abonnement->description}} </p>
</p>
<div class="d-flex align-items-center justify-content-between"> 
    <form method="get" action="{{ route('plusInfos', ['id' => $abonnement->id]) }}">                                                                        
    <button type="submit" class="btn btn-outline-primary btn-sm mb-0">View Details</button>
    </form>
<div class="avatar-group mt-2">
<br>
</div>
</div>
</div>
</div>
</div>
@endforeach

                                                </div>

                                            </div>
                                        </div>

                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
    <div class="fixed-plugin ">
        <div class="augmenterWidth card shadow-lg overflow-auto">


        </div>
    </div>


    <!--   Core JS Files   -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>

    

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
@endsection