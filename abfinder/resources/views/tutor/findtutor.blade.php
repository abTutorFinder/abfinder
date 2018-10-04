@extends("layout")

@section('title')
<title>Find a Tutor | abTutorFinder</title>
@endsection


@section('content')
	<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container ">
				
					<h1 class="page-title">Find A Tutor</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Find a tutor</li>
							</ol>
						</div>
						
						
					</div>
					
				</div>

			</div>
		
			<div class="equal-content-sidebar-wrapper">
			
				<div class="equal-content-sidebar-by-gridLex">
				
					<div class="container ">
					
						<div class="GridLex-grid-noGutter-equalHeight">
				
							<div class="GridLex-col-3_sm-4_xs-12_xss-12">

								<div class="sidebar-wrapper">

									<aside class="filter-sidebar">
					
										<div class="responsive-filter-wrapper">
									
											<button type="button" class="navbar-toggle btn btn-primary collapsed btn-responsive-filter" data-toggle="collapse" data-target="#responsive-filter-box">Search Again &amp; Filter</button>
											
											<div class="clear"></div>
											
											<div class="collapse navbar-collapse responsive-filter-box" id="responsive-filter-box">
											
												<div class="collapse-inner">

													<div class="sidebar-header clearfix">
														<h4>Filter Results</h4>
														<button  class="sidebar-reset-filter btn btn-default" style="padding: 6px 8px;" onclick="ResetBtn()">&#9747 Reset filter</button>
													</div>
													<p>
													  <label for="amount">Price range:</label>
													  <input type="text" id="amount" readonly style="border:0; color:#232323; font-weight:bold;">
													</p>
													 <div id="slider-range"></div>
													 <br>
													 <label>Lesson Time</label>
													 <select class="form-control" id="lessonTime">
													 	<option value=" ">Any</option>
													 	<option value="30">30 min</option>
													 	<option value="45">45 min</option>
													 	<option value="60">60 min</option>
													 </select>
													 <br>
													 <lsabel>Lesson location</label>
													 <select class="form-control" id="lessonLocation">
													 		<option value=" ">Any</option>
													 		<option value="Studio">Studio</option>
													 		<option value="Tutor Home">Tutor Home</option>
													 		<option value="Student place">Student place</option>
													 </select>
													 <br>

													 <label>Gender</label>
													 <select class="form-control" id="gender">
													 		<option value=" ">Any</option>
													 		<option value="Male">Male</option>
													 		<option value="Female">Female</option>
													 </select>
													 <br>
													 <label>Distance to Teacher Location</label>
													 <input type="number" name="travel" id="Travel" class="form-control" >
													 <br>
													 <button class="btn btn-success">Search &nbsp; <i class="fa fa-search"></i></button>

											</div>
										
										</div>

										
									
									</aside>
									
								</div>
								
							</div>

							<div class="GridLex-col-9_sm-8_xs-12_xss-12">
						
								<div class="content-wrapper mb-10">

									<div class="sorting-wrappper">
										<div class="sorting-form">
										
											<div id="change-search" class="collapse"> 
											
												<div class="change-search-wrapper">
												
													<div class="row">
													
														<div class="col-xs-12 col-sm-10 col-md-10">
														
															<div class="row gap-0">
															
																<!--<div class="col-xs-12 col-sm-7 col-md-7">
																
																	<div class="form-group">
																		<input type="text" class="form-control no-br" placeholder="Music Subject" id="tutorName">
																	</div>
																
																</div>-->
																
																<div class="col-xs-12 col-sm-12 col-md-12">
																
																	<div class="form-group">
																		<select class=" form-control"  style="width: 100%;" id="services">
																			<option value=" ">All</option>
																		@foreach($groups as $group)
																			<option  value="{{$group['subjectname']}}">{{$group['subjectname']}}</option>
																			@foreach($group["subgroup"] as $subgroup)

																				<option value="{{$subgroup['title']}}">
																					&nbsp;&nbsp;&nbsp;&nbsp;{{$subgroup['title']}}
																				</option>
																			@endforeach
																		@endforeach
																		</select>
																	</div>
																	
																</div>
																
															</div>
														
														</div>
														
														<div class="col-xs-12 col-sm-2 col-md-2">
															<button class="btn btn-block btn-primary btn-form" onclick="searchHere()"><i class="fa fa-search"></i></button>
														</div>
														
													</div>
													
												</div>
											</div>

										</div>
										
										<div class="sorting-header">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-12 col-sm-7 col-md-9">
												
													<h4>We found instructors for <strong>Music</strong></h4>
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-5 col-md-3">
													<button class="btn btn-primary btn-block btn-toggle collapsed btn-form btn-inverse btn-sm" data-toggle="collapse" data-target="#change-search"></button>
												</div>
												
											</div>
											
											
										</div>
										
										<div class="sorting-content">
										
											<div class="row">
											
												<div class="col-xss-9 col-xs-9 col-sm-9">
													<div class="sort-by-wrapper">
														<label class="sorting-label block-xs">Sort by: </label> 
														<div class="sorting-middle-holder">
															<ul class="sort-by">
																<li class="active up"><a href="#">Name <i class="fas fa-long-arrow-down"></i></a></li>
																<li><a href="#">Price</a></li>
																<li><a href="#">Distance</a></li>
															</ul>
														</div>
													</div>
												</div>
												
												<div class="col-xs-3 col-xs-3 col-sm-3">
												
												</div>
												
											</div>
										
										</div>


										
										
										<div class="sorting-header">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-12 col-sm-7 col-md-9">
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-5 col-md-3">
													
												</div>
												
											</div>
											
											
										</div>
										

									</div>
									
									@foreach($profiles as $profile)
									<div class="teacher-item-list-02-wrapper alt-list-bb">
						
										<div class="teacher-item-list-02 clearfix">
										
											<div class="row gap-20">
											
												<div class="col-xs-12 col-sm-3 col-md-2">
												
													<div class="image" style="width: 100px;height: 100px">
														<img src="{{asset($profile->profile)}}" style="width: 100px;height: 100px"  alt="Image" />
													</div>
															
												</div>
												
												<div class="col-xs-12 col-sm-9 col-md-10">
												
													<div class="content">
															
														<div class="rating-wrapper">
															
														</div>
														<h3><a href="{{asset('')}}/tutor/public/{{$profile->slug}}">{{$profile->name}}</a> | <span class="labeling" style="margin-bottom: 0px">Music Teacher</span></h3>
														
														<span>{{$profile->services}}</span><br>
														<b><span class="fa fa-map-marker-alt"></span> Address: &nbsp; {{$profile->address}}</b><br>
														<span><span class="fa fa-language"></span> Languages: &nbsp; {{$profile->language}}</span><br>
														
														<p class="short-info"><span class="fa fa-user"></span> About: {{$profile->about}}</p>
														
														<a href="{{asset('')}}/tutor/public/{{$profile->slug}}" class="btn btn-primary btn-sm">More about him</a>
														
													</div>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									@endforeach
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<!-- end Main Wrapper -->

@endsection


@section('jsBlock')
<script type="text/javascript">
function searchHere(){
 var subjects=$("#services").val();
 window.location.assign("{{asset('')}}tutor/find-a-tutor/"+subjects);
}

function ResetBtn(){
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
    $("#lessonTime").prop('selectedIndex',0);
    $("#lessonLocation").prop('selectedIndex',0);
    $("#gender").prop('selectedIndex',0);
    $("#Travel").val();
}
</script>
@endsection

