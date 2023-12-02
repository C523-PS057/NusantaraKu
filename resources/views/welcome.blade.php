<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NusantaraKu - Jelajahi Ragam Budaya Indonesia</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    </head>
    <body>
        @extends('main.layouts.navbar')
        <main>
            <section class="hero">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 hero__left">
                            <div class="hero__title">
                                <span class="headline"><img src="./img/asterix.svg" alt="Asterix Icon" />EKSPLORASI KEBUDAYAAN INDONESIA</span>
                                <h1>Jelajahi Ragam <em>Budaya</em> <span class="red">Indonesia</span></h1>
                            </div>
                            <p>Perluas pengetahuanmu dengan menggali informasi tentang beragam budaya dari Sabang hingga Merauke. Temukan keindahan tradisi budaya Indonesia, termasuk Tari Tradisional, Rumah Adat, Pakaian Adat, Alat Musik Tradisional dan Masakan Khas yang begitu beragam.</p>
                            <div class="d-flex align-items-center gap-3">
                                <a href="#kategori" class="btn btn-primary">Jelajahi Sekarang <i class="ri-arrow-right-up-line"></i></a>
                                <a href="semua-budaya.html" class="btn btn-outline">Cari Budaya <i class="ri-search-line"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 hero__right">
                            <img src="./img/hero-image.png" alt="Hero Image" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="marquee">
                <div class="marquee-slide">
                    <img src="./img/text-tari-tradisional.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-rumah-adat.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-pakaian-adat.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-alat-musik.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-masakan-khas.svg" />
                </div>
                <div class="marquee-slide">
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-tari-tradisional.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-rumah-adat.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-pakaian-adat.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-alat-musik.svg" />
                    <img class="marquee__asterix" src="./img/asterix.svg" />
                    <img src="./img/text-masakan-khas.svg" />
                </div>
            </section>
            <section class="intro">
                <div class="container">
                    <div class="col-md-8 intro__content">
                        <span class="headline">PENGENALAN</span>
                        <h2>Sekilas Tentang <span class="red">Indonesia</span></h2>
                        <p>
                            Indonesia adalah negara kepulauan di Asia Tenggara yang terkenal akan keberagaman budaya, alam, dan etnis. Dengan lebih dari 17.000 pulau, Indonesia menjadi rumah bagi berbagai suku, bahasa, dan tradisi. Keindahan alamnya yang luar biasa, mulai dari pegunungan yang megah
                            hingga pantai yang eksotis, menjadi cerminan dari kekayaan geografis dan keanekaragaman hayati negara ini.
                        </p>
                        <div class="intro__stats">
                            <div class="intro__stats-item">
                                <img src="./img/icon-stats1.svg" />
                                <p>Total Penduduk</p>
                                <h3>273+ Juta</h3>
                            </div>
                            <div class="intro__stats-item">
                                <img src="./img/icon-stats2.svg" />
                                <p>Total Provinsi</p>
                                <h3>38</h3>
                            </div>
                            <div class="intro__stats-item">
                                <img src="./img/icon-stats3.svg" />
                                <p>Total Pulau</p>
                                <h3>17.000+</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="category">
                <div class="container category__container">
                    <div class="category__header">
                        <span class="headline">KATEGORI</span>
                        <h2>Kategori <span class="red">Budaya</span></h2>
                        <p>Berbagai jenis kategori budaya yang dapat anda jelajahi</p>
                    </div>
                    <div class="category__content">
                        <div class="category__item">
                            <h6>Tari Tradisional</h6>
                            <img src="./img/kategori-tari.jpg" />
                            <a href="tari-tradisional.html" class="category__link"></a>
                        </div>
                        <div class="category__item">
                            <h6>Rumah Adat</h6>
                            <img src="./img/kategori-rumah.jpg" />
                            <a href="rumah-adat.html" class="category__link"></a>
                        </div>
                        <div class="category__item">
                            <h6>Pakaian Adat</h6>
                            <img src="./img/kategori-pakaian.jpg" />
                            <a href="pakaian-adat.html" class="category__link"></a>
                        </div>
                        <div class="category__item">
                            <h6>Alat Musik</h6>
                            <img src="./img/kategori-alat.jpg" />
                            <a href="alat-musik.html" class="category__link"></a>
                        </div>
                        <div class="category__item">
                            <h6>Masakan Khas</h6>
                            <img src="./img/kategori-masakan.jpg" />
                            <a href="masakan-khas.html" class="category__link"></a>
                        </div>
                    </div>
                    <div class="category__footer">
                        <a href="semua-budaya.html" class="btn btn-outline">Lihat Semua Budaya <i class="ri-arrow-right-up-line"></i></a>
                    </div>
                </div>
            </section>
            <section class="province">
                <div class="container province__container">
                    <div class="province__header">
                        <span class="headline">PROVINSI</span>
                        <h2>Profil <span class="red">Provinsi</span></h2>
                        <p>Informasi lebih lanjut tentang seluruh provinsi yang ada di Indonesia</p>
                    </div>
                    <div class="province__content">
                        <div class="row province__row"></div>
                    </div>
                </div>
            </section>
            <section class="benefit">
                <div class="container benefit__container">
                    <div class="province__header">
                        <span class="headline">MANFAAT</span>
                        <h2>Manfaat <span class="red">NusantaraKu</span></h2>
                        <p>Manfaat dari dibuatnya platform <strong>NusantaraKu</strong></p>
                    </div>
                    <div class="benefit__content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit1.svg" alt="Benefit Icon" />
                                    <h6>Edukasi Budaya</h6>
                                    <p class="text-sm">NusantaraKu adalah panduan edukatif budaya Indonesia, membawa pengguna menjelajahi tari tradisional, rumah adat, pakaian adat, musik tradisional, dan masakan khas.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit2.svg" alt="Benefit Icon" />
                                    <h6>Pelestarian Warisan</h6>
                                    <p class="text-sm">Berperan aktif dalam pelestarian dan promosi warisan budaya lokal, dari puluhan ribu pulau hingga ratusan bahasa dan etnis di Indonesia.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit3.svg" alt="Benefit Icon" />
                                    <h6>Interaksi Pengguna</h6>
                                    <p class="text-sm">Memberikan ruang interaktif bagi pengguna untuk berpartisipasi dan berbagi pengalaman melalui komentar, menciptakan komunitas yang mendukung keberagaman budaya.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit4.svg" alt="Benefit Icon" />
                                    <h6>Wisata Budaya</h6>
                                    <p class="text-sm">Menjadi panduan wisata budaya dengan menghadirkan seni dan kuliner dari setiap provinsi, memberikan inspirasi untuk menjelajahi keberagaman Indonesia.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit5.svg" alt="Benefit Icon" />
                                    <h6>Akses Mudah</h6>
                                    <p class="text-sm">Dengan tata letak yang bersih dan intuitif, NusantaraKu memastikan informasi tentang budaya Indonesia dapat diakses dengan mudah oleh pengguna.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit6.svg" alt="Benefit Icon" />
                                    <h6>Inspirasi Pembelajaran</h6>
                                    <p class="text-sm">Sebagai sumber inspirasi pembelajaran, NusantaraKu menyajikan konten multimedia yang menarik, membantu pemahaman tentang kekayaan budaya Indonesia melalui pengalaman yang interaktif.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit7.svg" alt="Benefit Icon" />
                                    <h6>Komunitas Pecinta Budaya</h6>
                                    <p class="text-sm">Menyediakan platform bagi komunitas pecinta budaya untuk terhubung, berbagi pengetahuan, dan saling menginspirasi dalam menjaga keberagaman warisan budaya Indonesia.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="benefit__item">
                                    <img src="./img/benefit8.svg" alt="Benefit Icon" />
                                    <h6>Eksplorasi Virtual</h6>
                                    <p class="text-sm">Memberikan pengalaman eksplorasi virtual yang mendalam, memungkinkan pengguna untuk menjelajahi keindahan budaya Indonesia dari kenyamanan rumah mereka sendiri.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto testimonial__col">
                            <div class="testimonial__header">
                                <span class="headline">TESTIMONI</span>
                                <h2>Apa Kata <span class="red">Mereka</span></h2>
                                <p>Ulasan dari pengguna NusantaraKu</p>
                            </div>
                            <div class="testimonial__content">
                                <img class="testimonial__image" src="./img/comma.svg" />
                                <p class="testimonial__text">
                                    "Situs NusantaraKu sungguh luar biasa! Bukan hanya memberikan info mendalam tentang budaya di Indonesia, tapi juga bikin kita penasaran dan pengen tahu lebih banyak. Setiap provinsi punya cerita sendiri, dan NusantaraKu beneran ngebuka mata kita tentang kekayaan
                                    negara kita. Pokoknya, situs yang oke banget buat yang suka eksplor budaya lokal!"
                                </p>
                                <div class="testimonial__info">
                                    <p class="testimonial__name"><strong>John Doe</strong></p>
                                    <p class="testimonial__job">Web Developer di Tokopedia</p>
                                </div>
                            </div>
                            <div class="testimonial__list">
                                <button class="testimonial__item active" data-index="0">
                                    <img src="./img/testimonial1.png" />
                                </button>
                                <button class="testimonial__item" data-index="1">
                                    <img src="./img/testimonial2.png" />
                                </button>
                                <button class="testimonial__item" data-index="2">
                                    <img src="./img/testimonial3.png" />
                                </button>
                                <button class="testimonial__item" data-index="3">
                                    <img src="./img/testimonial4.png" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="offer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Bergabung bersama pengguna lainnya</h2>
                        </div>
                        <div class="col-md-6">
                            <p>Ayo daftar sekarang! buat akun terlebih dahulu untuk dapat memberi komentar, kritik dan saran terhadap konten budaya yang kami sajikan.</p>
                            <a href="/register" class="btn btn-outline">Daftar Sekarang <i class="ri-arrow-right-up-line"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @extends('main.layouts.footer')
        <script src="./js/main.js" type="module"></script>
        <script src="./js/homepage.js" type="module"></script>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="./icons/remixicon.css" />
    </body>
</html>
