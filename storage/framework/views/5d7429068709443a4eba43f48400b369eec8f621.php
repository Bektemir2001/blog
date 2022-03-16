<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar Menu -->
    <div class="sidebar">
      <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo e(route('user.main.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-solid fa-home"></i>
              <p>
                  Home
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('user.comments.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
                 <p>
                  Comments
                </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('user.likes.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-heart"></i>
                <p>
                  Likes
                </p>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.sidebar-menu -->

</aside>
<?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/user/includes/sidebar.blade.php ENDPATH**/ ?>