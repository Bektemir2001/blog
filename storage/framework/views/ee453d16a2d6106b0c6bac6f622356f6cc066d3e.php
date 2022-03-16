<?php $__env->startSection('content'); ?>


<section class="content">
  <label>Preview image</label>
  <div class="mb-2">
    <img class="w-25" src="<?php echo e(url('storage/', $post->preview_image)); ?>" alt="preview_image">
  </div>
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col"><?php echo e($post->id); ?></th>
    </thead>
    <tbody>
        <tr>
          <th scope="row">title</th>
          <td><?php echo e($post->title); ?></td>
        </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">content</th>
        <td><?php echo e($post->content); ?></td>
      </tr>
  </tbody>
  <tbody>
    <tr>
      <th scope="row">category</th>
      <td><?php echo e($category->title); ?></td>
    </tr>
</tbody>
  </table>
  </div>
  <label>Main image</label>
  <div>
    <img class="w-50" src="<?php echo e(url('storage/', $post->main_image)); ?>" alt="preview_image">
  </div>
  <div>
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th scope="col">comment</th>
            <th scope="col"><?php echo e($comment->comment); ?></th>
        </thead>
    </table>
  </div>
  <div class="row">
    <table class="table table-hover">
          <td>
            <a href="<?php echo e(route('user.comments.edit', $post->id)); ?>" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="<?php echo e(route('user.comments.delete', $post->id)); ?>" method="POST">
              <?php echo method_field("DELETE"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/user/comment/show.blade.php ENDPATH**/ ?>