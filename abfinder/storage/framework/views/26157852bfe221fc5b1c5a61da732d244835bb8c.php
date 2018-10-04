<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user->name); ?><input type="hidden" id="uname<?php echo e($user->id); ?>" value="<?php echo e($user->name); ?>"></td>
            <td><?php echo e($user->email); ?><input type="hidden" id="uemail<?php echo e($user->id); ?>" value="<?php echo e($user->email); ?>"></td>
 			<td>***********<input type="hidden" id="upass<?php echo e($user->id); ?>" value="<?php echo e($user->password); ?>"></td>

            <td>
              <button class="btn btn-outline-danger" onclick="deleteGroup('<?php echo e($user->id); ?>')">Delete</button>
              <button class="btn btn-outline-info" onclick="editGroup('<?php echo e($user->id); ?>')">Edit</button>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>