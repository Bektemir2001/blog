<?php $__env->startSection('tag'); ?>
    

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
      <?php $__currentLoopData = $deleted_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <tr>
          <th scope="row"><?php echo e($tag->id); ?></th>
          <td><?php echo e($tag->title); ?></td>
          <td>
            <a href="<?php echo e(route('admin.tags.restore', $tag->id)); ?>" class="btn btn-block btn-success btn-sm">
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
<?php echo $__env->make('admin.tag.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/tag/deleted_tags.blade.php ENDPATH**/ ?>