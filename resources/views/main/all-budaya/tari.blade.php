<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tari Tradisional - NusantaraKu</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
    </head>
    <body>
        @extends('main.layouts.navbar')
        <main>
            <div class="banner-category" style="background-image: url('../img/bg-tari-tradisional.jpg')">
                <div class="banner-category__content">
                    <h2>Tari Tradisional</h2>
                    <p><strong>Tari Tradisional</strong> yang dilestarikan turun temurun hingga saat ini</p>
                </div>
            </div>
            <div class="categories">
                <div class="container">
                    <div class="categories__filter">
                            <form class="categories__filter-search" action="{{ route('tari-tradisional.index') }}" method="GET">
                                <input type="search" value="{{ request('search') }}" name="search" id="search" placeholder="Cari nama budaya disini...." />
                                <button class="btn-icon" type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        <div class="categories__filter-group group-2">
                            <form action="{{ route('tari-tradisional.index') }}" method="GET" id="filterForm">
                                <select class="categories__filter-select" name="filter-provinsi" id="filter-provinsi">
                                    <option selected disabled>Asal Provinsi</option>
                                </select>
                            </form>
                            <form action="{{ route('tari-tradisional.index') }}" method="GET" id="filterUrutkan">
                                <select class="categories__filter-select" name="filter-query" id="filter-query">
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
                            @foreach ($data as $item)
                            <div class="col-6 col-md-3">
                                <a href="/detail-tari/{{ $item->id }}" class="detail__item">
                                    <div class="detail__item-image">
                                        <img src="{{ Storage::url($item->gambar) }}" alt="Rumah Adat Aceh" />
                                        <span class="detail__item-province">
                                            <i class="ri-map-pin-line"></i>
                                            {{ $item->province->province_name }}
                                        </span>
                                    </div>
                                    <div class="detail__item-content">
                                        <h6>Tari {{ $item->tarian_name }}</h6>
                                        <p>{{ Str::limit($item->deskripsi, 10, '...') }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @extends('main.layouts.footer')

        <script src="../js/main.js" type="module"></script>
        <script src="../js/category.js" type="module"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../icons/remixicon.css" />
        <script>
            document.getElementById('filter-provinsi').addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
            document.getElementById('filter-query').addEventListener('change', function() {
                document.getElementById('filterUrutkan').submit();
            });
        </script>
    </body>
</html>
