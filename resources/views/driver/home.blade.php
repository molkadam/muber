<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>MUBER</title>
  <link href={{   URL::asset('css/bootstrap.min.css')  }}  rel="stylesheet">
  <link href={{   URL::asset('css/magnific-popup.css')  }}  rel="stylesheet">
  <link href={{   URL::asset('css/muber.min.css')  }}  rel="stylesheet">
  
</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MUBER CAB SERVICE (Driver Section)</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}">home</a>
            </li>
            <ul class="navbar-nav ml-auto">
           

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/driver') }}">Drivers List</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/driver/create') }}">register</a>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>
	<h1>MUBER CAB SERVICE</h1>
	<header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="profile.png" alt="">
        <div class="col-md-6 offset-md-3">
        <table class="table">
          <tr><th>Driver Name</th><th>Email</th><th>Cab No.</th><th colspan="2">Action</th></tr>
           @foreach ($drivers as $driver)
           <tr>
           <td>{{$driver -> name}}</td>
           <td>{{$driver -> email}}</td>
           <td>{{$driver -> cabno}}</td>
           
           <td>
           <a class="pull-left" href="{{'driver/'.$driver -> id.'/edit'}}"><button class="btn btn-success">Edit</button></a> </td>
              <td><form method="POST" class="pull-right" action="{{ url('/driver/'.$driver->id) }}">
              <input name="_method" type="hidden" value="DELETE">
              {{ csrf_field() }}
           <button class="btn btn-danger ">Delete</button> </td>
              </form>
           </tr>
           @endforeach
        </table>
          
      </ul>
        </div>
        

        <h2 class="text-uppercase mb-0">Muber Cab Service (Driver Home page)</h2>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0"> Search Your Way- Select Your Cab - Book Your Ride</h2>
      </div>
      
    </header>


@include('includes.footer')
