<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/all.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>job website</title>
    <style>


.mk{
  bottom: 66em;
}

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


@extends('compenents.header')
 @section('header')
 @endsection

 
 @extends('compenents.footer')
 @section('footer')
 @endsection
     

<!--services-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="assets/images/44.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12">
                            <div class="mt-4 pt-2 text-right">
                                <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="assets/images/5.png" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="assets/images/22.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h1 class="text-custom font-weight-normal mb-3">Our Services</h1>
               
                <p class="text-muted mb-0">We supervise all recruitment services around the world</p>

                <div class="row">
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-play h4 mb-0 text-custom"></i>
                            <h4 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Create cv</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-file-download h4 mb-0 text-custom"></i>
                            <h4 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Help Peaple to empolyee</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-user h4 mb-0 text-custom"></i>
                            <h4 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Create cv</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-image h4 mb-0 text-custom"></i>
                            <h4 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Create cv</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--enr row-->
</div>
<!--footer-->


  </div>
  <script src="js/all.min.js"></script>
  </body>