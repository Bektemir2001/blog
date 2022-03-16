<?php $__env->startSection('post'); ?>
    

<section class="content">
  <form action="<?php echo e(route('admin.posts.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
      <label>Title</label>
      <input type="text" class="form-control w-25" name="title" placeholder="Enter title" value="<?php echo e(old('title')); ?>">

      <div class="text-danger">
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
      </div>

      <label>Content</label>
      <textarea id="summernote" name="content"><?php echo e(old('content')); ?></textarea>

      <div class="text-danger">
        <?php $__errorArgs = ['content'];
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
      <label>Preview</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      
        <label>Main image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
        <div class="form-group">
          <label>Categories</label>
          <select class="custom-select form-control-border" name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option 
              <?php echo e(old('category_id') == $category->id ? ' selected':''); ?>

              value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group">
          <label>Tags</label>
          <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tag[]">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option 
              <?php echo e(is_array(old('tag')) && in_array($tag->id, old('tag')) ? ' selected':''); ?>

              value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

  </form>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.post.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/post/create.blade.php ENDPATH**/ ?>