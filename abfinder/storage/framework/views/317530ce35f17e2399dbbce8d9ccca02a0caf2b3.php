<?php $__env->startSection('title'); ?>
<title>Login | abTutorFinder</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="stdSignup">
    <div class="container">
      <div class="row">
          <div class="col-md-5 col-lg-5 col-xs-12 signUp">
              <div class="head-line"></div>
              <div class="from-content">
                <center>
                  <h3 class="head">Welcome Back!</h3>
                  <p>Login your account by filling the form below</p>
                  <br>
                </center>
                  	<form method="post" action="<?php echo e(route('checklogin')); ?>">
					<?php echo csrf_field(); ?>
					 <?php if($message=Session::get('error')): ?>
	                  <div class="alert alert-danger alert-block" role="alert">
	                    <button class="close" type="button" data-dismiss="alert">x</button>
	                    <?php echo e($message); ?>

	                  </div>
	                  <?php endif; ?>

	                  <?php if(count($errors) > 0): ?>
	                  <div class="alert alert-danger" role="alert">
	                    <ul>
	                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                      <li><?php echo e($error); ?></li>
	                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    </ul>
	                  </div>
	                  <?php endif; ?>
	                
					<div style="text-align: left;">
						<div class="form-group">
							<div class="fa fa-envelope icon"></div>
							<input type="email" name="email" class="form-control">
						</div>
						<br>

                 		<div class="form-group">
							<div class="fa fa-lock icon"></div>
							<input type="password" name="password" class="form-control">
						</div>
					</div>
			   
				<br>
				<center>
					<input class="btn btn-success hvr-shadow" style="width: 95%" type="submit" value="Login">
				</center>
				<br><br>
				<a href="#">Forgot your password?</a>
			 </form>
              </div>
          </div>
          <div class="col-md-7 col-lg-7 col-xs-12">
            <center>
              <img src="<?php echo e(asset('images/tutor.png')); ?>" style="width:580px">
            </center>
          </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>