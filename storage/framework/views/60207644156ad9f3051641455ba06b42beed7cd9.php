<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.categories.create')); ?>">Create Category</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.categories.deleted_categories')); ?>">Deleted Categories</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.categories.index')); ?>">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php echo $__env->yieldContent('category'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/category/base.blade.php ENDPATH**/ ?>