<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	
	<header class="masthead bg-primary text-white ">
      <div class="container">
        <h3 align="center">MUBER CAB SERVICE- (Driver) Edit </h3>
        <div class="row">
        <div class="col-md-8 offset-md-2" style="">
        <form method="POST" action="<?php echo e(url('/driver/'.$dr->id)); ?>">
        <input name="_method" type="hidden" value="PUT">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
    <label for="email">User Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($dr->name); ?>">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo e($dr->email); ?>">
  </div>
  <div class="form-group">
    <label for="cabno">Cab Register Number:</label>
    <input type="text" class="form-control" id="cabno" name="cabno" value="<?php echo e($dr->cabno); ?>">
  </div>
 
  <button type="submit" class="btn btn-default">Update</button>
</form>
</div>
</div>
      </div>
    </header>


<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>