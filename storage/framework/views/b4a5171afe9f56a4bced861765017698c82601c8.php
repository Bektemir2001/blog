<?php $__env->startSection('user'); ?>
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col"><?php echo e($user->id); ?></th>
    </thead>
    <tbody>  
        <tr>
          <th scope="row">name</th>
          <td><?php echo e($user->name); ?></td>
        </tr>
    </tbody>
    <tbody>  
      <tr>
        <th scope="row">role</th>
        <td><?php echo e($role); ?></td>
      </tr>
  </tbody>
    <tbody>  
      <tr>
        <th scope="row">password</th>
        <td><?php echo e($user->password); ?></td>
      </tr>
  </tbody>
  </table>
  </div>
  <div class="row">
    <table class="table table-hover"> 
          <td>
            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="<?php echo e(route('admin.users.delete', $user->id)); ?>" method="POST">
              <?php echo method_field("DELETE"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/user/show.blade.php ENDPATH**/ ?>