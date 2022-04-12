


<!DOCTYPE html>



<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- ui-alerts.html , Sat, 26 Mar 2022 16:52:24 GMT -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    @extends('feedback')
    @section('content')
   
<div class="container" style="margin-top: 8em;margin-left:6em;" >
<h1>ADD Ads</h1>
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

<form action="add" method="post" enctype="multipart/form-data">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
    <span style="color:red;">@error('name'){{$message}} @enderror</span>
  </div>
 
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descreption</label>
  <textarea class="form-control" id="" rows="3" name="descreption"></textarea>
</div>
 

  <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
      <label class="form-label" for="multicol-email">  cmpany</label>
                    <select  class="form-select item-details mb-2" name="id_partners">
                    @foreach($paerners as $c)
                
                <option  value ="{{$c->id}}">{{$c->name}}</option>
                           
                                     @endforeach
                
        
               
                    </select>
      </div>

  <div class="mb-3">

        <label class="form-label" for="multicol-email">image </label>
        <div class="input-group input-group-merge">
          <input  name="image" type="file"  class="form-control"  />
          
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
 
     

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
</body>