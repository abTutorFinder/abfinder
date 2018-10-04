<?php $__env->startSection('head'); ?>
<title>Add Group Of Subject | AbTutorFinder</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="main-panel">
        <div class="content-wrapper white">
	          <div class="page-header">
	            <h3 class="page-title">
	              Add Group of Subjects
	            </h3>
	          </div>
          <div class="row grid-margin off ">
          		<div class="col-md-4 col-lg-4 col-xs-12">
          			<button class="btn btn-success" onclick="AddMake()">Add New</button><br><br>
          			<form id="addGroup" method="post" enctype="multipart/form-data" action="<?php echo e(route('saveGroup')); ?>">
          				<?php echo csrf_field(); ?>
          				<input type="hidden"  id="updateId" value="" name="updateId" />
          				<div class="form-group"> 
	                      <label for="subjectname">Subject Name</label>
	                      <input type="text" class="form-control" id="subjectname" name="subjectname" placeholder="Enter Subject Name" required="true">
	                    </div>

	                    <div class="form-group">
	                      <label for="subjectname">Subject Icon</label>
	                      <input type="file" class="dropify" name="groupicon" />
	                    </div>
	                    <input  type="submit" class="btn btn-success mr-2" id="addSubject" value="Add">
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
                            <th width="12%">Icon</th>
                            <th width="30%">Subject Name</th>
                            <th  width="25%">Group of Subjects</th>
                            <th width="35%">Actions</th>
                        </tr>
                      </thead>
                      <tbody id="getSubjects">
                      	
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsblock'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		GetData();
	});
	$("form#addGroup").submit(function(e) {
		e.preventDefault();
		if($("#addSubject").val()=="Add"){
			var form_data = new FormData(this);
		        $.ajax({
		            url: "<?php echo e(route('saveGroup')); ?>",
		            type: "POST",
		            data: form_data ,
		            async: false,
		            success: function (msg) {
		                if(msg=="done"){
		                	 GetData();
		                	 document.getElementById("addGroup").reset();
		                	 toastr.success("Subject Main Group Inserted Successfully");
		                }
		            },
		            cache: false,
		            contentType: false,
		            processData: false
		        });
		}else if($("#addSubject").val()=="Update"){
			    var form_data = new FormData(this);
		        $.ajax({
		            url: "<?php echo e(route('editgroup')); ?>",
		            type: "POST",
		            data: form_data ,
		            async: false,
		            success: function (msg) {
		                if(msg=="done"){
		                	 GetData();
		                	 document.getElementById("addGroup").reset();
		                	 toastr.success("Subject Main Group Updated Successfully");
		                }
		            },
		            cache: false,
		            contentType: false,
		            processData: false
		        });
		}
       
    });

    function GetData(){
    	 $(".dropify-render img").attr('src',"");
        $.ajax({
            url: "<?php echo e(route('getgroup')); ?>",
            type: "GET",
            async: false,
            success: function (msg) {
                $("#getSubjects").html(msg);
            },
            cache: false,
            contentType: false,
            processData: false
        });

    }
    function deleteGroup(value){
    	var token=$("input[name='_token']").val();
        $.ajax({
            url: "<?php echo e(route('deletegroup')); ?>",
            type: "POST",
            data:{'id':value,'_token':token},
            async: false,
            success: function (msg) {
                if(msg=="done"){
                	 GetData();
                	 toastr.error("Subject Main Group Deleted Successfully");
                }
            },
            cache: false,
        });
    }
    function editGroup(value){
    	$("#subjectname").val( $("#subject"+value).val());
    	$("#updateId").val(value);
    	src=$("#img"+value).val();
    	$(".dropify-render img").attr('src', src);
    	$("#addSubject").val("Update");
    }
    function AddMake(){
    	document.getElementById("addGroup").reset();
    	$(".dropify-render img").attr('src',"");
    	$("#addSubject").val("Add");
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>