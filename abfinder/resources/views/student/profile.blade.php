@extends("layout")

@section('title')
<title>Student Profile | abTutorFinder</title>
@endsection


@section('content')
@foreach($datas as $data)
<div class="main-wrapper">
		
	<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<h1 class="page-title">{{$data->name}}</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">{{$data->name}}</li>
							</ol>
						</div>
						
						
					</div>
					
				</div>

			</div>		
		
		<div class="equal-content-sidebar-wrapper">

		<div class="equal-content-sidebar-by-gridLex right-sidebar">

		<div class="container">

		<div class="GridLex-grid-noGutter-equalHeight">

			<div class="GridLex-col-6_sm-8_xs-12_xss-12">

				<div class="content-wrapper pb-30">

				<div class="user-profile-wrapper">

				<div class="user-profile-header clearfix">

				<div class="image">
				<img src="{{asset($data->profile)}}" alt="Image" style="width: 100px;height: 100px" />
				</div>

				<div class="content">

				<div class="rating-wrapper">
				<div class="rating-item">
					<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
				</div>
				<span> (7 review)</span>
				</div>
				<h3><a href="#" class="profiler_name">{{$data->title}} {{$data->firstname}}</a></h3>
				<span class="labeling">Music Teacher</span>
				<div class="services_tags" id="profile_services">
					
				</div>
				<a class="add_subjects" href="{{asset('')}}tutor/setting"><span class="fa fa-plus-circle"></span> Add Subjects</a>

				<ul class="address-list">
					<li><i class="fa fa-map-marker"></i>{{$data->address}}</li>
					<li><i class="fa fa-phone"></i> {{$data->phone}}</li>
					<li><i class="fa fa-envelope"></i> {{$data->email}}</li>
				</ul>

				</div>

				</div>

				<div class="user-profile-content">

				<div class="section-title text-left mb-20">
				<h3>His Background</h3>
				</div>

				<p>{{$data->about}}</p>

				<div class="user-profile-list-item">

				<div class="icon">
				<i class="fa fa-graduation-cap"></i>
				</div>

				<h4>Education</h4>
				{{$data->education}}

				</div>

				<div class="user-profile-list-item">

				<div class="icon">
				<i class="fa fa-briefcase"></i>
				</div>

				<h4>Work Experience</h4>
				{{$data->experience}}
				</div>

				<div class="user-profile-list-item">

				<div class="icon">
				<i class="fa fa-trophy"></i>
				</div>

				<h4>Awards</h4>

				{{$data->award}}
				</div>
				@if($data->youtube!="")
				<iframe width="100%" height="280" src="{{$data->youtube}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				@else	
				<a href="{{asset('')}}tutor/setting/#youtube" id="a_youtube_holder">
				<div id="video_holder">
					<p>Youtube Video Holder</p>
					<span class="fa fa-plus-circle" id="addYoutubeVideo"></span>
				</div>	
				</a>		
				@endif
				</div>

			</div>

			</div>
		</div>
		<div class="GridLex-col-6_sm-8_xs-12_xss-12">
			<div class="content-wrapper pb-30">
				<p class="heading-3">Teacher Weekly Schedule</p>
		
				<div class="profile_calendar style-4" id="profile_calendar">
					<div id="day-schedule"></div>	
				</div>
				<br>
				<p class="heading-3">Media Gallery</p>
				<div class="row" id="media_place">

		       </div>
			</div>
		</div>
       </div>
     </div>
  </div>
 </div>
</div>
</div>
<?php 
echo"<script>$(document).ready(function(){
	$('#day-schedule').data('artsy.dayScheduleSelector').deserialize($data->weekly);
});</script>";
?>

<script type="text/javascript">
	var values="{{$data->services}}";
	var splited=values.split(",");
	var i;
	for(i=0;i<splited.length; i++){
		$("#profile_services").append("<a>"+splited[i]+"</a>");
	}

</script>
  <script type="text/javascript">
  	$(document).ready(function(){
        $.ajax({
            url: "{{asset('')}}tutor/getMedia/{{$data->media1}}",
            type: "GET",
            async: false,
            success: function (msg) {
            	  $.each(msg, function (index, value) {
			     	$("#media_place").append("<div class='col-lg-4 col-md-4 col-xs-6 thumb' ><a href='{{asset('')}}"+index+"' class='fancybox' rel='ligthbox'><img  src='{{asset('')}}"+index+"' class='zoom img-fluid' style='width:100%;height:150px' ></a></div>");
			        console.log(value+" "+index);
			    });
            },
            cache: false,
            contentType: false,
            processData: false
        });
  });
  </script>

@endforeach
@endsection

@section('jsBlock')
 <script>
    (function ($) {
      $("#day-schedule").dayScheduleSelector({
       
        days: [0, 1, 2, 3, 4, 5, 6],
        interval: 30,
        startTime: '08:00',
        endTime: '24:00',
        stringDays  : ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        
      });
      /*($("#day-schedule").on('selected.artsy.dayScheduleSelector', function (e, selected) {
        console.log(selected);
      })
      $("#day-schedule").data('artsy.dayScheduleSelector').deserialize({
        '0': [['09:30', '11:00'], ['13:00', '16:30']]
      });*/
    })($);
    var value= $("#day-schedule").data('artsy.dayScheduleSelector').serialize();
    //console.log(JSON.stringify(value));
    	
  </script>
  <script type="text/javascript">
  	$(document).ready(function(){
	  $(".fancybox").fancybox({
	        openEffect: "none",
	        closeEffect: "none"
	    });
	    
	    $(".zoom").hover(function(){
			
			$(this).addClass('transition');
		}, function(){
	        
			$(this).removeClass('transition');
		});
	});
  </script>

@endsection