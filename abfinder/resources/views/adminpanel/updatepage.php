@extends('adminpanel.layout')

@section('head')
<title>Add Page | abTutorFinder</title>
@endsection


@section('content')
@foreach($pageData as $data)
<div class="main-panel">
        <div class="content-wrapper white">
	          <div class="page-header">
	            <h3 class="page-title">
	              {{$data['title']}}
	            </h3>
	          </div>
          <div class="row grid-margin off " style="background-color: #fff">
          		<div class="col-md-9 col-lg-9 col-xs-12">
          			@csrf
          			<input type="text" onkeyup="NewUrl()" name="pageTitle" id="pageTitle" placeholder="Page Title" class="form-control" value="{{$data['title']}}" />
          			<span style="color: red;font-size: 13px;" id="pageError"></span>
          			<br>
          			<div id="pageUrl">
          				<span style="color:#e34fef">{{asset('')}}<span id="newPageName">{{$data['slug']}}</span></sapn>
          			</div>
          			<br>
          			<div id="NotePage">
                {{$data['content']}}   
                </div>

          		</div>
          		<div class="col-md-3 col-lg-3 col-xs-12" style="padding:10px 20px;background-color: #f1f1f1">
          			<span>Click here to update page</span>
          			<button class="btn btn-success btn-block" style="margin-top: 10px;" onclick="getCode()">Update</button>
                <br><br>
                <span>Page Link</span>
                <a href="{{asset('')}}/{{$data['slug']}}">{{asset('')}}/{{$data['slug']}}</a>
          		</div>
          </div>
      </div>
  </div>

@endforeach
@endsection


@section('jsblock')
<script type="text/javascript" src="{{asset('admin/js/summernote.min.js')}}"></script>
<script type="text/javascript">
	function NewUrl(){
		value=$("#pageTitle").val();
		str=value.replace(" ","-")
		$("#newPageName").html(str);
	}
</script>
<script>
    $(document).ready(function() {
        $('#NotePage').summernote();
    });
    function getCode(){
    	var codeStr = $('#NotePage').summernote('code');
    	var title=$("#pageTitle").val();
    	var token=$("input[name=_token]").val();
    	if(title!=""){
    		$.ajax({
	    		url:"{{route('savePage')}}",
	    		type:"POST",
	    		data:{'_token':token,'title':title,'content':codeStr},
	    		async:false,
	    		success:function(msg){
	    			if(msg=="1"){
	    				toastr.success("Page has been created");
	    			}else{
	    				toastr.error("Error: Page not create ");
	    			}
	    		}
	    	});
    	}else{
    		$("#pageError").html('Page Name Required');
    	}
    	
    }
  </script>
@endsection