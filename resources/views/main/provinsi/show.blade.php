<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil Provinsi X - NusantaraKu</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="../img/logo-wide.svg" alt="Logo NusantaraKu Wide" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="semua-budaya.html">Semua Budaya</a>
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
                                    <a href="semua-budaya.html" class="btn btn-outline">Lihat Semua Budaya <i class="ri-arrow-right-up-line"></i></a>
                                </div>
                                <ul class="dropdown-v2__list">
                                    <li class="dropdown-v2__item">
                                        <a href="tari-tradisional.html">Tari Tradisional</a>
                                    </li>
                                    <li class="dropdown-v2__item">
                                        <a href="rumah-adat.html">Rumah Adat</a>
                                    </li>
                                    <li class="dropdown-v2__item">
                                        <a href="pakaian-adat.html">Pakaian Adat</a>
                                    </li>
                                    <li class="dropdown-v2__item">
                                        <a href="alat-musik.html">Alat Musik</a>
                                    </li>
                                    <li class="dropdown-v2__item">
                                        <a href="masakan-khas.html">Masakan Khas</a>
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
                            <a class="nav-link" href="tentang.html">Tentang</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 navbar-right">
                        @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn--small btn-outline"><i class="ri-logout-box-line"></i>Logout</button>
                        </form>
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
        <main>
            <section class="banner"></section>
            <section class="detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto detail__column">
                            <div class="detail__header">
                                <span class="headline">PROFIL PROVINSI</span>
                                <h1>Provinsi {{ ucfirst($provinsi->province_name) }}</h1>
                            </div>
                            <div class="detail__content">
                                <iframe
                                    width="100%"
                                    height="360px"
                                    src="{{ $provinsi->video_link }}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>

                                <div class="detail__section">
                                    <h4>Deskripsi Singkat</h4>
                                    <p>
                                        {{ $provinsi->deskripsi }}
                                    </p>
                                </div>

                                <div class="detail__section">
                                    <h4>Sejarah Singkat</h4>
                                    <p>
                                        {{ $provinsi->sejarah }}
                                    </p>
                                </div>

                                <div class="detail__section">
                                    <h4>Tari Tradisional {{ ucfirst($provinsi->province_name) }}</h4>
                                    <div class="row">
                                        @foreach ($tarian as $item)
                                        <div class="col-6 col-md-4">
                                            <a href="/detail-tari/{{ $item->id }}" class="detail__item">
                                                <div class="detail__item-image">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                                    <span class="detail__item-province">
                                                        <i class="ri-map-pin-line"></i>
                                                        {{ ucfirst($provinsi->province_name) }}
                                                    </span>
                                                </div>
                                                <div class="detail__item-content">
                                                    <h6>{{ $item->tarian_name }}</h6>
                                                    <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="detail__section">
                                    <h4>Rumah Adat {{ ucfirst($provinsi->province_name) }}</h4>
                                    <div class="row">
                                        @foreach ($rumah as $item)
                                        <div class="col-6 col-md-4">
                                            <a href="/detail-rumah/{{ $item->id }}" class="detail__item">
                                                <div class="detail__item-image">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                                    <span class="detail__item-province">
                                                        <i class="ri-map-pin-line"></i>
                                                        {{ ucfirst($provinsi->province_name) }}
                                                    </span>
                                                </div>
                                                <div class="detail__item-content">
                                                    <h6>{{ $item->rumah_adat_name }}</h6>
                                                    <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="detail__section">
                                    <h4>Pakaian Adat {{ ucfirst($provinsi->province_name) }}</h4>
                                    <div class="row">
                                        @foreach ($pakaian as $item)
                                        <div class="col-6 col-md-4">
                                            <a href="/detail-pakaian/{{ $item->id }}" class="detail__item">
                                                <div class="detail__item-image">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                                    <span class="detail__item-province">
                                                        <i class="ri-map-pin-line"></i>
                                                        {{ ucfirst($provinsi->province_name) }}
                                                    </span>
                                                </div>
                                                <div class="detail__item-content">
                                                    <h6>{{ $item->pakaian_name }}</h6>
                                                    <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="detail__section">
                                    <h4>Alat Musik Tradisional {{ ucfirst($provinsi->province_name) }}</h4>
                                    <div class="row">
                                        @foreach ($musik as $item)
                                        <div class="col-6 col-md-4">
                                            <a href="/detail-musik/{{ $item->id }}" class="detail__item">
                                                <div class="detail__item-image">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                                    <span class="detail__item-province">
                                                        <i class="ri-map-pin-line"></i>
                                                        {{ ucfirst($provinsi->province_name) }}
                                                    </span>
                                                </div>
                                                <div class="detail__item-content">
                                                    <h6>{{ $item->alat_musik_name }}</h6>
                                                    <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="detail__section">
                                    <h4>Masakan Khas {{ ucfirst($provinsi->province_name) }}</h4>
                                    <div class="row">
                                        @foreach ($masakan as $item)
                                        <div class="col-6 col-md-4">
                                            <a href="/detail-masakan/{{ $item->id }}" class="detail__item">
                                                <div class="detail__item-image">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                                    <span class="detail__item-province">
                                                        <i class="ri-map-pin-line"></i>
                                                        {{ ucfirst($provinsi->province_name) }}
                                                    </span>
                                                </div>
                                                <div class="detail__item-content">
                                                    <h6>{{ $item->masakan_name }}</h6>
                                                    <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row footer__row">
                    <div class="col-md-6 footer__left">
                        <span class="headline">NUSANTARAKU.ID</span>
                        <h2>
                            Jelajahi Ragam <br />
                            <em>Budaya</em> <span class="red">Indonesia</span>
                        </h2>
                    </div>
                    <div class="col-md-6 footer__right">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <strong><p>Halaman</p></strong>
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="semua-budaya.html">Semua Budaya</a></li>
                                    <li><a href="tentang.html">Tentang</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-4">
                                <strong><p>Budaya</p></strong>
                                <ul>
                                    <li><a href="tari-tradisional.html">Tari Tradisional</a></li>
                                    <li><a href="rumah-adat.html">Rumah Adat</a></li>
                                    <li><a href="pakaian-adat.html">Pakaian Adat</a></li>
                                    <li><a href="alat-musik.html">Alat Musik</a></li>
                                    <li><a href="masakan-khas.html">Masakan Khas</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-4">
                                <strong><p>Kontak Kami</p></strong>
                                <ul>
                                    <li><a href="mailto:admin@nusantaraku.id">admin@nusantaraku.id</a></li>
                                    <li><a href="callto:02837539385">028 3753 9385</a></li>
                                    <ul class="footer__social">
                                        <li>
                                            <a target="_blank" rel="noopener" href="https://facebook.com/nusantaraku-capstone"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank" rel="noopener" href="https://instagram.com/nusantaraku-capstone"><i class="ri-instagram-fill"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank" rel="noopener" href="https://x.com/nusantaraku-capstone"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="footer__bottom">
                    <p class="text-center">© 2023 NusantaraKu</p>
                    <p>All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <script src="../js/main.js" type="module"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../icons/remixicon.css" />
    </body>
</html>
