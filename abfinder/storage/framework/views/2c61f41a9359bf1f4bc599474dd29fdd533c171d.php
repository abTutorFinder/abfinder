<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($subs->slug); ?><input type="hidden" id="subs<?php echo e($subs->id); ?>" value="<?php echo e($subs->slug); ?>"></td>
            <td><?php echo e($subs->title); ?><input type="hidden" id="subs<?php echo e($subs->id); ?>" value="<?php echo e($subs->title); ?>"></td>

            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('<?php echo e($subs->id); ?>')">Delete</button>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>