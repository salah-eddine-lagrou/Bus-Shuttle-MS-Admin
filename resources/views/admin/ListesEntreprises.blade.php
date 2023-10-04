@extends('baseAdmin')

@section('content') 
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Societies</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Societies Table</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <form class="d-flex ms-auto" method="get" action="{{route('ListesEntreprises')}}">
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf 
                       <button type=" Submit" class="btn btn-primary btn-sm mb-0 me-3" target="_blank" ><i class="fa fa-user me-sm-1 " aria-hidden="true"></i> LogOut</a>
                    </form>
                    </li>
                                    </ul>
            </div>
        </div>
  </nav>
<!--PART 1-->
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Date & Time</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{NOW()}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">NUMBER OF SOCIETIES</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        50
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">NUMBER OF CLIENTS</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        162
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold" >NUMBER OF SUBSCRIBES</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        30
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>
</div>

<!--PART 2-->

<div class="container-fluid py-4">
    <div class="row mt-4">
            
            <div class="col-lg-14 mb-lg-0 mb-4 ">
                <div class="card h-100 p-3" style=" background-image: linear-gradient(     to right in HSL,    white, purple);">
                    <div class="overflow-hidden position-center border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
                    <div id="containerEntreprises" class="text-center" ><div style="position: relative;"><div dir="ltr" style="position: relative; width: 800px; height: 450px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="800" height="450" aria-label="A chart." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_0"><clipPath id="_ABSTRACT_RENDERER_ID_1"><rect x="144" y="86" width="513" height="278"></rect></clipPath></defs><rect x="0" y="0" width="800" height="450" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="144" y="60.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Site Client Likes Line Chart</text><rect x="144" y="49" width="513" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><g><rect x="315" y="412" width="170" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="315" y="412" width="66" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="348" y="423.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Likes</text></g><path d="M315,419L343,419" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="404" y="412" width="81" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="437" y="423.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Dislikes</text></g><path d="M404,419L432,419" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><rect x="144" y="86" width="513" height="278" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://127.0.0.1:8000/consulterCommentaires#_ABSTRACT_RENDERER_ID_1)"><g><rect x="144" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="246" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="349" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="451" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="554" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="656" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="195" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="298" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="400" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="502" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="605" y="86" width="1" height="278" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="144" y="363" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="308" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="252" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="197" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="141" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="86" width="513" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="144" y="335" width="513" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="144" y="280" width="513" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="144" y="225" width="513" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="144" y="169" width="513" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="144" y="114" width="513" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect></g><g><rect x="144" y="363" width="513" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M144.5,357.96C144.5,357.96,212.76666670080158,315.4866666666648,246.89999999999418,274.86C281.0333332991868,234.2333333333518,315.16666670079576,105.88999999999999,349.29999999998836,114.19999999999999C383.43333329918096,122.50999999999999,417.56666670081904,292.4033333333518,451.70000000001164,324.72C485.83333329920424,357.0366666666648,519.9666667008132,335.8,554.1000000000058,308.1C588.2333332991984,280.4,656.5,158.52,656.5,158.52" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path><path d="M144.5,208.38C144.5,208.38,212.76666670080158,249.93,246.89999999999418,252.7C281.0333332991868,255.47,315.16666670079576,216.69,349.29999999998836,225C383.43333329918096,233.31,417.56666670081904,289.6333333333518,451.70000000001164,302.56C485.83333329920424,315.4866666666648,519.9666667008132,311.79333333333517,554.1000000000058,302.56C588.2333332991984,293.3266666666482,656.5,247.16,656.5,247.16" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="144.5" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,018</text></g><g><text text-anchor="middle" x="246.9" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,019</text></g><g><text text-anchor="middle" x="349.3" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,020</text></g><g><text text-anchor="middle" x="451.7" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,021</text></g><g><text text-anchor="middle" x="554.1" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,022</text></g><g><text text-anchor="middle" x="656.5" y="384.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,023</text></g><g><text text-anchor="end" x="130" y="368.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="130" y="313" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text></g><g><text text-anchor="end" x="130" y="257.59999999999997" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text></g><g><text text-anchor="end" x="130" y="202.20000000000002" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">30</text></g><g><text text-anchor="end" x="130" y="146.8" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">40</text></g><g><text text-anchor="end" x="130" y="91.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">50</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Year</th><th>Likes</th><th>Dislikes</th></tr></thead><tbody><tr><td>2,018</td><td>1</td><td>28</td></tr><tr><td>2,019</td><td>16</td><td>20</td></tr><tr><td>2,020</td><td>45</td><td>25</td></tr><tr><td>2,021</td><td>7</td><td>11</td></tr><tr><td>2,022</td><td>10</td><td>11</td></tr><tr><td>2,023</td><td>37</td><td>21</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 460px; left: 810px; white-space: nowrap; font-family: Arial; font-size: 14px;">Dislikes</div><div></div></div></div>

                </div>   
                </div>
            </div>
            </div>
           
    
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                   
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table">
                        <div class="card-header pb-0 p-3">
                      
                  <div class="row">

                  <h6 class="mb-0">Societies List</h6> <table class="table align-items-center mb-0">

                    <div class="col-8 d-flex align-items-center">
                                <thead>
                                <tr>
                                <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Society</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Web site</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Sector</th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                  

                                </tr>
                                </thead>
                                {{$entreprises}}
                                <tbody>
                                @foreach($entreprises as $entreprise)

                                <tr>
                                <div class="row">
