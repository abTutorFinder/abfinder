<?php $__env->startSection('title'); ?>
	<title></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<script >
			$(document).ready(function(){
				$("title").html("<?php echo e($data->title); ?> | abTutorFinder");
			});
		</script>
			<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
					
					<h1 class="page-title"><?php echo e($data->title); ?></h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="<?php echo e(asset('')); ?>">Home</a></li>
								<li class="active"><?php echo e($data->title); ?></li>
							</ol>
						</div>
						
						
					</div>
					
				</div>

			</div>
			
			<div class="container pt-60 pb-70">
				
				<div class="row">
					
					<div class="col-md-12 col-lg-12 col-xs-12">
					<?php echo htmlspecialchars_decode($data->content); ?>
					</div>

				</div>
			
		</div>
		<!-- end Main Wrapper -->
		
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsBlock'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>