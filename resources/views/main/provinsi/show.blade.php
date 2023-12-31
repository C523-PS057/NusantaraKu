<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Provinsi {{ ucfirst($provinsi->province_name) }} - NusantaraKu</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />

    <!-- Global Meta Tag -->
    <meta name="keywords" content="nusantaraku, budaya, ensiklopedia budaya, nusantara, Budaya Indonesia">
    <meta http-equiv="Content-Language" content="id-ID">

    <!-- Meta Tag for Share to Social Media -->
    <meta property="og:title" content="Profil Provinsi {{ ucfirst($provinsi->province_name) }} - NusantaraKu">
    <meta property="og:image" itemprop="image" content="/img/thumbnail.jpg">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Profil Provinsi {{ ucfirst($provinsi->province_name) }} - NusantaraKu">
    <meta name="twitter:description"
        content="Website NusantaraKu adalah sebuah platform online yang bertujuan untuk memperkenalkan dan mempromosikan ragam budaya dari berbagai daerah di Indonesia, yang dikenal sebagai Nusantara. Website ini menyajikan informasi terkait budaya yang ada di indonesia seperti Tari Tradisional, Rumah Adat, Masakan khas dan kategori budaya lainnya.">
    <meta name="twitter:image" content="/img/thumbnail.jpg">
</head>

<body>
    @extends('main.layouts.navbar')
    <main>
        <section class="banner"></section>
        <section class="detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto detail__column">
                        <div class="detail__header">
                            <span class="headline text-primary">PROFIL PROVINSI</span>
                            <h1>Provinsi {{ ucfirst($provinsi->province_name) }}</h1>
                        </div>
                        <div class="detail__content">
                            <iframe width="100%" height="360px" src="{{ $provinsi->video_link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>

                            <div class="detail__section">
                                <h4>Deskripsi Provinsi {{ ucfirst($provinsi->province_name) }}</h4>
                                <p>
                                    {{ $provinsi->deskripsi }}
                                </p>
                            </div>

                            <div class="detail__section">
                                <h4>Sejarah Provinsi {{ ucfirst($provinsi->province_name) }}</h4>
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
                                                <img src="{{ Storage::url($item->gambar) }}" alt="Tari Image" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ ucfirst($provinsi->province_name) }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                <h6>Tari {{ $item->tarian_name }}</h6>
                                                <p>Tari Tradisional</p>
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
                                                <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ ucfirst($provinsi->province_name) }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                <h6>Rumah {{ $item->rumah_adat_name }}</h6>
                                                <p>Rumah Adat</p>
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
                                                <img src="{{ Storage::url($item->gambar) }}" alt="Pakaian Image" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ ucfirst($provinsi->province_name) }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                <h6>Pakaian {{ $item->pakaian_name }}</h6>
                                                <p>Pakaian Adat</p>
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
                                                <img src="{{ Storage::url($item->gambar) }}" alt="Alat Musik Image" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ ucfirst($provinsi->province_name) }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                <h6>Alat Musik {{ $item->alat_musik_name }}</h6>
                                                <p>Alat Musik</p>
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
                                                <img src="{{ Storage::url($item->gambar) }}" alt="Masakan Image" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ ucfirst($provinsi->province_name) }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                <h6>Masakan {{ $item->masakan_name }}</h6>
                                                <p>Masakan Khas</p>
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
    @extends('main.layouts.footer')
    <script src="../js/main.js" type="module"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/remixicon.css" />
</body>

</html>