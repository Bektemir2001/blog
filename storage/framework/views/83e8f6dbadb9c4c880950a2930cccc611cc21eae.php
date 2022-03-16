<?php $__env->startSection('content'); ?>


<section class="content">
  <form action="<?php echo e(route('user.comments.update', $comment->id)); ?>" method="POST">
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
      <label>Comment</label>
      <input type="text" class="form-control w-50" name="comment" placeholder="Enter title" value="<?php echo e($comment->comment); ?>">
      <button type="submit" class="btn btn-primary">Update</button>

  </form>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/user/comment/edit.blade.php ENDPATH**/ ?>