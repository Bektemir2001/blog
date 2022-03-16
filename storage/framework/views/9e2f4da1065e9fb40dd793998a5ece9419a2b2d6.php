<?php $__env->startSection('content'); ?>

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog single page</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by Richard Searls• <?php echo e($date->format('F d')); ?>, <?php echo e($date->format('Y')); ?>• <?php echo e($date->format('H:i')); ?> pm• Featured • <?php echo e($post->comments->count()); ?> Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo e(url('/storage', $post->main_image)); ?>" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <?php echo $post->content; ?>

                    </div>
                </div>
                <div class="row">
                    <label>
                        Preview image
                    </label>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4 mb-3" data-aos="fade-right">
                        <img src="<?php echo e(url('/storage', $post->preview_image)); ?>" alt="blog post" class="img-fluid">
                    </div>
                </div>
            </section>
            <section>
                <form action="<?php echo e(route('post.like.store', $post->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="border-0 bg-transparent">
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->likedPosts->contains($post->id)): ?>
                                <i class="far fa-heart"></i>
                            <?php else: ?>
                                <i class="fas fa-heart"></i>
                            <?php endif; ?>
                        <?php endif; ?>
                    </button>
                </form>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <?php if($related_posts->count()): ?>
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                                <?php $__currentLoopData = $related_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Rpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="<?php echo e(url('/storage', $Rpost->main_image)); ?>" alt="related post" class="post-thumbnail">
                                        <p class="post-category"><?php echo e($Rpost->category->title); ?></p>
                                        <h5 class="post-title"><a href="<?php echo e(route('posts.show', $Rpost->id)); ?>"><?php echo e($Rpost->title); ?></a></h5>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </section>
                    <section class="comment-list">
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="comment-text">
                            <span class="username">
                                <div>
                                  <h5><?php echo e($comment->user->name); ?></h5>
                                </div>
                              <span class="text-muted float-right"><?php echo e($comment->getDateasCarbon($comment)->diffForHumans()); ?></span>
                            </span><!-- /.username -->
                                <?php echo e($comment->comment); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                        <form action="<?php echo e(route('post.comment.store', $post->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="comment" id="comment" class="form-control" placeholder="Comment" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/post/show.blade.php ENDPATH**/ ?>