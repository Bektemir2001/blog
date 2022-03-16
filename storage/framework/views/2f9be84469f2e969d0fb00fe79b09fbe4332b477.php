<?php $__env->startSection('user'); ?>
    

<section class="content">
  <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST" class="w-25">
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
      <div class="text-danger">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <label>Email</label>
      <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>">
      <div class="text-danger">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="form-group">
        <label>Role</label>
        <select class="custom-select form-control-border" name="role">
          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option 
            <?php echo e($id == $user->role ? ' selected':''); ?>

            value="<?php echo e($id); ?>"><?php echo e($role); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <div class="form-group">
        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
      </div>
      
      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      

  </form>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/user/edit.blade.php ENDPATH**/ ?>