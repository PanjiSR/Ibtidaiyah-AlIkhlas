<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard/" class="brand-link">
      <img src="/img/logo.png" alt="Al-Ikhlas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Al-Ikhlas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>     

            <li class="nav-item">
            <a href="/admin/pesan" class="nav-link {{ Request::is('admin/pesan') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Pesan
              </p>
            </a>
          </li>     

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted">
            <span>CRUD</span>
          </h6>

          <li class="nav-item {{ Request::is('admin/posts*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-file-import"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/posts/blog" class="nav-link {{ Request::is('admin/posts/blog') ? 'active' : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              @can('admin')
              <li class="nav-item">
                <a href="/admin/posts/category" class="nav-link {{ Request::is('admin/posts/category') ? 'active' : "" }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 

          <li class="nav-item">
            <a href="/admin/banner/" class="nav-link {{ Request::is('admin/banner*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
              </p>
            </a>
          </li>     
          
          <li class="nav-item">
            <a href="/admin/latest/" class="nav-link {{ Request::is('admin/latest*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-import"></i>
              <p>
                B & K Terbaru
              </p>
            </a>
          </li>     
          
          @can('admin')
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-muted">
            <span>Administrator</span>
          </h6>
          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li> 
          @endcan

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted">
            <span>User</span>
          </h6>

          <li class="nav-item">
            <a href="/admin/logout/" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 