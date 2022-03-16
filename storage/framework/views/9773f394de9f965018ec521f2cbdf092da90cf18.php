<?php $__env->startSection('category'); ?>
    

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
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <tr>
          <th scope="row"><?php echo e($category->id); ?></th>
          <td><?php echo e($category->title); ?></td>
          <td><a href="<?php echo e(route('admin.categories.show', $category->id)); ?>"><i class="fas fa-eye"></i></a></td>
          <td><a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="text-success"><i class="fas fa-pen"></i></a></td>
          <td>
            <form action="<?php echo e(route('admin.categories.delete', $category->id)); ?>" method="POST">
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
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.category.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/category/index.blade.php ENDPATH**/ ?>