<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/all.min.css">
  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>job page</title>
    <style>



.item{height: 400px;
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
.sizee{font-size: 1.5em;}
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

        </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
      <h3 class="animate-charcter mx-5"> job</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item me-5">
            <a class="nav-link active sizee" aria-current="page" href="index.html"><i class="fas fa-home mx-2"></i>Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link sizee" href="jobs.html" > <i class="fas fa-user-md mx-2"></i>Jobs</a>
          </li>

          <li class="nav-item me-5">
            <a class="nav-link sizee"  href="contact.html"><i class="fas fa-id-card-alt mx-2"></i>Contact</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link sizee" href="services.html"> <i class="fas fa-user-md mx-2"></i>Services</a>
          </li><li class="nav-item me-5">
            <a class="nav-link sizee" href="about.html"><i class="far fa-address-card mx-2"></i>About</a>
          </li>

          <li class="nav-item dropdown me-5">
            <a class="nav-link dropdown-toggle sizee" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="sidebar.html">profile</a></li>
              <li><a class="dropdown-item" href="#">Sign up</a></li>
        
            </ul>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link sizee" href="jobs.html"><i class="fas fa-language mx-2"></i>English</a>
          </li>
         <li class="nav-item " >
            <a class="nav-link" href="signup.html"><button type="button" class="btn btn-secondary ciz">Sign up</button></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="signin.html"><button type="button" class="btn btn-secondary ciz">Log in</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     
<!--sertch-->
 <!--dev select-->
 <div class=" row-cols-md-6 row-80 ">
                
  <select id="filter-company" class="filter  p-2  me-4 mb-2">
      <option value="0">All comp</option>
      <option value="Yemen">  Insurance company</option>
      <option value="hail"> National Cement Company </option>
      <option value="online">    Al Yamana Airlines </option>
</select> 

<select id="filter-city" class="filter p-2 me-4 mb-2">
    <option value="0">All Cities </option>
<option value="Sana">Taiz </option>
<option value="alhwdeda"> Aden</option>
<option value="all"> Sanaa </option>
</select>  

</div>



  <div class="row row-cols-md-2 g-4 row-80">
      <!--div card-->
      <div class="col job_card" >
        <div class="card h-100 ">
            <div class="card-body">
              <h1 class="card-title  company justify-content"  data-company="Yemen" style="color: #231557;">
                <i class="fas fa-building" ></i>
               National Cement Company</h1>
                  <p class="card-text h5">
                    Deputy Director with at least 1 year experience</p>

              <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                  <span class="city h5" data-city="Sana">Taiz</span>
              </span>
              <br>
              <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                <a > Submission ends on : 2022-01-16
                </a>
                </a>
              <br>
              <div class="row modal-footer " style="border:none; ">
               <a href="job_details.html" style="text-decoration: none;">
                <button class="btn btn-colo-b btn-small   mx-auto " style="background-color: #231557;color: #fff;">
                     More Details </button></a>
                 </div>                  
              </div>
          </div>
        </div>

      <div class="col job_card">
        <div class="card h-100 ">
          <div class="card-body">
            <h1 class="card-title company"  data-company="hail"style="color: #231557;">
              <i class="fas fa-building"></i>
             
             Insurance company</h1>
            <p class="card-text h5">   Accountant wanted</p>

            <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                <span class="city h5" data-city="alhwdeda">Taiz</span>
            </span>
            <br>
            <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
              <a >  Submission ends on : 2022-02-8
              </a>
              </a>             
            <div class="row modal-footer " style="border:none; ">
              <a href="job_details.html" style="text-decoration: none;">
                <button class="btn btn-colo-b btn-small   mx-auto "style="background-color: #231557;color: #fff;">
                     More Details </button></a>
               </div>                  
            </div>
        </div>
      </div>
          <div class="col job_card" >
            <div class="card h-100 ">
                <div class="card-body">
                  <h1 class="card-title company"  data-company="online" style="color: #231557;">
                    <i class="fas fa-building"></i>
                   Insurance company</h1>
                 <p class="card-text h5"> A secretarial employee with a minimum of two years experience is required    </p>
                  <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                      <span class="city h5" data-city="all"> Sanaa</span>
                  </span>
                  <br>
                 
                  <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                    <a > Submission ends on : 2022-02-16
                    </a>
                    </a>
                  <div class="row modal-footer " style="border:none; ">
                    <a href="job_details.html" style="text-decoration: none;">
                      <button class="btn btn-colo-b btn-small   mx-auto "style="background-color: #231557;color: #fff;">
                           More Details </button></a>
                     </div>                  
                  </div>
              </div>
   </div>



<div class="col job_card" >
        <div class="card h-100 ">
            <div class="card-body">
              <h1 class="card-title company"  data-company="online" style="color: #231557;">
                <i class="fas fa-building"></i>
               Al Yamana Airlines</h1>
             <p class="card-text h5"> A pilot is required, with no less than 30 years old    </p>
              <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                  <span class="city h5" data-city="all">Aden </span>
              </span>
              <br>
              <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                <a > Submission ends on : 2022-01-16
                </a>
                </a>
              <div class="row modal-footer " style="border:none; ">
                <a href="job_details.html" style="text-decoration: none;">
                  <button class="btn btn-colo-b btn-small   mx-auto "style="background-color: #231557;color: #fff;">
                       More Details </button></a>
                 </div>                  
              </div>
          </div>
</div>
<div class="col job_card">
<div class="card h-100 ">
  <div class="card-body">
    <h1 class="card-title company"  data-company="hail" style="color: #231557;">
      <i class="fas fa-building"></i>
     Al Yamana Airlines</h1>
    <p class="card-text h5"> Company CEO wanted</p>

    <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
      <span class="city h5" data-city="all">Sanaa </span>
  </span>
  <br>
  <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
    <a > Submission ends on : 2022-01-16
    </a>
    </a>
    <div class="row modal-footer " style="border:none; ">
      <a href="job_details.html" style="text-decoration: none;">
        <button class="btn btn-colo-b btn-small   mx-auto "style="background-color: #231557;color: #fff;">
             More Details </button></a>
       </div>                  
    </div>
</div>
</div>
<div class="col job_card">
<div class="card h-100 ">
  <div class="card-body">
    <h1 class="card-title company"  data-company="hail" style="color: #231557;">
      <i class="fas fa-building"></i>
     National Cement Company</h1>
    <p class="card-text h5"> Labor Supervisor Wanted</p>

    <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
      <span class="city h5" data-city="Sana">Taiz</span>
  </span>
  <br>
  <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
    <a > Submission ends on : 2022-01-16
    </a>
    </a>
    <div class="row modal-footer " style="border:none; ">
      <a href="job_details.html" style="text-decoration: none;">
        <button class="btn btn-colo-b btn-small   mx-auto "style="background-color: #231557;color: #fff;">
             More Details </button></a>
       </div>                  
    </div>
</div>
</div> 

</div>
  

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
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/filter.js"></script>
  <script src="js/all.min.js"></script>
  </body>