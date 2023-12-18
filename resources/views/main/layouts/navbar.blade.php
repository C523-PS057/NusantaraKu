<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo-wide.svg" alt="Logo NusantaraKu Wide" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/semua-budaya">Semua Budaya</a>
                </li>
                <li class="nav-item dropdown-v2__button">
                    <button class="nav-link">
                        Budaya
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div class="dropdown-v2">
                        <div class="dropdown-v2__left">
                            <div class="dropdown-v2__text">
                                <h6>Kategori Budaya</h6>
                                <p>Berbagai jenis kategori budaya yang dapat anda jelajahi</p>
                            </div>
                            <a href="/semua-budaya" class="btn btn-outline">Lihat Semua Budaya <i
                                    class="ri-arrow-right-up-line"></i></a>
                        </div>
                        <ul class="dropdown-v2__list">
                            <li class="dropdown-v2__item">
                                <a href="/tari-tradisional">Tari Tradisional</a>
                            </li>
                            <li class="dropdown-v2__item">
                                <a href="/rumah-adat">Rumah Adat</a>
                            </li>
                            <li class="dropdown-v2__item">
                                <a href="/pakaian-adat">Pakaian Adat</a>
                            </li>
                            <li class="dropdown-v2__item">
                                <a href="/alat-musik">Alat Musik</a>
                            </li>
                            <li class="dropdown-v2__item">
                                <a href="/masakan-khas">Masakan Khas</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown-v2__button">
                    <button class="nav-link">
                        Provinsi
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div class="dropdown-v2 dropdown-provinsi">
                        <div class="dropdown-v2__left">
                            <div class="dropdown-v2__text">
                                <h6>Profil Provinsi</h6>
                                <p>Cari tahu profil dan budaya dari masing-masing provinsi.</p>
                            </div>
                        </div>
                        <ul class="dropdown-v2__list2">
                            <li class="dropdown-v2__item2">
                                <a href="#">Aceh</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 navbar-right">
                @auth
                @can('admin')
                <li class="nav-item">
                    <a class="nav-link btn--small btn-outline" href="/admin/dashboard">Dashboard Admin</a>
                </li>
                @endcan
                <div class="dropdown">
                    <div class="btn-group">
                        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ Storage::url(auth()->user()->gambar) }}" alt="Foto Profil User" />
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end fade">
                            <li><a href="{{ route('user-settings.show',auth()->user()->id) }}"
                                    class="dropdown-item">Profil Saya</a></li>
                            <li><a href="{{ route('user-settings.edit',auth()->user()->id) }}"
                                    class="dropdown-item">Edit Profil</a></li>
                            <li><a href="{{ route('change-password.edit',auth()->user()->id) }}"
                                    class="dropdown-item">Ubah Password</a></li>
                            <li>
                                <form style="padding:0;" action="/logout" method="POST" class="dropdown-item">
                                    @csrf
                                    <button class="dropdown-item" type="submit"
                                        style="border:none; display:inherit ">Keluar Akun</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <li class="nav-item">
                    <a class="nav-link btn--small btn-outline" href="/register">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn--small btn-primary" href="/login">Masuk</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>