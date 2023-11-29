<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/dashboard">
            <span data-feather="home"></span>
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/province">
            <span data-feather="file"></span>
            Provinsi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/category">
            <span data-feather="file"></span>
            Kategori
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
