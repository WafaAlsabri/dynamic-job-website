<!doctype html>
<html lang="en">

<head>


<script src="https://kit.fontawesome.com/0258162a56.js" crossorigin="anonymous"></script>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>clints website</title>
    <style>



.item{height: 273px;
}
.footer {
  background:#dcdee0;
  color:#595b5e;
}
.footer .links ul {
  list-style-type: none;
}
.footer .links li a {
  color: #595b5e;
  transition: color 0.2s;
}
.footer .links li a:hover {
  text-decoration: none;
  color: #4180CB;
}
.footer .about-company i {
  font-size: 25px;
}
.footer .about-company a {
  color: #595b5e;
  transition: color 0.2s;
}
.footer .about-company a:hover {
  color: #4180CB;
}
.footer .location i {
  font-size: 18px;
}
.footer .copyright p {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
          width: 70%;
          margin: auto;
        }
        .big{display: flex;
        flex-direction: row;
   margin: 2em 12em ;}
   
   .big2{display: flex;
       flex-direction: row;
   margin: 2em 12em ;}


   .row-80{
     width: 80%;
     margin: 0 auto;
   }
.sizee{font-size: 1em;}
.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 4em;
}
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
/*clints*/

.section-intro {
    font-size: 1.125rem;
    color: #828d9f;
}
.mb-3 {
    margin-bottom: 1rem !important;
}
.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
.justify-content-center {
    -webkit-justify-content: center !important;
    justify-content: center !important;
}
.integration-list .item img {
    width: 100px;
    height: auto;
    background: #fff;
}
.rounded-circle {
    border-radius: 50% !important;
}
.shadow {
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;
}
img, svg {
    vertical-align: middle;
}

@media (min-width: 1200px){
    .top-line-lg:before {
        content: "";
        display: inline-block;
        width: 160px;
        height: 80px;
        z-index: -1;
        background: transparent;
        border: none;
        border-top: dashed 3px #cccff8;
        padding: 30px;
        border-radius: 50%;
        position: absolute;
        right: -80px;
        top: -10px;
    }
}

@media (min-width: 1200px){
    .bottom-line-lg:before {
        content: "";
        display: inline-block;
        width: 160px;
        height: 80px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 3px #cccff8;
        padding: 30px;
        border-radius: 50%;
        position: absolute;
        right: -80px;
        bottom: -10px;
    }
}

@media (min-width: 1200px){
.top-line-lg {
    position: relative;
}
}

@media (min-width: 1200px){
.bottom-line-lg {
    position: relative;
}
}

@media (min-width: 992px){
    .mb-lg-5 {
        margin-bottom: 3rem !important;
    }
}
        </style>
</head>

<body>

  

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
      <h3 class="animate-charcter mx-5"> job</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" >
        <ul class="navbar-nav me-4 " >
          <li class="nav-item me-4">
            <a class="nav-link active sizee" aria-current="page" href="index.html" ><i class="fas fa-home mx-2"></i>Home</a>
          </li>
          <li class="nav-item me-4 ">
            <a class="nav-link  sizee" href="jobs.html" > <i class="fas fa-user-md mx-2"></i>Jobs</a>
          </li>

          <li class="nav-item  me-4">
            <a class="nav-link sizee"  href="contact.html"><i class="fas fa-id-card-alt mx-2"></i>Contact</a>
          </li>
          <li class="nav-item  me-4">
            <a class="nav-link sizee" href="services.html"> <i class="fas fa-user-md mx-2"></i>Services</a>
          </li><li class="nav-item me-4">
            <a class="nav-link sizee" href="about.html"><i class="far fa-address-card mx-2"></i>About</a>
          </li>

          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle sizee" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="sidebar.html">profile</a></li>
              <li><a class="dropdown-item" href="#">Sign up</a></li>
        
            </ul>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link sizee" href="jobs.html"><i class="fas fa-language mx-2"></i>English</a>
          </li>
         <li class="nav-item me-4" >
            <a class="nav-link" href="signup.html"><button type="button" class="btn btn-secondary ciz">Sign up</button></a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="signin.html"><button type="button" class="btn btn-secondary ciz">Log in</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     
      
<!--slider-->

<div class="container">
    <h2 class="mb-2">our clints</h2>
   
    <div class="integration-list row justify-content-center py-5">
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 top-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5 bottom-line-lg"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a></div>
        <div class="item col-4 col-md-3 col-lg-2 mb-3 mb-lg-5"><a href="#"><img class="shadow rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a></div>
    </div>
    <!--//row-->
  
</div>

<section class="logo-list">
    <h1 style="text-align: center;">companies</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 m-4">
                <a href="#"><img src="https://www.markuptag.com/images/bluehost-logo.png" class="img-fluid" alt="Bluehost logo"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-6 m-4">
                <a href="#"><img src="https://www.markuptag.com/images/hostgator-logo.png" class="img-fluid" alt="Hostgator logo"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-6 m-4">
                <a href="#"><img src="https://www.markuptag.com/images/greengeeks-logo.png" class="img-fluid" alt="Green Geeks logo"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-6  m-4">
                <a href="#"><img src="https://www.markuptag.com/images/wordpress-logo.png" class="img-fluid" alt="WordPress logo"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-6  m-4">
                <a href="#"><img src="https://www.markuptag.com/images/dreamhost-logo.png" class="img-fluid" alt="DreamHost logo"></a>
            </div>
            <div class="col-lg-2 col-md-4 col-6  m-4">
                <a href="#"><img src="https://www.markuptag.com/images/hostinger-logo.png" class="img-fluid" alt="Hostinger logo"></a>
            </div>
        </div>
    </div>
    <div class="container my-5">
    
          
         
     
      </div>
  </div>
</section




  <!--our clint-->

  
<!--footer-->
<div class="mt-5 pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <h2>Heading</h2>
     
        <p><a href="#"><i class="fa fa-facebook-square my-5"></i></a><a href="#"><i class="fa fa-linkedin-square mx-3"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li>- <a href="#" style="text-decoration: none;">Lorem ipsum</a></li>
            <li>- <a href="#" style="text-decoration: none;">Nam mauris velit</a></li>
            <li>- <a href="#" style="text-decoration: none;">Etiam vitae mauris</a></li>
            <li>- <a href="#" style="text-decoration: none;">Fusce scelerisque</a></li>
            <li>- <a href="#" style="text-decoration: none;">Sed faucibus</a></li>
            <li>- <a href="#" style="text-decoration: none;">Mauris efficitur nulla</a></li>
          </ul>
      </div>
      <div class="col-lg-4 col-xs-12 location">
        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
        <p >22, Lorem ipsum dolor, consectetur adipiscing</p>
        <p class="mb-0"><i class="fa fa-phone mx-3"></i>(541) 754-3010</p>
        <p ><i class="fa fa-envelope-o mx-3"></i>info@hsdf.com</p>
      </div>
    </div>
    <div class="row mt-5">
     
    </div>
  </div>
  </div>