<?php $__env->startSection('user'); ?>
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th colspan="3" class="text-center">Actions</th>
    </thead>
    <tbody>
      <?php $__currentLoopData = $deleted_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <tr>
          <th scope="row"><?php echo e($user->id); ?></th>
          <td><?php echo e($user->name); ?></td>
          <td>
            <a href="<?php echo e(route('admin.users.restore', $user->id)); ?>" class="btn btn-block btn-success btn-sm">
              Restor
            </a>
        </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/user/deleted_users.blade.php ENDPATH**/ ?>