<div id="offcanvas{{$entreprise->id}}" class="offcanvas offcanvas-end offcanvas-col-8 bg-white">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Update Society Profil:</h5>
    </div>
    <div class="offcanvas-body mt-2">
      <div class="d-flex justify-content-center">
        <div class="avatar avatar-xxl">
          <img src="{{ asset('/img/update.png') }}" alt="profile_image" class="w-500 col-6 border-radius-lg shadow-sm">
        </div>
      </div>

      <form role="form" id="contact-form" method="POST" action="{{route('updateEntreprise', $entreprise->id  ) }}" autocomplete="off">
       
            @csrf
        <div class="card-body">
          <div class="row">
            <input type="hidden" id="id" name="id" value="{{$entreprise->id}}">
             <div class="col-md-6">
              <label>Name</label>
              <div class="input-group mb-4">
                <input id="nom" name="nom" class="form-control" value="{{$entreprise->nom}}" aria-label="First Name..." type="text">
              </div>
            </div>
            <div class="col-md-6 ps-2">
              <label>Address</label>
              <div class="input-group">
                <input id="adresse" name="adresse"type="text" class="form-control" value="{{$entreprise->adresse}}" aria-label="">
              </div>
            </div>
            <div class="col-md-6">
              <label>Phone</label>
              <div class="input-group mb-4">
                <input id="telephone" name="telephone" class="form-control" value="{{$entreprise->telephone}}"   type="number">
              </div>
            </div>
            <div class="col-md-6 ps-2">
              <label>Sector</label>
              <div class="input-group">
                <input id="secteur" name="secteur" type="text" class="form-control" value="{{$entreprise->secteur}}" >
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label>Email </label>
            <div class="input-group">
              <input id="email" name="email" type="email" class="form-control" value="{{$entreprise->email}}">
            </div>
          </div> 
          <div class="mb-4">
            <label>Web Site </label>
            <div class="input-group">
              <input id="siteWeb" name="siteWeb" type="text" class="form-control"  value="{{$entreprise->siteWeb}}">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn bg-gradient-dark w-100">Validate</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{$entreprise->id}}</span>
                                    </td>
                                    <td>
                                    <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$entreprise->nom}}</h6>
                                                <p class="text-xs text-secondary mb-0">{{$entreprise->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$entreprise->adresse}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$entreprise->telephone}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$entreprise->siteWeb}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$entreprise->secteur}}</span>
                                    </td>
                                    <td class="align-middle">
                                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas{{$entreprise->id}}" class="btn btn-success text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Update
                                    </a>

                                    <a href="{{route('deleteSociety', $entreprise->id )}}" class="btn btn-danger text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                             Delete
                                        </a>
                                    </td>
                                    
                                </tr>
                                @endforeach

                                </tbody>

                        </table>
                    </div>
                   
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

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var userData = <?php echo json_encode($EntrepriseData)?>;
    Highcharts.chart('containerEntreprises', {
        title: {
            text: ' Societies of the Year '
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',                'October', 'November', 'December']
        },
        yAxis: {
            title: {
                text: 'Number of New Societies'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Societies',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>


@endsection