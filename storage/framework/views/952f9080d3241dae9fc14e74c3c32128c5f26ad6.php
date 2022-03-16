<?php $__env->startSection('post'); ?>
    

<section class="content">
  <form action="<?php echo e(route('admin.posts.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
      <label>Title</label>
      <input type="text" class="form-control w-25" name="title" placeholder="Enter title" value="<?php echo e($post->title); ?>">


      <label>Content</label>
      <textarea id="summernote" name="content"><?php echo e($post->content); ?></textarea>

      <label>Preview</label>
      <div class="mb-2">
        <img src="<?php echo e(url('storage/', $post->preview_image)); ?>" alt="preview_image">
      </div>
      <div class="input-group w-50">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image" value="<?php echo e($post->preview_image); ?>">
          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
      
      <label>Main image</label>
        <div class="mb-2">
          <img src="<?php echo e(url('storage/', $post->main_image)); ?>" alt="main_image">
        </div>
        <div class="input-group w-50">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image" value="<?php echo e($post->main_image); ?>">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>

        <label>Categories</label>
        <div>
          <select class="custom-select form-control-border w-50" name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option 
              <?php echo e(old('category_id') == $category->id ? ' selected':''); ?>

              value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group">
          <label class="mb-3">Tags</label>
          <select class="select2 select2-hidden-accessible w-50" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tag[]">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option 
              <?php echo e(is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected':''); ?>

              value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

  </form>
      
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.post.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/post/edit.blade.php ENDPATH**/ ?>