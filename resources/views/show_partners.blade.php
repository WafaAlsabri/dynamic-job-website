<!DOCTYPE html>



<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- ui-alerts.html , Sat, 26 Mar 2022 16:52:24 GMT -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

@extends('feedback')
    @section('content')




<div class="container" style="margin-top:13em;margin-right:11em;">

   <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    <th>#</th>
      <th>Name</th>
      <th>addrss</th>
      <th>Business sector</th>
      <th>operation</th>
    </tr>
  </thead>
  @foreach ($list as $item)
  <tbody>
    <tr>
    
      <td>
      {{$item->id}}
      </td>
      <td>
      {{$item->name}}
      </td>
      <td>
      {{$item->address}}
      </td>
      <td>
      {{$item->sector}}
      </td>
      <td>
      {{$item->id_city}}

      
      </td>
      <td>
   
      </td>
      <td>
     <img src="{{asset('upload/info/' .$item->image)}}"  width="100px;" height="100px;" alt="image" style="boreder-radius:50%;">
      </td>
      
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
       <a href="delete/{{$item->id}}">delete</a> 
      </td>
    </tr>
  
  
    @endforeach
  </tbody>
</table>

</body>
</html>