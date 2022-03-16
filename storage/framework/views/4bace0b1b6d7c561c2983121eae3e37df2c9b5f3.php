<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar Menu -->
      <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(route('admin.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-solid fa-home"></i>
                <p>
                    Home
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.posts.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>  
                <p>
                    Posts
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.categories.index')); ?>" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                    Categories
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.tags.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-solid fa-tags"></i>
                <p>
                    Tags
                </p>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.sidebar-menu -->

  </aside><?php /**PATH /home/bektemir/Desktop/Laravel_pro/blog/resources/views/admin/includes/sidebar.blade.php ENDPATH**/ ?>