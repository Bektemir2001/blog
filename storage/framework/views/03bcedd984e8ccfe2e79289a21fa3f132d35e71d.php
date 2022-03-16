<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($comment->id); ?></th>
            <td><?php echo e($comment->comment); ?></td>
            <td><a href="<?php echo e(route('user.comments.show', $comment->id)); ?>"><i class="fas fa-eye"></i></a></td>
            <td><a href="<?php echo e(route('user.comments.edit', $comment->id)); ?>" class="text-success"><i class="fas fa-pen"></i></a></td>
            <td>
              <form action="<?php echo e(route('user.comments.delete', $comment->id)); ?>" method="POST">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button title="submit" class="border-0 bg-transparent">
                    <i title="submit" class="fas fa-trash text-danger" role="button"></i>
                </button>
              </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/user/comment/index.blade.php ENDPATH**/ ?>