<?php $__env->startSection('category'); ?>
    

<section class="content">
  <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST" class="w-25">
    <?php echo csrf_field(); ?>
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter title">

      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <?php echo e($message); ?>

      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  </form>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.category.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/category/create.blade.php ENDPATH**/ ?>