@extends('adminpanel.layout')

@section('head')
<title>Set Group Subjects | abTutorFinder</title>
@endsection

@section('content')
 <div class="main-panel">
        <div class="content-wrapper white">
	          <div class="page-header">
	            <h3 class="page-title">
	              Set Group of Subjects
	            </h3>
	          </div>
          <div class="row grid-margin off ">
          	<div class="col-md-5 col-lg-5 col-xs-12">
          		<form id="addSet">
	          			@csrf
	          			<label>Select Main Group</label>
	          			<select id="main" class="form-control" name="main" style="width: 100%" onchange="GetDatasupport()" >
	          				@foreach($group as $groups)
	          				<option value="{{$groups->id}}">{{$groups->subjectname}}</option>
	          				@endforeach
	          			</select>
	          			<br>
	          			<label>Sub Group Title</label>
	          			<input type="text" class="form-control" name="subgroup" id="subgroup" placeholder="Add Sub Group Title">
	          			<br>
	          			<label>Sub Group Details</label>
	          			<textarea class="form-control" id="detail" name="detail" style="height: 200px" placeholder="Please details"></textarea>
	          			<br>
	          			<br>
	          			<input type="submit" name="addSub" id="addSub" value="Add" class="btn btn-success">
	          	</form>
          	</div>

          	<div class="col-md-7 col-lg-7 col-xs-12">
          		 <div class="card">
		            <div class="card-body tbl_card">
		              <h4 class="card-title">Sub Group Subjects</h4>
		              <div class="row">
		                <div class="col-12">
		                  <div class="table-responsive" style="height: 450px">
		                    <table id="order-listing" class="table">
		                      <thead>
		                        <tr>
		                            <th width="25%">Slugs</th>
		                            <th width="25%">Subject Title</th>
		                            <th width="35%">Actions</th>
		                        </tr>
		                      </thead>
		                      <tbody id="getgroup">
		                      	
		                      </tbody>
		                    </table>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
          	</div>
          </div>
      </div>
 </div>
@endsection

@section('jsblock')
<script type="text/javascript">
$(document).ready(function(){
	GetData($("#main").val());
});
	$("form#addSet").submit(function(e) {
		e.preventDefault();
		if($("#addSub").val()=="Add"){
			var datastring = $("form#addSet").serialize();
		        $.ajax({
		            url: "{{route('setsave')}}",
		            type: "POST",
		            data: datastring,
		            success: function (msg) {
		                if(msg=="done"){
		                	 GetData($("#main").val());
		                	 document.getElementById("addSet").reset();
		                	 toastr.success("Set Of Group Inserted");
		                }else{
		                	toastr.error("Set of Group Not Inserted Successfully");
		                }
		            }
		        });
		}/*else if($("#addSub").val()=="Update"){
			    var form_data = new FormData(this);
		        $.ajax({
		            url: "{{route('editgroup')}}",
		            type: "POST",
		            data: form_data ,
		            async: false,
		            success: function (msg) {
		                if(msg=="done"){
		                	 GetData();
		                	 document.getElementById("addGroup").reset();
		                }
		            },
		            cache: false,
		            contentType: false,
		            processData: false
		        });
		}
       */
    });
     function deleteGroup(value){
    	var token=$("input[name='_token']").val();
        $.ajax({
            url: "{{route('deletesubs')}}",
            type: "POST",
            data:{'id':value,'_token':token},
            async: false,
            success: function (msg) {
                if(msg=="done"){
                	 GetData($("#main").val());
                	 toastr.error("Sub Group Subject Deleted Successfully");
                }
            },
            cache: false,
        });
    }
     function GetData(value){
        $.ajax({
            url: "{{asset('')}}/admin/getset/"+value,
            type: "GET",
            async: false,
            success: function (msg) {
                $("#getgroup").html(msg);
            },
            cache: false,
            contentType: false,
            processData: false
        });

    }
    function GetDatasupport(){
    		GetData($("#main").val());
    }
</script>
@endsection