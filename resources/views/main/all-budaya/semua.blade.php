<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Semua Budaya - NusantaraKu</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
    </head>
    <body>
        @extends('main.layouts.navbar')
        <main>
            <div class="banner-category" style="background-image: url('../img/bg-pattern.jpg')">
                <div class="banner-category__content">
                    <h2>Semua Budaya</h2>
                    <p>Jelajahi beragam budaya yang ada di seluruh Indonesia</p>
                </div>
            </div>
            <div class="categories">
                <div class="container">
                    <div class="categories__filter">
                        <form class="categories__filter-search" action="{{ route('semua-budaya.index') }}" method="GET">
                            <input type="search" value="{{ request('search') }}" name="search" id="search" placeholder="Cari nama budaya disini...." />
                            <button class="btn-icon" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                        <div class="categories__filter-group group-3">
                            <form action="{{ route('semua-budaya.index') }}" method="GET" id="filterKategori">
                                <select class="categories__filter-select" name="filter-kategori" id="filter-kategori">
                                    <option value="" selected disabled>Kategori</option>
                                    <option value="1">Masakan Khas</option>
                                    <option value="2">Alat Musik</option>
                                    <option value="3">Pakaian Adat</option>
                                    <option value="4">Rumah Adat</option>
                                    <option value="5">Tari Tradisional</option>
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
                            @foreach ($data as $item)
                                @foreach ($item as $itemData)
                                @php
                                    $kategori = '';
                                    if ($itemData->budaya_id == '1') {
                                        $kategori = 'Masakan';
                                    } elseif ($itemData->budaya_id == '2') {
                                        $kategori = 'Musik';
                                    } elseif ($itemData->budaya_id == '3') {
                                        $kategori = 'pakaian';
                                    } elseif ($itemData->budaya_id == '4') {
                                        $kategori = 'Rumah';
                                    } elseif ($itemData->budaya_id == '5') {
                                        $kategori = 'Tari';
                                    }
                                @endphp
                                    <div class="col-6 col-md-3">
                                        <a href="/detail-{{strtolower($kategori)}}/{{ $itemData->id }}" class="detail__item">
                                            <div class="detail__item-image">
                                                <img src="{{ Storage::url($itemData->gambar) }}" alt="Image" />
                                                <span class="detail__item-province">
                                                    <i class="ri-map-pin-line"></i>
                                                    {{ $itemData->province->province_name }}
                                                </span>
                                            </div>
                                            <div class="detail__item-content">
                                                @if ($itemData->budaya_id == '1')
                                                <h6>Masakan Khas {{ $itemData->masakan_name }}</h6>
                                                @elseif ($itemData->budaya_id == '2')
                                                <h6>Musik {{ $itemData->alat_musik_name }}</h6>
                                                @elseif ($itemData->budaya_id == '3')
                                                <h6>Pakaian Tradisional {{ $itemData->pakaian_name }}</h6>
                                                @elseif ($itemData->budaya_id == '4')
                                                <h6>Rumah Adat {{ $itemData->rumah_adat_name }}</h6>
                                                @elseif ($itemData->budaya_id == '5')
                                                <h6>Tari {{ $itemData->tarian_name }}</h6>
                                                @endif
                                                <p>{{ Str::limit($itemData->deskripsi, 10, '...') }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
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
            document.addEventListener('DOMContentLoaded', function() {
            const filterSelect = document.getElementById('filter-kategori');

            filterSelect.addEventListener('change', function() {
                document.getElementById('filterKategori').submit();
            });
            document.getElementById('filter-provinsi').addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
            document.getElementById('filter-query').addEventListener('change', function() {
                document.getElementById('filterUrutkan').submit();
            });
        });
        </script>
    </body>
</html>
