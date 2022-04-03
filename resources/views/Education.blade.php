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

.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
.section-title h2 {
    font-weight: 700;
    color: purple;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #2c2929;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.section-title p {
    margin: 0;
    font-size: 18px;
}

/* Resume Box
---------------------*/
.resume-box {
  background: #ffffff;
  box-shadow: 0 0 1.25rem rgba(31, 45, 61, 0.08);
  border-radius: 10px;
}
.resume-box ul {
  margin: 0;
  padding: 30px 20px;
  list-style: none;
}
.resume-box li {
  position: relative;
  padding: 0 20px 0 60px;
  margin: 0 0 30px;
}
.resume-box li:last-child {
  margin-bottom: 0;
}
.resume-box li:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 20px;
  border-left: 1px dashed purple;;
  bottom: 0;
}
.resume-box .icon {
  width: 40px;
  height: 40px;
  position: absolute;
  left: 0;
  right: 0;
  color: purple;
  line-height: 40px;
  background: #ffffff;
  text-align: center;
  z-index: 1;
  border: 1px dashed;
  border-radius: 50%;
}
.resume-box .time {
  background: purple;
  color: #ffffff;
  font-size: 10px;
  padding: 2px 10px;
  display: inline-block;
  margin-bottom: 12px;
  border-radius: 20px;
  font-weight: 600;
}
.resume-box h5 {
  font-weight: 700;
  color: #20247b;
  font-size: 16px;
  margin-bottom: 10px;
}
.resume-box p {
  margin: 0;
}

.resume-box li:after {
    content: "";
    position: absolute;
    top: 0px;
    left: 20px;
    border-left: 1px dashed purple;
    bottom: 0;
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
                  <a href="signup.html" class="nav-link px-0 align-middle">
                    <i class="fas fa-sign-out-alt" style="color: purple;"></i> <span class="ms-1 d-none d-sm-inline" style="color: #8E24AA;">Sign Out</span> </a>
              </li>
              </ul>
              <hr>
             
          </div>
      </div>
          <!--profile-->

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
          <section class="section gray-bg" id="resume">
                      <div class="container my-1 mx-5" >
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="section-title">
                                      <h2>Education</h2>
                                      <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6 m-15px-tb">
                                  <div class="resume-box">
                                      <ul>
                                          <li>
                                              <div class="icon">
                                                  <i class="fas fa-user-graduate"></i>
                                              </div>
                                              <span class="time">2019 - Present</span>
                                              <h5>Art Director - Facebook Inc</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                            <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>                <!--model delet-->
                                           
                                            
                                       
                                            </li>
                                          <li>
                                              <div class="icon">
                                                  <i class="fas fa-user-graduate"></i>
                                              </div>
                                              <span class="time">2019 - Present</span>
                                              <h5>Art Director - Facebook Inc</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                            <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>                <!--model delet-->
                                           
                                            
                                          
                                            </li>
                                          <li>
                                              <div class="icon">
                                                  <i class="fas fa-user-graduate"></i>
                                              </div>
                                              <span class="time">2019 - Present</span>
                                              <h5>Art Director - Facebook Inc</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                              <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>               
                                             
                                              <button type="button" class="btn btn-primary" style="margin: 0 20em;background-color: #8E24AA;">Submit</button>
                                            </li>
                                      </ul>
                                  </div>
                              </div>
                             
                          </div>
                      </div>
                  </section>
      </div>
  </div>
  <!--model-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirm delet</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
         Are you shur you wont delet
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
        </div>
  
      </div>
    </div>
  </div>
<!--edit model-->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <form class="container m-1">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Certificate</label>
              <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
           
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Year</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">description</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #8E24AA;">Submit</button>
          </form>
  
      </div>
    </div>
  </div>
  </body>
</html>