<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title Of Site -->
	<?php echo $__env->yieldContent('title'); ?>
	<link href=<?php echo e(asset('css/jquery.tag-editor.css')); ?> rel="stylesheet">

	<meta name="description" content="HTML Responsive Landing Page Template for Course Online Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="study, learn, course, tutor, tutorial, teach, college, school, institute, teacher, instructor" />
	<meta name="author" content="crenoveative">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href=<?php echo e(asset('images/ico/apple-touch-icon-144-precomposed.png')); ?>>
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?php echo e(asset('images/ico/apple-touch-icon-114-precomposed.png')); ?>>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href=<?php echo e(asset('images/ico/apple-touch-icon-72-precomposed.png')); ?>>
	<link rel="apple-touch-icon-precomposed" href=<?php echo e(asset('images/ico/apple-touch-icon-57-precomposed.png')); ?>>
	<link rel="shortcut icon" href=<?php echo e(asset('images/ico/favicon.png')); ?>>

    <!-- CSS Plugins -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet"  href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>" media="screen">	
	<link rel="stylesheet" type="text/css" href=<?php echo e(asset('css/multi-select.css')); ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo e(asset('css/plugin.css')); ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo e(asset('css/media-query.css')); ?>>
	<link href=<?php echo e(asset('css/animate.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/main.css')); ?> rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- CSS Custom -->
	<link href=<?php echo e(asset('css/style.css')); ?> rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo e(asset('css/intlTelInput.min.css')); ?>"> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css">
	
	<!-- For your own style -->
	<link href=<?php echo e(asset('css/your-style.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/auto.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/effect.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/hover-min.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/responsive.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/amsify.suggestags.css')); ?> rel="stylesheet">
	<link href=<?php echo e(asset('css/imageuploadify.min.css')); ?> rel="stylesheet">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<script type="text/javascript" src=<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}></script>
	<![endif]-->
	
</head>

