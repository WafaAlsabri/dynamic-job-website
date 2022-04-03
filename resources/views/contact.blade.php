<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/all.min.css">


   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>job website</title>

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

<!--contact-->
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post">
        <h3>Drop Us a Message</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group my-4">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group my-4">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group my-4">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                </div>
                <div class="form-group my-4">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group my-4">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

<!--footer-->
<div class="mt-5 pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <h5>Heading</h5>
     
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

  <script src="js/all.min.js"></script>
</body>