@extends("layout")

@section('title')
<title>Setting | abTutorFinder</title>
@endsection


@section('content')

@foreach($datas as $data)
<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{asset($data->profile)}}" class="img-responsive" alt="" style="width: 120px;height: 120px;">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{$data->name}}
					</div>
					<div class="profile-usertitle-job">
						Music Teacher
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a data-toggle="tab" href="#add_services">
							<i class="fa fa-briefcase" ></i>
							Add Services</a>
						</li>
						<li>
							<a href="#profile_setting" data-toggle="tab">
							<i class="fa fa-user"></i>
							Profile Setting</a>
						</li>	
						<li>
							<a href="#youtube" data-toggle="tab">
							<i class="fab fa-youtube"></i>
							Attach Youtube Video</a>
						</li>
						<li>
							<a href="#media_gallery" data-toggle="tab">
							<i class="fa fa-grip-horizontal"></i>
							Media Gallery</a>
						</li>
						<li>
							<a href="#AccountSetting" data-toggle="tab">
							<i class="fa fa-cogs"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   	<div class="tab-content">

			   		<!-- Add Services -->
				    <div id="add_services" class="tab-pane fade in active">
				     <h3>Add Services</h3>
				     <hr>
				     <h4>Select Multiple Services Here</h4>
					     <select id='services' multiple='multiple'>
					     	@foreach($groups as $group)
					     			<option value="{{$group['subjectname']}}" style="background-color: #e1e1e1;color:#232323">{{$group['subjectname']}}</option>
					     			@foreach($group['subgroup'] as $subgroup)
					     				<option value="{{$subgroup['title']}}">{{$subgroup['title']}}</option>
					     			@endforeach
					     	@endforeach
						 </select>
						 @csrf
				    </div>
			   		<!-- Add Services -->

			   		<!-- Profile Setting -->
				    <div id="profile_setting" class="tab-pane fade in">
				      <h3>Menu 2</h3>
				      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <!-- Profile Setting -->

				    <!-- Media Gallery-->
				    <div id="media_gallery" class="tab-pane fade in">
					     <h3>Media Gallery</h3>
					     <hr>
					     <h4>Add Media Files Here</h4>
					     <form  method="post" action="{{route('saveMediaa')}}" enctype="multipart/form-data">
					     	 {{ csrf_field() }}
					     	 <input type="hidden" name="media_id" value="{{$data->media1}}">
						     <input type="file" id='fileUpload' name="uploadMedia[]" accept="image/*,video/*" multiple >
						     <br>
						     <input type="submit" name="submit" value="Upload"/>
						 </form>
					     <br><br>
					     <hr>
					     <div class="row" id="media_place"></div>
					     
				    </div>
				    <!-- Media Gallery-->

				    <!-- Media Gallery-->
				    <div id="youtube" class="tab-pane fade in">
					     <h3 >Attach Youtube Video</h3>
					     <hr>
					     <h4 style="margin-bottom: 0px !important">Paste Youtube Emded Code URL</h4>
					     <a  data-toggle="collapse" data-target="#exampleVideo">See Example</a>
					     <div id="exampleVideo" class="collapse">
						    <img src="{{asset('images/exm1.jpg')}}" style="width: 80%">
						 </div>
						 <br>
						 <br>
						 <form class="form-inline col-md-12 col-lg-12" >
						 	@csrf
						 	<div class="row">
						 			<div class="col-md-9 col-xs-12 col-lg-9" style="padding-left: 0px">
						    			<input type="url" class="form-control" id="AddVideoUrl" placeholder="Embed Code URL Paste here" style="width: 100%" onchange="youtubeChange()">
									</div>
						 			<div class="col-md-3 col-xs-12 col-lg-3">
						 				<button type="submit" class="btn btn-success" onclick="SaveYoutube()">Save</button>
						 				<button type="submit" class="btn btn-danger" onclick="SaveYoutubeRemove()">Remove</button>
						 			</div>
						 	</div>
						</form>
						<br><br>
						@if($data->youtube!="")
						<br>
						<iframe width="100%" height="480" src="{{$data->youtube}}" id="youtubeIframe" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						@else	
						<br>
						<iframe width="100%" height="480" src="" id="youtubeIframe" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	
						@endif
				    </div>
				    <!-- Media Gallery-->


				    <!-- Account Setting -->
				    <div id="AccountSetting" class="tab-pane fade in">
				      <h3>Account Setting</h3>
				      <p>Enter your current password and enter your new password. Click on update button </p>
				      <br>
				      <div class="col-md-6">
					      <form id="accountform">
					      		<div class="form-group">
					      			<label>Enter your current password</label>
					      			<input type="password" name="current" class="form-control" >
					      		</div>
					      <hr/>
				      		<div class="form-group">
				      			<label>Enter your new password</label>
				      			<input type="password" name="newpassword" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label>Enter your new confirm password</label>
				      			<input type="password" name="newpassword" class="form-control" >
				      		</div>
				      		<br>
				      		<input type="submit" class="btn btn-success" value="Password Change">
					      </form>
				      </div>
				    </div>
				    <!-- Account Setting -->


				  </div>
				</div>
            </div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		getServices();
		window.location.href
	});
	function getServices(){
		values="{{$data->services}}";
		//console.log(values.split(','));
		$('#services').multiSelect('select', values.split(','));
	}
	$(document).ready(function(){
		if(window.location.href=="{{asset('')}}tutor/setting/#media_gallery"){
			$(".tab-pane").removeClass('active');
			$("#media_gallery").addClass('active');
		}
		if(window.location.href=="{{asset('')}}tutor/setting/#youtube"){
			$(".tab-pane").removeClass('active');
			$("#youtube").addClass('active');
		}
	});
