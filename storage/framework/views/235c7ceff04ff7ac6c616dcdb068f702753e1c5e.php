<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>MUBER</title>
  <link href=<?php echo e(URL::asset('css/bootstrap.min.css')); ?>  rel="stylesheet">
  <link href=<?php echo e(URL::asset('css/magnific-popup.css')); ?>  rel="stylesheet">
  <link href=<?php echo e(URL::asset('css/muber.min.css')); ?>  rel="stylesheet">
  
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(url('/')); ?>">home</a>
            </li>
            <ul class="navbar-nav ml-auto">
           

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(url('/driver')); ?>">Drivers List</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(url('/driver/create')); ?>">register</a>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>

	
	<header class="masthead bg-primary text-white ">
      <div class="container">
        <h3 align="center">MUBER CAB SERVICE- (Driver) REGISTER</h3>
        <div class="row">
        <div class="col-md-8 offset-md-2" style="">
        <form method="POST" action="<?php echo e(url('/driver')); ?>">
        <?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<div class="alert alert-danger"><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
    <label for="email">User Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="cabno">Cab Registration Number:</label>
    <input type="text" class="form-control" id="cabno" name="cabno">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  
  
  <button type="submit" class="btn btn-default">Register</button>
</form>
</div>
</div>
      </div>
    </header>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>