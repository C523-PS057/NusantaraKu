<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' :'' }}" aria-current="page" href="/admin/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/province*') ? 'active' :'' }}" href="/admin/province">
            <span data-feather="file"></span>
            Provinsi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/category*') ? 'active' :'' }}" href="/admin/category">
            <span data-feather="file"></span>
            Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/budaya*') ? 'active' :'' }}" href="/admin/budaya">
            <span data-feather="file"></span>
            budaya
          </a>
        </li>
        <li>
          <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link px-3 border-0" style="background-color: #f8f9fa ">
                  <i class="ri-logout-box-line"></i>
                  Logout
              </button>
          </form>
        </li>
      </ul>
  </nav>