<body>
		<header id="header">
	  
			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">
			
				<!--<div id="top-header">
			
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-6">
								
							
								
								<div class="top-header-widget hidden-xs">
									<i class="ion-android-call"></i> <span class="number">1-800-900-9985</span>
								</div>
							
							</div>
							
							<div class="col-sm-6">
								<?php if(Session::get('tutor')==""): ?>
								<div class="top-header-widget pull-right">
									<a href="<?php echo e(asset('')); ?>/login" class="btn-ajax-login" data-toggle="modal">
										<i class="ion-log-in mr-3"></i> Login
									</a>
								</div>
								<div class="top-header-widget pull-right">
									<a href="<?php echo e(asset('')); ?>/student/signup" class="btn-ajax-register" data-toggle="modal">
										<i class="ion-person-add mr-3"></i> Student Sign-up
									</a>
								</div>
								<div class="top-header-widget pull-right hidden-xs">
									<a href="<?php echo e(asset('')); ?>/tutor/signup">
										<i class="ion-person-add mr-3"></i> Become A Tutor
									</a>
								</div>
								<?php else: ?>
								<div class="top-header-widget pull-right hidden-xs">
									<a href="<?php echo e(asset('')); ?>/logout">
										<i class="ion-log-in mr-3"></i> Logout
									</a>
								</div>
								<?php endif; ?>
							
							</div>
							
						</div>
					
					</div>
					
				</div>-->


			<?php if(Session::get('role')=="2"): ?>
				<!-- navigation -->
				<div class="navigation">
					<div class="container">
						
						<div class="navbar-header">
							<?php if(Route::getCurrentRoute()->uri() == '/'): ?>
							<a class="navbar-brand" href="javascript:void(0)"><img src=<?php echo e(asset('images/logo.png')); ?> style="width:190px"></a>
							<?php else: ?> 
							<a class="navbar-brand" href="<?php echo e(asset('')); ?>"><img src=<?php echo e(asset('images/logo.png')); ?> style="width:190px"></a>
							<?php endif; ?>
						</div>
						
						<div id="navbar" class="collapse navbar-collapse navbar-arrow">
						
							<ul class="nav navbar-nav navbar-right" id="responsive-menu">
								<?php if(Route::getCurrentRoute()->uri() == '/'): ?>
								<li>
									<a class="active"><span class="fa fa-home"></span> Home</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>"><span class="fa fa-home"></span> Home</a>
								</li>
								<?php endif; ?>


								<!--<?php if(Route::getCurrentRoute()->uri() == 'tutor/profile'): ?>
								<li>
									<a  class="active"><span class="fa fa-user-shield"></span> Profile</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>tutor/profile"><span class="fa fa-user-shield"></span> Profile</a>
								</li>
								<?php endif; ?>-->
								

								<?php if(Route::getCurrentRoute()->uri() == 'tutor/setting'): ?>
								<li>
									<a class="active"><span class="fa fa-wrench"></span> Setting</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>tutor/setting" ><span class="fa fa-wrench"></span> Setting</a>
								</li>
								<?php endif; ?>

								<?php if(Session::get('username')!=""): ?>
								<li>
									<a href="javascript:void(0)"><!--<span class="fa fa-user-shield"></span>--><img src="<?php echo e(asset('')); ?>webData/tutorData/620182018090055_man.jpg" style="width: 35px;display: inline-block;vertical-align: middle;border-radius: 100%" />&nbsp;Hey! <?php echo e(Session::get('username')); ?> </a>
											<ul>
												<li><a href="<?php echo e(asset('')); ?>tutor/profile"><span class="fa fa-user-shield"></span> Profile</a></li>
												<li><a href="<?php echo e(asset('')); ?>/logout"><span class="fa fa-sign-out-alt"></span> Logout</a></li>
											</ul>
								</li>
								<?php endif; ?>

										
							</ul>
						
						</div>
						
					</div>
				</div>
				<!-- navigation -->
			<?php else: ?>
				<!-- navigation -->
				<div class="navigation">
					<div class="container">
						
						<div class="navbar-header">
							<?php if(Route::getCurrentRoute()->uri() == '/'): ?>
							<a class="navbar-brand" href="javascript:void(0)" a><img src=<?php echo e(asset('images/logo.png')); ?> style="width:190px"></a>
							<?php else: ?> 
							<a class="navbar-brand" href="<?php echo e(asset('')); ?>"><img src=<?php echo e(asset('images/logo.png')); ?> style="width:190px"></a>
							<?php endif; ?>
						</div>
						<div class="infoBar hide-m">
							<li>
								<a href="javascript:void()" ><i class="ion-android-call"></i> <span class="number">1-800-900-9985</span></a>
							</li>

							<li>
								<a href="mailto:Test@gmail.com" ><i class="fa fa-envelope"></i> <span class="number">Test@gmail.com</span></a>
							</li>
						</div>
						
						<div id="navbar" class="collapse navbar-collapse navbar-arrow">
							
							<ul class="nav navbar-nav navbar-right" id="responsive-menu">
								
								<li class="show-m">
									<a href="javascript:void()" ><i class="ion-android-call"></i> <span class="number">1-800-900-9985</span></a>
								</li>

								<li class="show-m">
									<a href="mailto:Test@gmail.com" ><i class="fa fa-envelope"></i> <span class="number">Test@gmail.com</span></a>
								</li>
								


								<?php if(Route::getCurrentRoute()->uri() == '/'): ?>
								<li>
									<a class="active" href="javascript:void()"><span class="fa fa-home"></span> Home</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>"><span class="fa fa-home"></span> Home</a>
								</li>
								<?php endif; ?>
								

								<?php if(Route::getCurrentRoute()->uri() == 'tutor/find-a-tutor'): ?>
								<li>
									<a  class="active" href="javascript:void()"><span class="fa fa-search"></span> Find Tutor</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>/tutor/find-a-tutor"><span class="fa fa-search"></span> Find Tutor</a>
								</li>
								<?php endif; ?>

								<?php if(Route::getCurrentRoute()->uri() == 'tutor/signup'): ?>
								<li>
									<a  class="active" ><span class="fa fa-chalkboard-teacher"></span> Become A Tutor</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>/tutor/signup"><span class="fa fa-chalkboard-teacher"></span> Become A Tutor</a>
								</li>
								<?php endif; ?>

								<?php if(Route::getCurrentRoute()->uri() == 'student/signup'): ?>
								<li>
									<a class="active"><span class="fa fa-user-graduate"></span> Student Sign Up</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>/student/signup"><span class="fa fa-user-graduate"></span> Student Sign Up</a>
								</li>
								<?php endif; ?>


								<?php if(Route::getCurrentRoute()->uri() == 'login'): ?>
								<li>
									<a href="javascript:void()" class="active"><span class="fa fa-sign-in-alt"></span> Login</a>
								</li>
								<?php else: ?>
								<li>
									<a href="<?php echo e(asset('')); ?>/login"><span class="fa fa-sign-in-alt"></span> Login</a>
								</li>
								<?php endif; ?>

										
							</ul>
						
						</div>
						
					</div>
				</div>
				<!-- navigation -->
			<?php endif; ?>


				<div id="slicknav-mobile"></div>
				
			</nav>
			<!-- end Navbar (Header) -->

		</header>
		<!-- end Header -->

<div class="content">
	<?php echo $__env->yieldContent('content'); ?>
</div>

			<!-- start Footer Wrapper -->
			<div id="FooterContent">

				<div class="footer-wrapper scrollspy-footer">
					<footer class="secondary-footer">
					
						<div class="container wider-row">
						
							<div class="row">
							
								<div class="col-xs-12 col-sm-6">
									<ul class="secondary-footer-menu clearfix">
										<li><a href="<?php echo e(asset('')); ?>About-us">About</a></li>
										<li><a href="<?php echo e(asset('')); ?>pricing">Pricing</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="<?php echo e(asset('')); ?>stack-lin">Stack Lin</a></li>
									</ul>
								</div>
								
							</div>
						
						</div>
						
					</footer>

				</div>
			</div>
				<!-- end Footer Wrapper -->
		
	</div>
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>-->
<!-- end Back To Top -->

<!-- JS -->
<script type="text/javascript" src=<?php echo e(asset('js/jquery.caret.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.tag-editor.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.validate.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery-migrate-1.4.1.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.waypoints.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.easing.1.3.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/SmoothScroll.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/spin.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.introLoader.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/typed.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/placeholderTypewriter.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.slicknav.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.placeholder.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/select2.full.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/ion.rangeSlider.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/readmore.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/slick.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/bootstrap-rating.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.nicescroll.min.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/creditly.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/bootstrap-modalmanager.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/bootstrap-modal.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/customs.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/auto.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/auto.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/weekly.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/jquery.amsify.suggestags.js')); ?>></script>
<script type="text/javascript" src=<?php echo e(asset('js/imageuploadify.min.js')); ?>></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
<?php echo $__env->yieldContent('jsBlock'); ?>
</body>

</html>