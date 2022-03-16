<?php $__env->startSection('tag'); ?>
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col"><?php echo e($tag->id); ?></th>
    </thead>
    <tbody>  
        <tr>
          <th scope="row">title</th>
          <td><?php echo e($tag->title); ?></td>
        </tr>
    </tbody>
  </table>
  </div>
  <div class="row">
    <table class="table table-hover"> 
          <td>
            <a href="<?php echo e(route('admin.tags.edit', $tag->id)); ?>" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="<?php echo e(route('admin.tags.delete', $tag->id)); ?>" method="POST">
              <?php echo method_field("DELETE"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.tag.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/tag/show.blade.php ENDPATH**/ ?>