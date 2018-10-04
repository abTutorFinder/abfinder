@extends('layout')

@section('title')
	<title>abTutorFinder</title>
@endsection

@section('content')


		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero overlay-3 HeroHeader" style="background-image:url({{asset('images/home.jpg')}});min-height: 100vh">
				<div class="container long">
						<div class="main-search-wrapper">
				
						<h2 class="text-center " >What would you like to learn?</h2>
						<br>
						<center>
						    <div class="col-md-12" style="float: none ">
								<div class="row Tutor_option " >
									
										<img src="{{asset('images/icons/music-player.png')}}"  style="width: 64px">
									
								</div>
							</div>
						
							<div class="col-md-6" style="float: none ">
								
									@csrf
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
							@foreach($groups as $group)
							<div class="col-md-4 col-lg-4 col-xs-6 category" >
								<center>
									<a href="{{asset('')}}tutor/find-a-tutor/{{$group['subjectname']}}/" style="color:#fff" target='_blank' ><img src="{{$group['icon']}}" class="cate_image">
									<span class="main_category">{{$group['subjectname']}}</span></a>
									<br>
								
								@foreach($group['subgroup'] as $subgroup)

										<a href="{{asset('')}}tutor/find-a-tutor/{{$subgroup['title']}}/" target='_blank' class="home_tags">{{$subgroup['title']}}</a>
									
								@endforeach
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
							
							@endforeach
							

						</div>
						
				</div>
			</div>
		
		</div>
</div>
			<!-- end hero-header -->
<script type="text/javascript">
	function searchHere(){
	 var valuea=$("#headerSearch").val();
	 window.location.assign("{{asset('')}}tutor/find-a-tutor/"+valuea);
}
$("#headerSearch").keypress(function(e) {
    if(e.which == 13) {
        var valuea=$("#headerSearch").val();
	    window.location.assign("{{asset('')}}tutor/find-a-tutor/"+valuea);
    }
});
</script>

@endsection

@section('jsBlock')

<script type="text/javascript">
$( "#headerSearch" ).keypress(function() {
	    var valuea=$("#headerSearch").val();
        $.ajax({
            url: "{{asset('')}}tutor/tutorsuggest/"+valuea,
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
@endsection