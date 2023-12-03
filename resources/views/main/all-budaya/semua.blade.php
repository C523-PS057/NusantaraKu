<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Semua Budaya - NusantaraKu</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    </head>
    <body>
        @extends('main.layouts.navbar')
        <main>
            <div class="banner-category" style="background-image: url('./img/bg-pattern.jpg')">
                <div class="banner-category__content">
                    <h2>Semua Budaya</h2>
                    <p>Jelajahi beragam budaya yang ada di seluruh Indonesia</p>
                </div>
            </div>
            <div class="categories">
                <div class="container">
                    <div class="categories__filter">
                        <form class="categories__filter-search">
                            <input type="search" name="search" id="search" placeholder="Cari nama budaya disini...." />
                            <button class="btn-icon">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                        <div class="categories__filter-group group-3">
                            <form action="">
                                <select class="categories__filter-select" name="filter-kategori" id="filter-kategori">
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="tari">Tari Tradisional</option>
                                    <option value="rumah">Rumah Adat</option>
                                    <option value="pakaian">Pakaian Adat</option>
                                    <option value="musik">Alat Musik</option>
                                    <option value="masakan">Masakan Khas</option>
                                </select>
                            </form>
                            <form action="">
                                <select class="categories__filter-select" name="filter-provinsi" id="filter-provinsi">
                                    <option value="" selected disabled>Asal Provinsi</option>
                                </select>
                            </form>
                            <form action="">
                                <select class="categories__filter-select" name="filter-urutkan" id="filter-urutkan">
                                    <option value="" selected disabled>Urutkan</option>
                                    <option value="terbaru">Terbaru</option>
                                    <option value="A-Z">A-Z</option>
                                    <option value="Z-A">Z-A</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="categories__content">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <a href="detail-budaya.html" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="./img/rumah-adat/aceh.webp" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            Jambi
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Hello</h6>
                                        <p>Tari Tradisional</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="detail-budaya.html" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="./img/rumah-adat/aceh.webp" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            Jambi
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Hello</h6>
                                        <p>Tari Tradisional</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="detail-budaya.html" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="./img/rumah-adat/aceh.webp" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            Jambi
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Hello</h6>
                                        <p>Tari Tradisional</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="detail-budaya.html" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="./img/rumah-adat/aceh.webp" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            Jambi
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Hello</h6>
                                        <p>Tari Tradisional</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-3">
                                <a href="detail-budaya.html" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="./img/rumah-adat/aceh.webp" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            Jambi
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Hello</h6>
                                        <p>Tari Tradisional</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @extends('main.layouts.footer')

        <script src="./js/main.js" type="module"></script>
        <script src="./js/category.js" type="module"></script>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="./icons/remixicon.css" />
    </body>
</html>
