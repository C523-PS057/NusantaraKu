<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
    style="position: fixed; height:100vh">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/dashboard') ? 'danger' :'dark' }}" aria-current="page"
                    href="/admin/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/province*') ? 'danger' :'dark' }}" href="/admin/province">
                    <span data-feather="file"></span>
                    Provinsi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/budaya*') ? 'danger' :'dark' }}" href="/admin/budaya">
                    <span data-feather="file"></span>
                    Budaya
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/masakan*') ? 'danger' :'dark' }}" href="/admin/masakan">
                    <span data-feather="file"></span>
                    Masakan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/musik*') ? 'danger' :'dark' }}" href="/admin/musik">
                    <span data-feather="file"></span>
                    Musik
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/pakaian*') ? 'danger' :'dark' }}" href="/admin/pakaian">
                    <span data-feather="file"></span>
                    Pakaian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/rumah*') ? 'danger' :'dark' }}" href="/admin/rumah">
                    <span data-feather="file"></span>
                    Rumah Adat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/tari*') ? 'danger' :'dark' }}" href="/admin/tari">
                    <span data-feather="file"></span>
                    Tarian
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">
                    <span data-feather="file"></span>
                    Beranda
                </a>
            </li>
            <li>
                <hr>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link text-dark px-3 border-0" style="background-color: #f8f9fa ">
                        <i class="ri-logout-box-line"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
</nav>