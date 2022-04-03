<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/all.min.css">
    <script src="https://kit.fontawesome.com/0258162a56.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->

<title>profile</title>
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

.card {
    border: none;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer
}

.card:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #E1BEE7;
    transform: scaleY(1);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #8E24AA;
    transform: scaleY(0);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:hover::after {
    transform: scaleY(1)
}

.fonts {
    font-size: 11px
}

.social-list {
    display: flex;
    list-style: none;
    justify-content: center;
    padding: 0
}

.social-list li {
    padding: 10px;
    color: #8E24AA;
    font-size: 19px
}

.buttons button:nth-child(1) {
    border: 1px solid #8E24AA !important;
    color: #8E24AA;
    height: 40px
}

.buttons button:nth-child(1):hover {
    border: 1px solid #8E24AA !important;
    color: #fff;
    height: 40px;
    background-color: #8E24AA
}

.buttons button:nth-child(2) {
    border: 1px solid #8E24AA !important;
    background-color: #8E24AA;
    color: #fff;
    height: 40px
}
.siz{

 
}

    </style>
  </head>
  <body>
  
    
    <div class="container-fluid">
      <div class="row flex-nowrap">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color: #dcdee0;">
              <div class="d-flex flex-column align-items-center align-items-sm-start px-3 px-sm-0 pt-2 pt-sm-0 text-white min-vh-100">
                  <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <!---- <img src="assets/images/xxx.jpg " class="rounded-circle d-lg-inline d-sm-none" alt="Cinque Terre" height="100px"
                  width="100px">-->
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

          <div class="container siz"> 
            <div class="row d-flex mx-5">
                <div class="col-md-7 col-sd-3">
                    <div class="card p-3 py-4">
                        <div class="text-center"> <img src="assets/images/xxx.jpg" width="100" class="rounded-circle"> </div>
                        <div class="text-center mt-3"> 
                            <h5 class="mt-2 mb-0">Wafa Alsabri</h5> <span class="text-danger">graphic Designer&web developer</span>
                            <form>
                              <div class="mb-2 my-4">
                                
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter email" >
                                <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>    </div>
                               
                            
                              <div class="mb-3">
                                
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter password">
                                <i data-bs-toggle="modal" data-bs-target="#myModal2" class="far fa-edit" style="color:green; font-size: 1em; margin: .2em;" ></i>
                                <i   data-bs-toggle="modal" data-bs-target="#myModal" class="fas fa-trash-alt" style="color:red; font-size: 1em; margin: .2em;"></i>    </div>
                             
                              <button class="btn btn-primary px-4 ms-3" style="background-color: purple;">Submit</button>
                            </form>
                            <ul class="social-list">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-dribbble"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                                <li><i class="fa fa-google"></i></li>
                            </ul>
                      
                              
                        </div>
                    </div>
                </div>
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
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
           
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">phone</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary" style="background-color: #b46ac9;">Submit</button>
          </form>
  
      </div>
    </div>
  </div>

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
  <script src="js/all.min.js"></script>
</body>
 
</html>