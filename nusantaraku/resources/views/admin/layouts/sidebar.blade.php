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
          <a class="nav-link {{ Request::is('admin/budaya*') ? 'active' :'' }}" href="/admin/budaya">
            <span data-feather="file"></span>
            Budaya
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/masakan*') ? 'active' :'' }}" href="/admin/masakan">
            <span data-feather="file"></span>
            Masakan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/musik*') ? 'active' :'' }}" href="/admin/musik">
            <span data-feather="file"></span>
            Musik
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/pakaian*') ? 'active' :'' }}" href="/admin/pakaian">
            <span data-feather="file"></span>
            Pakaian
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/rumah*') ? 'active' :'' }}" href="/admin/rumah">
            <span data-feather="file"></span>
            Rumah Adat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/tari*') ? 'active' :'' }}" href="/admin/tari">
            <span data-feather="file"></span>
            Tarian
          </a>
        </li>
        <li>
            <hr>
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