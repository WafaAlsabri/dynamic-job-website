



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
  bottom: 160em;

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
     
      
<!--slider-->


<div class="container " >
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
  
        <div class="item active">
          <img src="assets/images/11.png" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
  
        <div class="item">
          <img src="assets/images/22.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
      
        <div class="item">
          <img src="assets/images/44.jpeg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
  
        <div class="item">
          <img src="assets/images/5.png" alt="Flower" width="460" height="345" >
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
    
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control " href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  

  <div class="row row-cols-1 row-80 row-cols-md-3 g-4 " >
  @foreach ($ads as $item)

    <div class="col">
      <div class="card">
    
  

    <img src="{{asset('upload/info/' .$item->image)}}" width="150em" heigt="1500em" alt="image" style="boreder-radius:50%;">
        <div class="card-body h3">
        {{$item->name}}
        </div>
      </div>
    </div>
   <!-- <div class="col">
      <div class="card">
        <img src="assets/images/y.jpg" class="card-img-top" alt="...">
        <div class="card-body h3">
          Pepsi
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="assets/images/first.webp" class="card-img-top" alt="...">
        <div class="card-body h3">
          Cocacola
        </div>
      </div>
    </div>
    
  </div>-->

  @endforeach


<h1 style="text-align: center;margin-left: 27em;margin-top:2em;margin-bottom:2em;border: 1px solid#000;width: 8em;text-align: center;">Last Jobs</h1>
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
  <section class="logo-list">
    <h1 style="text-align: center;margin-left: 27em;margin-top:2em;margin-bottom:2em;border: 1px solid#000;width: 8em;text-align: center;">our partners</h1>
    <div class="container">
        <div class="row">

        @foreach ($partners as $item)
  
            <div class="col-lg-2 col-md-4 col-6 m-4">
                <a href="#"> <img src="{{asset('upload/info/' .$item->image)}}"  width="100px;" height="100px;" alt="image" style="boreder-radius:50%;"></a>
            </div>
          
        </div>
    </div>

  </div>
  @endforeach
</section>

  
<!--footer-->


  </div>

  <script src="js/all.min.js"></script>
</body>