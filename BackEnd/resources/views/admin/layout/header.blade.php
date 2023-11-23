<aside class="left-sidebar">
    <div>
      <div
        class="brand-logo d-flex align-items-center justify-content-between"
      >
        <a href="./index.html" class="text-nowrap logo-img">
          <img
            src="../assets/images/logos/dark-logo.svg"
            width="180"
            alt=""
          />
        </a>
        <div
          class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
          id="sidebarCollapse"
        >
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{ route('dashboard') }}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          {{-- Tille --}}
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Product</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="#" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Danh mục</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('product') }}" aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Sản phẩm</span>
            </a>
          </li>
          
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="./ui-card.html"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Size</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="./ui-forms.html"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Màu sắc</span>
            </a>
          </li>
         
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">User</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="./authentication-login.html"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-user"></i>
              </span>
              <span class="hide-menu">Thành viên</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="./authentication-register.html"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-shopping-cart"></i>
              </span>
              <span class="hide-menu">Quyền</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Order</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="./icon-tabler.html"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-list"></i>
              </span>
              <span class="hide-menu">Các đơn hàng</span>
            </a>
          </li>
          
        </ul>
        
      </nav>
    </div>
  </aside>