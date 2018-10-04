<?php $__env->startSection('head'); ?>
<title>Add User | abTutorFinder</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="main-panel">
        <div class="content-wrapper white">
	          <div class="page-header">
	            <h3 class="page-title">
	              Add User
	            </h3>
	          </div>
          <div class="row grid-margin off ">
          		<div class="col-md-4 col-lg-4 col-xs-12">
          			<button class="btn btn-success">Add New User</button>
          			<br>
          			<div id="errordefine" style="margin-top: 10px"></div>
          			<form id="adduser" style="margin-top: 20px">
          				<?php echo csrf_field(); ?>
          				<input type="hidden" id="updateId" value="" name="updateId">
          					<label>User Name</label>
          					<input type="text" name="name" id="name" class="form-control" placeholder="Please Enter Name" >
          					<br>
          					<label>Email</label>
          					<input type="email" name="email" id="email" class="form-control" placeholder="Please Enter Name" >

          					<br>
          					<label>Password</label>
          					<input type="password" name="password" id="password" class="form-control" placeholder="Please Enter password" >

          					<br>
          					<input type="submit" name="add" value="Add" id="AddUserBtn" class="btn btn-success">
          			</form>
          		</div>
          		<div class="col-md-8 col-lg-8 col-xs-12">
          			
          <div class="card">
            <div class="card-body tbl_card">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="20%">Name</th>
                            <th width="30%">Email</th>
                            <th  width="20%">Password</th>
                            <th width="30%">Actions</th>
                        </tr>
                      </thead>
                      <tbody id="getusers">
                      	
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
 </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('jsblock'); ?>
<script type="text/javascript">
$(document).ready(function(){
	GetData();
});	
 function GetData(){
    $.ajax({
        url: "<?php echo e(route('getuser')); ?>",
        type: "GET",
        async: false,
        success: function (msg) {
            $("#getusers").html(msg);
        },
        cache: false,
        contentType: false,
        processData: false
    });
}


$("form#adduser").submit(function(e) {
		e.preventDefault();
		if($("#AddUserBtn").val()=="Add"){
			var datastring = $("#adduser").serialize();
		        $.ajax({
		            url: "<?php echo e(route('saveuser')); ?>",
		            type: "POST",
		            data:datastring ,
		            success: function (msg) {
		                if(msg=="done"){
		                	 GetData();
		                	 document.getElementById("adduser").reset();
						   $('#errordefine').html('');
		                	 toastr.success("User has been added");
		                }
		            },
		            error: function (xhr) {
						   $('#errordefine').html('');
						   $.each(xhr.responseJSON.errors, function(key,value) {
						     $('#errordefine').append('<div class="alert alert-danger">'+value+'</div');
						 }); 
						}
		        });
		}else if($("#AddUserBtn").val()=="Update"){
			    var datastring = $("#adduser").serialize();
		        $.ajax({
		            url: "<?php echo e(route('updateuser')); ?>",
		            type: "POST",
		            data:datastring ,
		            success: function (msg) {
		                if(msg=="done"){
		                   GetData();
						   $('#errordefine').html('');
    					   $("#AddUserBtn").val("Add");
						   document.getElementById("adduser").reset();
		                   toastr.success("User has been Details Updated");
		                }
		            },
		            error: function (xhr) {
  						   $('#errordefine').html('');
  						   $.each(xhr.responseJSON.errors, function(key,value) {
  						     $('#errordefine').append('<div class="alert alert-danger">'+value+'</div');
  						 }); 
						}
		        });
		}
       
    });

	function editGroup(value){
    	$("#name").val( $("#uname"+value).val());
    	$("#email").val( $("#uemail"+value).val());
    	$("#password").val("");
    	$("#updateId").val(value);
    	$("#AddUserBtn").val("Update");
    }
    function Addnew(){
		document.getElementById("adduser").reset();
    	$("#AddUserBtn").val("Add");
    }
    function deleteGroup(value){
    	var token=$("input[name='_token']").val();
        $.ajax({
            url: "<?php echo e(route('deleteuser')); ?>",
            type: "POST",
            data:{'id':value,'_token':token},
            async: false,
            success: function (msg) {
                if(msg=="done"){
                	 GetData();
                	 toastr.error("User Deleted Successfully");
                }
            },
            cache: false,
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>