</script>
<script type="text/javascript">
	  	$(document).ready(function(){
	  	$('input#fileUpload').imageuploadify();
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
  	$(document).ready(function(){
        $.ajax({
            url: "{{asset('')}}tutor/getMedia/{{$data->media1}}",
            type: "GET",
            async: false,
            success: function (msg) {
            	  $.each(msg, function (index, value) {
			     	$("#media_place").append("<div class='col-lg-3 col-md-3 col-xs-6 thumb' ><a href='{{asset('')}}"+index+"' class='fancybox' rel='ligthbox'><img  src='{{asset('')}}"+index+"' class='zoom img-fluid' style='width:100%;height:150px' ></a></div>");
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
<script type="text/javascript">
	$("form#accountform").submit(function(e){
		var formdata=new FormData(this);
		e.preventDefault();
		$.ajax({
			url:"{{route('tutorpwdChange')}}",
			type:"POST",
			data:formdata,
            async: false,
            success:function(msg){
            	if(msg=="1"){
            		toastr.success("Your password has been changed");
            	}
            },
          cache: false,
          contentType: false,
          processData: false
		});
	})
</script>
<script type="text/javascript" src={{asset('js/multi-select.js')}}></script>

<script type="text/javascript">
  // run callbacks
      $('#services').multiSelect({
      	 selectableHeader: "<div class='custom-header'>Selectable Services</div>",
  		 selectionHeader: "<div class='custom-header'>Selected Services</div>",

      afterSelect: function(values){
        SaveServices('1');
      },
      afterDeselect: function(values){
        SaveServices('0');
      }
    });
</script>
<script type="text/javascript">
     //Save Services Here 
     function SaveServices(values){

     	//alert($("#services").val())
     	token=$("input[name=_token]").val();
     	value_id="{{Session::get('user')}}";
     	$.ajax({
            url: "{{route('SaveServices')}}",
            type: "POST",
            data:{'id':value_id,'_token':token,'services':$("#services").val().toString()},
            async: false,
            success: function (msg) {
                if(msg=="done"){
	                	if(values=='1'){
	                	 	toastr.success("Your service has been added");
	                	}else{
	                	 	toastr.warning("Your service has been removed");
	                	}
                }
            },
            cache: false,
        });
     } 
  </script>
  <script type="text/javascript">
  	function youtubeChange(){
  		if($("#AddVideoUrl").val()!=""){
			var url=$("#AddVideoUrl").val();
	  		$("#youtubeIframe").attr("src",url);
  		}
  	}
  </script>
  <script type="text/javascript">
  	function SaveYoutube(){
     	//alert($("#services").val())
     	token=$("input[name=_token]").val();
     	value_id="{{Session::get('user')}}";
     	var url=$("#AddVideoUrl").val();
     	$.ajax({
            url: "{{route('SaveYoutube')}}",
            type: "POST",
            data:{'id':value_id,'_token':token,'url':url},
            async: false,
            success: function (msg) {
                if(msg=="done"){
	                toastr.success("Youtube Video Emded Code Saved!");
                }
            },
            cache: false,
        });

  		event.preventDefault();
     } 
     function SaveYoutubeRemove(){
  		event.preventDefault();
     	//alert($("#services").val())
     	token=$("input[name=_token]").val();
     	value_id="{{Session::get('user')}}";
     	var url=$("#AddVideoUrl").val();
     	$.ajax({
            url: "{{route('SaveYoutube')}}",
            type: "POST",
            data:{'id':value_id,'_token':token,'url':""},
            async: false,
            success: function (msg) {
                if(msg=="done"){
                	$("#AddVideoUrl").val('');
                	$("#youtubeIframe").attr("src",'');
	                toastr.warning("Youtube Video Emded Code Removed!");
                }
            },
            cache: false,
        });
     } 
     
  </script>
@endsection
