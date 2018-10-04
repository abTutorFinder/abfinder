@extends('layout')

@section('title')
	<title></title>
@endsection

@section('content')
@foreach($datas as $data)
		<script >
			$(document).ready(function(){
				$("title").html("{{$data->title}} | abTutorFinder");
			});
		</script>
			<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
					
					<h1 class="page-title">{{$data->title}}</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="{{asset('')}}">Home</a></li>
								<li class="active">{{$data->title}}</li>
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
		
@endforeach
@endsection

@section('jsBlock')
	
@endsection