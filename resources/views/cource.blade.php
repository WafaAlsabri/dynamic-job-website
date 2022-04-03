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



    <title>Sidebar #8</title>
    <style>


#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}
/*profile*/

.skillbar {
    position: relative;
    display: block;
    width: 100%;
    margin-bottom: 30px;
}

.skillbar-bar:before {
    background: #eee;
    content: "";
    height: 3px;
    position: absolute;
    width: 100%;
    z-index: -1;
}

.skillbar-bar {
    height: 3px;
    width: 0px;
    background: #323232;
    transition-property: width, background-color;
}

.skillbar-title {
    color: #323232;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
}

.skill-bar-percent {
    float: right;
    display: inline-block;
    color: #323232;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
}

/* CENTERING ONLY */

.wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}

/*cources*/

.card-big-shadow {
    max-width: 320px;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="none"] {
    border-radius: 0px;
}
.card {
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}


.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category, .card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 16px;
    color: #66615b;
}
.content-card{
    margin-top:30px;    
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #c1c8c9;
}
.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}
.card[data-color="green"] .description {
    color: #60773d;
}
.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}
.card[data-color="yellow"] .description {
    color: #b25825;
}
.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}
.card[data-color="brown"] .description {
    color: #75442e;
}
.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}
.card[data-color="purple"] .description {
    color: #3a283d;
}
.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}
.card[data-color="orange"] .description {
    color: #772510;
}
.card[data-color="orange"] .category {
    color: #e95e37;
}
    </style>
  </head>
  <body>
  
    
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color: #dcdee0;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <img src="assets/images/xxx.jpg " class="rounded-circle" alt="Cinque Terre" height="100px"
                width="100px">

                   
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="sidebar.html" class="nav-link align-middle px-0">
                          <i class="far fa-user" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">Personal Data</span>
                        </a>
                    </li>
                  
                    <li>
                        <a href="experince.html" class="nav-link px-0 align-middle">
                          <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">experiences</span></a>
                    </li>
                   
                    
                    <li>
                      <a href="skills.html" class="nav-link px-0 align-middle">
                        <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;"> Skills</span> </a>
                  </li>
                    
                    <li>
                        <a href="Education.html" class="nav-link px-0 align-middle">
                          <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">Educational </span> </a>
                    </li>

                    <li>
                      <a href="cource.html" class="nav-link px-0 align-middle">
                        <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">Courses</span> </a>
                  </li>
                  <li>
                    <a href="index.html" class="nav-link px-0 align-middle">
                      <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">Sign Out</span> </a>
                </li>
                </ul>
                <hr>
               
            </div>
        </div>
          <!--profile-->

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
          <div class="container bootstrap snippets bootdeys">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                            <div class="content">
                                <h6 class="category">Graphics deplom</h6>
                                <h4 class="title"><a href="#">5 months</a></h4>
                           
                                <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>               
                               
                            </div>
                           
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                            <div class="content">
                                <h6 class="category">Countring</h6>
                                <h4 class="title"><a href="#">2 months</a></h4>
                           
                                <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>               
                               
                            </div>
                           
                        </div> <!-- end card -->
                    </div>
                    <button type="button" class="btn btn-secondary justify-content-center">Add</button>
                </div>
            
               
              
            </div>
           
            </div>
           
      </div>
  </div>
  <script src="js/all.min.js"></script>
  </body>
</html>