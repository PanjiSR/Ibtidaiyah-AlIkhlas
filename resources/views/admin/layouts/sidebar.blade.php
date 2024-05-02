<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
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
              <i class="nav-icon fas fa-file"></i>
              <p>
                B & K Terbaru
              </p>
            </a>
          </li>     

          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li> 

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>