<?php $__env->startSection('head'); ?>
<title>Add Page | abTutorFinder</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="main-panel">
        <div class="content-wrapper white">
	          <div class="page-header">
	            <h3 class="page-title">
	              Add New page
	            </h3>
	          </div>
          <div class="row grid-margin off " style="background-color: #fff">
          		<div class="col-md-9 col-lg-9 col-xs-12">
          			<?php echo csrf_field(); ?>
          			<input type="text" onkeyup="NewUrl()" name="pageTitle" id="pageTitle" placeholder="Page Title" class="form-control" />
          			<span style="color: red;font-size: 13px;" id="pageError"></span>
          			<br>
          			<div id="pageUrl">
          				<span style="color:#e34fef"><?php echo e(asset('')); ?><span id="newPageName"></span></sapn>
          			</div>
          			<br>
          			<div id="NotePage"></div>

          		</div>
          		<div class="col-md-3 col-lg-3 col-xs-12" style="padding:10px 20px;background-color: #f1f1f1">
          			<span>Click here to add/update page</span>
          			<button class="btn btn-success btn-block" style="margin-top: 10px;" onclick="getCode()">Add Page</button>
          		</div>
          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('jsblock'); ?>
<script type="text/javascript" src="<?php echo e(asset('admin/js/summernote.min.js')); ?>"></script>
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
	    		url:"<?php echo e(route('savePage')); ?>",
	    		type:"POST",
	    		data:{'_token':token,'title':title,'content':codeStr},
	    		async:false,
	    		success:function(msg){
	    			if(msg!=""){
	    				toastr.success("Page has been created");
              window.location.assign("<?php echo e(asset('')); ?>admin/update-page/"+msg);
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>