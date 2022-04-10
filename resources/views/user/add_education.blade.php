


<!DOCTYPE html>



<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- ui-alerts.html , Sat, 26 Mar 2022 16:52:24 GMT -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    @extends('compenents.sidebar')
   
   @section('right')
   
<div class="container" style="margin-top: 8em;margin-left:6em;" >
<h1>ADD personal information</h1>
<br>

@if(Session::get('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif

<form action="add_info" method="post"  enctype="multipart/form-data">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
    <span style="color:red;">@error('name'){{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="sector" class="form-label">email:</label>
    <input type="text" class="form-control" id="sector" placeholder=" Enter email" name=" email" value="{{old('email')}}">
    <span style="color:red;">@error('email'){{$message}} @enderror</span>
  </div>
  <div class="mb-3 ">
    <label for="address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{old('address')}}">
    <span style="color:red;">@error('address'){{$message}} @enderror</span>
  </div>
  <div class="mb-3">

        <label class="form-label" for="multicol-email">image </label>
        <div class="input-group input-group-merge">
          <input  name="profile" type="file"  class="form-control"  />
          
        </div>
      </div>
   <div class="mb-3">

        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">statuse</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">active</span>
          </label>
          </div>
        </div>
      </div>
 
      <div class="mb-3">
        <label class="form-label" for="num_emp">Number of employeese </label>
        <input name="num_emp" type="number" id="num_emp" class="form-control" placeholder="enter number" value="{{old('num_emp')}}"/>
        <span style="color:red;">@error('num_emp'){{$message}} @enderror</span>
      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
</body>