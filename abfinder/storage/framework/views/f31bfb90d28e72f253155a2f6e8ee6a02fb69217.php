<?php $__env->startSection('head'); ?>
<title>All Pages | abTutorFinder</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <div class="main-panel">
        <div class="content-wrapper white">
            <div class="page-header">
              <h3 class="page-title">
                All Pages 
                <br><br>
                <a href="<?php echo e(asset('')); ?>admin/add-page" class="btn btn-success" target="blank">Add New Page</a>
              </h3>
            </div>
          <div class="row grid-margin off " style="background-color: #fff">

  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Page Name</th>
                          <th>Page Link</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->title); ?></td>
                          <td><a href="<?php echo e(asset('')); ?><?php echo e($data->slug); ?>" target="blank"><?php echo e(asset('')); ?><?php echo e($data->slug); ?></a></td>
                          <td><a href="<?php echo e(asset('')); ?>admin/update-page/<?php echo e($data->slug); ?>" class="btn btn-info"  target="blank">Edit</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('jsblock'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminpanel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>