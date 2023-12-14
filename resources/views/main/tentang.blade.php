<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami - NusantaraKu</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
@extends('main.layouts.navbar')

<body>
    <main>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="about__header">
                            <h2 data-aos="fade-up">Tentang Kami</h2>
                            <p data-aos="fade-up" data-aos-delay="100"> Latarbelakang dibuatnya website
                                <strong>NusantaraKu</strong>
                            </p>
                        </div>
                        <div class="about__content" data-aos="fade-up">
                            <div class="about__image">
                                <img src="/img/logo-square.svg" alt="Logo NusantaraKu Square" />
                            </div>
                            <div class="about__description">
                                <h3 data-aos="fade-up">Apa itu NusantaraKu?</h3>
                                <p data-aos="fade-up" data-aos-delay="100">
                                    Website NusantaraKu adalah sebuah platform online yang bertujuan untuk
                                    memperkenalkan dan mempromosikan ragam budaya dari berbagai daerah di Indonesia,
                                    yang dikenal sebagai Nusantara. Website ini menyajikan informasi terkait budaya yang
                                    ada di indonesia
                                    seperti Tari Tradisional, Rumah Adat, Masakan khas dan kategori budaya lainnya.
                                    Tujuannya adalah untuk mengedukasi dan menginspirasi masyarakat mengenai kekayaan
                                    budaya Nusantara. Pengguna dapat dengan mudah melakukan pencarian dan filter
                                    terhadap budaya yang
                                    ingin dicari, selain itu pengguna dapat memberikan kritik dan masukan dalam bentuk
                                    komentar terkait informasi budaya yang disajikan dan Admin dapat mengelola seluruh
                                    informasi seperti menambahkan, mengubah, dan menghapus data budaya.
                                </p>

                                <div class="about__header about__header-secondary" data-aos="fade-up">
                                    <span class="headline">ANGGOTA TIM</span>
                                    <h4>Tim <em>Hebat</em> Kami</h4>
                                    <p>Perancang dan pengembang yang bertanggung jawab mengelola
                                        <strong>NusantaraKu</strong> menjadi platform yang kredibel.
                                    </p>
                                </div>

                                <div class="row about__row">
                                    <div class="col-6 col-md-4">
                                        <div class="about__item" data-aos="fade-up" data-aos-delay="300">
                                            <div class="about__item-image">
                                                <img src="./img/about-1.webp" />
                                            </div>
                                            <div class="about__item-content">
                                                <span class="about__item-id">F614YB392</span>
                                                <h6>Agrey Tosira</h6>
                                                <p>UI/UX Designer & Front-End Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="about__item" data-aos="fade-up" data-aos-delay="400">
                                            <div class="about__item-image">
                                                <img src="./img/about-2.webp" />
                                            </div>
                                            <div class="about__item-content">
                                                <span class="about__item-id">F429YB006</span>
                                                <h6>Muhamad Zahran Yudha</h6>
                                                <p>Front-end Web and Back-End Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="about__item" data-aos="fade-up" data-aos-delay="500">
                                            <div class="about__item-image">
                                                <img src="./img/about-5.webp" />
                                            </div>
                                            <div class="about__item-content">
                                                <span class="about__item-id">S268YB451</span>
                                                <h6>Faris Ghina Purohita</h6>
                                                <p>DevOps Engineer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="about__item" data-aos="fade-up" data-aos-delay="600">
                                            <div class="about__item-image">
                                                <img src="./img/about-3.webp" />
                                            </div>
                                            <div class="about__item-content">
                                                <span class="about__item-id">F268YB295</span>
                                                <h6>Hyuga Dewanto Kojyro</h6>
                                                <p>Front-End Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="about__item" data-aos="fade-up" data-aos-delay="700">
                                            <div class="about__item-image">
                                                <img src="./img/about-4.webp" />
                                            </div>
                                            <div class="about__item-content">
                                                <span class="about__item-id">F237YB298</span>
                                                <h6>Muhammad Sabilil Fajri</h6>
                                                <p>Front-End Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('main.layouts.footer')
    <script src="/js/main.js" type="module"></script>
    <script src="/js/category.js" type="module"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/remixicon.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        mirror: true,
        anchorPlacement: "top-bottom",
    });
    </script>
</body>

</html>