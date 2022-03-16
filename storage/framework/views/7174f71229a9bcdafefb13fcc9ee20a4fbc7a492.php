<?php $__env->startSection('content'); ?>

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 fetured-post blog-post aos-init aos-animate" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="<?php echo e(url('/storage', $post->main_image)); ?>" alt="blog post">
                    </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category"><?php echo e($post->category->title); ?></p>

                            <form action="<?php echo e(route('post.like.store', $post->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <span>
                                    <?php echo e($post->liked_users_count); ?>

                                </span>
                                <button type="submit" class="border-0 bg-transparent">
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(auth()->user()->likedPosts->contains($post->id)): ?>
                                            <i class="fas fa-heart"></i>
                                    <?php else: ?>
                                            <i class="far fa-heart"></i>
                                    <?php endif; ?>
                                <?php endif; ?>
                                </button>
                            </form>
                        </div>
                    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="blog-post-permalink">
                        <h6 class="blog-post-title"><?php echo e($post->title); ?></h6>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        <?php $__currentLoopData = $post_r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 blog-post aos-init" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="<?php echo e(url('/storage', $post->preview_image)); ?>" alt="blog post">
                                </div>
                                <p class="blog-post-category"><?php echo e($post->category->title); ?></p>
                                <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="blog-post-permalink">
                                    <h6 class="blog-post-title"><?php echo e($post->title); ?></h6>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar aos-init" data-aos="fade-left">
                <div class="widget widget-post-carousel">
                    <h5 class="widget-title">Post Lists</h5>
                    <div class="post-carousel">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class=""></li>
                                <li data-target="#carouselId" data-slide-to="1" class=""></li>
                                <li data-target="#carouselId" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <figure class="carousel-item">
                                    <img src="<?php echo e(asset('assets/images/blog_widget_carousel.jpg')); ?>" alt="First slide">
                                    <figcaption class="post-title">
                                        <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                    </figcaption>
                                </figure>
                                <figure class="carousel-item">
                                        <img src="<?php echo e(asset('assets/images/blog_7.jpg')); ?>" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                </figure>
                                <div class="carousel-item active">
                                        <img src="<?php echo e(asset('assets/images/blog_5.jpg')); ?>" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Post List</h5>
                    <ul class="post-list">
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="<?php echo e(asset('assets/images/blog_widget_1.jpg')); ?>" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="<?php echo e(asset('assets/images/blog_widget_2.jpg')); ?>" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="<?php echo e(asset('assets/images/blog_widget_3.jpg')); ?>" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="<?php echo e(asset('assets/images/blog_widget_4.jpg')); ?>" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Categories</h5>
                    <img src="<?php echo e(asset('assets/images/blog_widget_categories.jpg')); ?>" alt="categories" class="w-100">
                </div>
            </div>
        </div>
    </div>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/post/index.blade.php ENDPATH**/ ?>