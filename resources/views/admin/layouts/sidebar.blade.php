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
                    Kategori Budaya
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/masakan*') ? 'danger' :'dark' }}" href="/admin/masakan">
                    <span data-feather="file"></span>
                    Masakan Khas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/musik*') ? 'danger' :'dark' }}" href="/admin/musik">
                    <span data-feather="file"></span>
                    Alat Musik
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-{{ Request::is('admin/pakaian*') ? 'danger' :'dark' }}" href="/admin/pakaian">
                    <span data-feather="file"></span>
                    Pakaian Adat
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
                    Tari Tradisional
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
                <form action="/logout" method="POST" style="width:100%">
                    @csrf
                    <button type="submit" class="nav-link btn-outline"  style="width:100%;gap:.5rem;border-radius:.5rem">
                        <i class="ri-logout-box-line"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
</nav>