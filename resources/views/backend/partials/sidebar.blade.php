<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview @if(Request::is('brand*')) menu-open @endif">
            <a href="#" class="nav-link @if(Request::is('brand*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Brand
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('brand/create')}}" class="nav-link @if(Request::is('brand/create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Brand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('brand')}}" class="nav-link @if(Request::is('brand')||Request::is('brand/*/edit')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Brand</p>
                </a>
              </li>
              
            
            </ul>
            
          </li>
          <li class="nav-item has-treeview @if(Request::is('category*')) menu-open @endif">
            <a href="#" class="nav-link @if(Request::is('category*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  ">
                <a href="{{url('category/create')}}" class="nav-link @if(Request::is('category/create')) active @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('category')}}" class="nav-link @if(Request::is('category')||Request::is('category/*/edit')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Categories</p>
                </a>
              </li>
              
            
            </ul>
            
          </li>
          <li class="nav-item has-treeview @if(Request::is('product*')) menu-open @endif">
            <a href="#" class="nav-link @if(Request::is('product*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('product/create')}}" class="nav-link @if(Request::is('product/create')) active @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('product')}}" class="nav-link @if(Request::is('product')||Request::is('product/*/edit')) active @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              
            
            </ul>
            
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>