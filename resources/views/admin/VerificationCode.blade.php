@extends('baseAdmin')
@section('content') 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Verification</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Verification QR Code</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                       </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">LogOut</span>
                        </a>
                    </li>
                   
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
  </nav>
    <!-- End Navbar -->
    
    <!--part 1-->
<!--Part 2-->

   <!-- End Navbar -->   <section class="pt-lg-7 pt-5">

  <div class="container">
  <div class="row">
  <div class="col-lg-5 col-md-5 order-2 order-md-1 order-lg-1">
        
      <div class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-1 d-none d-md-block d-lg-block d-xl-block h-75">
    
      <div class="bg-gradient-primary w-100 h-100 border-radius-xl position-absolute d-lg-block d-none mb-5">
      <h3 class="text-white text-center  "> Scan QR Code Here </h3></div>
      <video id="preview" width="100%" class="w-100 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">  </video>
    </div>
      </div>
  <div class="col-lg-6 col-md-5 ms-auto order-1 order-md-1 order-lg-2">
   <div class="card h-80">
    <div class="card-header pb-0 p-3">
      <div class="row">
        
        <div class="col-6 text-center">
        </div>
        </div>
        </div>
        <div class="card-body p-2 pb-0">
        <h3 style="display: block;" id="H3"  class=" text-center">Verification</h3>
        <h3 style="display: none;" id="H31" class="btn bg-gradient-success w-auto me-1 mb-0 text-center">Client Existed</h3>
        <h3 style="display: none;" id="H32"  class="btn bg-gradient-danger w-auto me-1 mb-0 text-center">Client Not Existed</h3>
            <video style="display: block;" id="myButton"
                                                                src="/autocars/qr-code-scanner.mp4"
                                                                autoplay loop muted playsinline
                                                                style="max-width: 80%; height: auto;"></video>
           
            <video style="display: none;" id="myButton1"
                                                                src="/autocars/qr-code-scan-successful.mp4"
                                                                autoplay loop muted playsinline
                                                                style="max-width: 100%; height: auto;"></video>
            <video style="display: none;" id="myButton2"
                                                                src="/autocars/qr-code-scan-failed.mp4"
                                                                autoplay loop muted playsinline
                                                                style="max-width: 100%; height: auto;"></video>
     </div>
  </div>
</div>
    </div>
    </div>
        </div>
      </div>
    </div>  </div>
    </div>
        </div>
      </div>
    </div>
</section>

    </main>



<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
            <label>SCAN QR CODE</label>
            <input type="text" name="text" id="text" readonly placeholder="scan qrcode" class="form-control">

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  
 <script src="../../assets/js/plugins/chartjs.min.js"></script>
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


  <script src="../assets/js/plugins/chartjs.min.js"></script>
 
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
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  
<script>
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            alert('No cameras found');
        }
    }).catch(function (e) {
        console.error(e);
    });
    var myArray = [];
    
    @foreach($coupons as $coupon)
        myArray.push('{{ $coupon->code }}');
    @endforeach
 
    scanner.addListener('scan', function (c) {
        document.getElementById('text').value = c;
        for (var i = 0; i < myArray.length; i++) {
        if (myArray[i] === c) {
            document.getElementById('myButton').style.display = 'none';
            document.getElementById('myButton1').style.display = 'block';
            document.getElementById('H31').style.display = 'block';
            document.getElementById('H32').style.display = 'none';
             document.getElementById('myButton2').style.display = 'none';

              } else {
                // Hide the butto
                document.getElementById('myButton').style.display = 'none';
                document.getElementById('myButton1').style.display = 'none';
                document.getElementById('myButton2').style.display = 'block';
            document.getElementById('H31').style.display = 'none';
            document.getElementById('H32').style.display = 'block';

             }
 
     }
    }); 
 

</script> 



   @endsection













