<?php $__env->startSection('head'); ?>
<title>Dashboard | abTutorFinder  </title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
        </div>
        </div>  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('jsblock'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>