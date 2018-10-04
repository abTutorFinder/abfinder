 <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      	
        <tr>
            <td><img src="<?php echo e(asset('')); ?><?php echo e($subject->icon); ?>" width="40px"/><input type="hidden" id="img<?php echo e($subject->id); ?>" value="/<?php echo e($subject->icon); ?>"></td>
            <td><?php echo e($subject->subjectname); ?><input type="hidden" id="subject<?php echo e($subject->id); ?>" value="<?php echo e($subject->subjectname); ?>"></td>
            <td><a class="btn btn-outline-success" href="<?php echo e(route('setgroup')); ?>">Set Group</a></td>
            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('<?php echo e($subject->id); ?>')">Delete</button>
              <button class="btn btn-outline-info"  onclick="editGroup('<?php echo e($subject->id); ?>')">Edit</button>
            </td>
        </tr>
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
