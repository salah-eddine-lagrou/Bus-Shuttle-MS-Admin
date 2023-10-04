@extends('baseAdmin')

@section('content') 

 <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Societies</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Societies</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                    <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="{{route('ListesEntreprises')}}">Societies Lists</a>
                    </li>
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
    
    <nav class="container-fluid py-4">
<div class="row">
    <header class=" py-5" style=" background-image: linear-gradient(     to right in HSL,    white, purple);">
            <div class="container px-6 px-lg-6 my-6" style="box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);  background-image: url('img/voyage.jpg');background-position-y: 80%; background-size: cover; padding-top: 50px; padding-bottom: 50px;">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder text-end ">All Societies </h1>
                </div>
            </div>
</header></div></nav>
<style>
                .ticket-card {
                    background-color: #fff;
                    box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                    padding: 20px;
                    margin-bottom: 30px;
                }
                .ticket-card h5 {
                    margin-bottom: 20px;
                }
                .ticket-card p {
                    font-size: 1.1rem;
                    margin-bottom: 10px;
                }
                .ticket-card .ticket-details {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    
                }.ticket-card .ticket-img {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: block;
            border-radius: 50%;
            object-fit: cover;
        }

                .ticket-card .ticket-details button {
                    background-color: #6c757d;
                    border: none;
                    color: #fff;
                    padding: 10px 20px;
                    border-radius: 5px;
                }
                .ticket-card .ticket-img {
                    height: 150px;
                    margin-bottom: 20px;
                }
                .left-button {
                    position: absolute;
                    left: 20px; /* Adjust the value to position the button as desired */
                    top: 50%; /* Adjust the value to vertically position the button */
                    transform: translateY(-50%); /* Vertically center the button */
                }

	</style>
        
	<div class="container-fluid py-4">
		
        <div class="row">
        
      
        </div>

        <div class="row">
@foreach ($entreprises as $entreprise)
            <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="ticket-card">
 	
                <img src="autocars/138703-vind_jouw_reis-01.png" alt="Train Image" class="ticket-img">
					<p><strong>Name:</strong>  {{$entreprise->nom}}</p>
					<p><strong>Email:</strong> {{$entreprise->email}}</p>
                    <p><strong>Site-Web:</strong> {{$entreprise->SiteWeb}}</p>
					<p><strong>Phone:</strong>  {{$entreprise->telephone}}</p>
					<p><strong>Address:</strong> {{$entreprise->adresse}} </p>
					<p><strong>Date of creation:</strong> {{$entreprise->created_at}} </p>
					<div class="ticket-details">
                        
                    </div>
				</div>
			</div>
@endforeach
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection










