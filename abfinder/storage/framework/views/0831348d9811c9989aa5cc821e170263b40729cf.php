<?php $__env->startSection('title'); ?>
	<title>abTutorFinder</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero overlay-3 HeroHeader" style="background-image:url(<?php echo e(asset('images/home.jpg')); ?>);min-height: 100vh">
				<div class="container long">
						<div class="main-search-wrapper">
				
						<h2 class="text-center " >What would you like to learn?</h2>
						<br>
						<center>
						    <div class="col-md-12" style="float: none ">
								<div class="row Tutor_option " >
									
										<img src="<?php echo e(asset('images/icons/music-player.png')); ?>"  style="width: 64px">
									
								</div>
							</div>
						
							<div class="col-md-6" style="float: none ">
								
									<?php echo csrf_field(); ?>
									<div class="input-group">
										<input type="text" id="headerSearch" class="form-control placeholder-type-writter"  placeholder="Search Tutors Here">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button"><i class="ion-ios-search-strong" onclick="searchHere()"></i></button>
										</span>
									</div>
								
							</div>
						</center>
						<br><br>
						<div class="row" style="margin-left:15%; margin-right:15%; margin-bottom:1%">
							<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-4 col-lg-4 col-xs-6 category" >
								<center>
									<a href="<?php echo e(asset('')); ?>tutor/find-a-tutor/<?php echo e($group['subjectname']); ?>/" style="color:#fff" target='_blank' ><img src="<?php echo e($group['icon']); ?>" class="cate_image">
									<span class="main_category"><?php echo e($group['subjectname']); ?></span></a>
									<br>
								
								<?php $__currentLoopData = $group['subgroup']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subgroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<a href="<?php echo e(asset('')); ?>tutor/find-a-tutor/<?php echo e($subgroup['title']); ?>/" target='_blank' class="home_tags"><?php echo e($subgroup['title']); ?></a>
									
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</center>
								<!-- 	<div class="col-md-4 tags">
										<a href="#">Clarinet</a>
									</div>
									<div class="col-md-4 tags">
										<a href="#">Oboe</a>
									</div>
									<div class="col-md-4 tags">
										<a href="#">Bassoon</a>
									</div>
									<div class="col-md-4 tags">
										<a href="#">Saxophone</a>
									</div> -->
							</div>
							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							

						</div>
						
				</div>
			</div>
		
		</div>
</div>
			<!-- end hero-header -->
<script type="text/javascript">
	function searchHere(){
	 var valuea=$("#headerSearch").val();
	 window.location.assign("<?php echo e(asset('')); ?>tutor/find-a-tutor/"+valuea);
}
$("#headerSearch").keypress(function(e) {
    if(e.which == 13) {
        var valuea=$("#headerSearch").val();
	    window.location.assign("<?php echo e(asset('')); ?>tutor/find-a-tutor/"+valuea);
    }
});
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsBlock'); ?>

<script type="text/javascript">
$( "#headerSearch" ).keypress(function() {
	    var valuea=$("#headerSearch").val();
        $.ajax({
            url: "<?php echo e(asset('')); ?>tutor/tutorsuggest/"+valuea,
            type: "GET",
            async: false,
            success: function (msg) {
                autocomplete(document.getElementById("headerSearch"),msg);
            },
            cache: false,
            contentType: false,
            processData: false
        });

});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>