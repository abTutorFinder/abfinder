@extends("layout")

@section('title')
<title>Profile | abTutorFinder</title>
@endsection


@section('content')

@foreach($datas as $data)
<div class="container content">
		<div class="profile-div"></div>
		<div class="row" id="pprofile_images">
			<div class="col-md-3 col-lg-3">
				<div id="pp_images_div">
					<img src="{{asset('')}}{{$data->profile}}">
				</div>
			</div>
			<div class="col-md-9 col-lg-9"></div>
		</div>
		<div class="row pprofile_details">
			<div class="col-md-3 col-lg-3"></div>
			<div class="col-md-6 col-lg-6"><b class="pprofile_name">{{$data->name}} | <small>Music Teacher</small></b></div>
			<div class="col-lg-3 col-md-3">
				<button class="btn btn-info hired_btn">Hire</button>
			</div>
		</div>


		<!-- Main -->
		<div class="GridLex-grid-noGutter-equalHeight">

			<div class="GridLex-col-6_sm-8_xs-12_xss-12">

				<div class="content-wrapper pb-30">

				<div class="user-profile-wrapper">

				<div class="user-profile-header clearfix">


				<div class="content">

				<div class="services_tags" id="profile_services">
					
				</div>
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
		<!--content -->
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