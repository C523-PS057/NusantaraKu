<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alat Musik Tradisional - NusantaraKu</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
</head>

<body>
    @extends('main.layouts.navbar')
    <main>
        <div class="banner-category" style="background-image: url('../img/bg-alat-musik.webp')">
            <div class="banner-category__content">
                <h2>Alat Musik</h2>
                <p><strong>Alat Musik</strong> yang dilestarikan turun temurun hingga saat ini</p>
            </div>
        </div>
        <div class="categories">
            <div class="container">
                <div class="categories__filter">
                    <form class="categories__filter-search" action="{{ route('alat-musik.index') }}" method="GET">
                        <input type="search" value="{{ request('search') }}" name="search" id="search"
                            placeholder="Cari nama budaya disini...." />
                        <button class="btn-icon" type="submit">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                    <div class="categories__filter-group group-2">
                        <form action="{{ route('alat-musik.index') }}" method="GET" id="filterForm">
                            <select class="categories__filter-select" name="filter-provinsi" id="filter-provinsi">
                                <option selected disabled>Asal Provinsi</option>
                                <option value="aceh" {{ $selectedValue === 'aceh' ? 'selected' : '' }}>Aceh</option>
                                <option value="bali" {{ $selectedValue === 'bali' ? 'selected' : '' }}>Bali</option>
                                <option value="bangka belitung"
                                    {{ $selectedValue === 'bangka belitung' ? 'selected' : '' }}>Bangka Belitung
                                </option>
                                <option value="banten" {{ $selectedValue === 'banten' ? 'selected' : '' }}>Banten
                                </option>
                                <option value="bengkulu" {{ $selectedValue === 'bengkulu' ? 'selected' : '' }}>Bengkulu
                                </option>
                                <option value="dki jakarta" {{ $selectedValue === 'dki jakarta' ? 'selected' : '' }}>DKI
                                    Jakarta</option>
                                <option value="gorontalo" {{ $selectedValue === 'gorontalo' ? 'selected' : '' }}>
                                    Gorontalo</option>
                                <option value="jambi" {{ $selectedValue === 'jambi' ? 'selected' : '' }}>Jambi</option>
                                <option value="jawa barat" {{ $selectedValue === 'jawa barat' ? 'selected' : '' }}>Jawa
                                    Barat</option>
                                <option value="jawa tengah" {{ $selectedValue === 'jawa tengah' ? 'selected' : '' }}>
                                    Jawa Tengah</option>
                                <option value="jawa timur" {{ $selectedValue === 'jawa timur' ? 'selected' : '' }}>Jawa
                                    Timur</option>
                                <option value="kalimantan barat"
                                    {{ $selectedValue === 'kalimantan barat' ? 'selected' : '' }}>Kalimantan Barat
                                </option>
                                <option value="kalimantan selatan"
                                    {{ $selectedValue === 'kalimantan selatan' ? 'selected' : '' }}>Kalimantan Selatan
                                </option>
                                <option value="kalimantan tengah"
                                    {{ $selectedValue === 'kalimantan tengah' ? 'selected' : '' }}>Kalimantan Tengah
                                </option>
                                <option value="kalimantan timur"
                                    {{ $selectedValue === 'kalimantan timur' ? 'selected' : '' }}>Kalimantan Timur
                                </option>
                                <option value="kalimantan utara"
                                    {{ $selectedValue === 'kalimantan utara' ? 'selected' : '' }}>Kalimantan Utara
                                </option>
                                <option value="kepulauan riau"
                                    {{ $selectedValue === 'kepulauan riau' ? 'selected' : '' }}>Kepulauan Riau</option>
                                <option value="lampung" {{ $selectedValue === 'lampung' ? 'selected' : '' }}>Lampung
                                </option>
                                <option value="maluku" {{ $selectedValue === 'maluku' ? 'selected' : '' }}>Maluku
                                </option>
                                <option value="maluku utara" {{ $selectedValue === 'maluku utara' ? 'selected' : '' }}>
                                    Maluku Utara</option>
                                <option value="nusa tenggara timur"
                                    {{ $selectedValue === 'nusa tenggara timur' ? 'selected' : '' }}>Nusa Tenggara Timur
                                </option>
                                <option value="nusa tenggara barat"
                                    {{ $selectedValue === 'nusa tenggara barat' ? 'selected' : '' }}>Nusa Tenggara Barat
                                </option>
                                <option value="papua" {{ $selectedValue === 'papua' ? 'selected' : '' }}>Papua</option>
                                <option value="papua barat" {{ $selectedValue === 'papua barat' ? 'selected' : '' }}>
                                    Papua Barat</option>
                                <option value="papua barat daya"
                                    {{ $selectedValue === 'papua barat daya' ? 'selected' : '' }}>Papua Barat Daya
                                </option>
                                <option value="papua pegunungan"
                                    {{ $selectedValue === 'papua pegunungan' ? 'selected' : '' }}>Papua Pegunungan
                                </option>
                                <option value="papua selatan"
                                    {{ $selectedValue === 'papua selatan' ? 'selected' : '' }}>Papua Selatan</option>
                                <option value="papua tengah" {{ $selectedValue === 'papua tengah' ? 'selected' : '' }}>
                                    Papua Tengah</option>
                                <option value="riau" {{ $selectedValue === 'riau' ? 'selected' : '' }}>Riau</option>
                                <option value="sulawesi barat"
                                    {{ $selectedValue === 'sulawesi barat' ? 'selected' : '' }}>Sulawesi Barat</option>
                                <option value="sulawesi selatan"
                                    {{ $selectedValue === 'sulawesi selatan' ? 'selected' : '' }}>Sulawesi Selatan
                                </option>
                                <option value="sulawesi tengah"
                                    {{ $selectedValue === 'sulawesi tengah' ? 'selected' : '' }}>Sulawesi Tengah
                                </option>
                                <option value="sulawesi tenggara"
                                    {{ $selectedValue === 'sulawesi tenggara' ? 'selected' : '' }}>Sulawesi Tenggara
                                </option>
                                <option value="sulawesi utara"
                                    {{ $selectedValue === 'sulawesi utara' ? 'selected' : '' }}>Sulawesi Utara</option>
                                <option value="sumatera selatan"
                                    {{ $selectedValue === 'sumatera selatan' ? 'selected' : '' }}>Sumatera Selatan
                                </option>
                                <option value="sumatera utara"
                                    {{ $selectedValue === 'sumatera utara' ? 'selected' : '' }}>Sumatera Utara</option>
                                <option value="yogyakarta" {{ $selectedValue === 'yogyakarta' ? 'selected' : '' }}>
                                    Daerah Istimewa Yogyakarta</option>
                            </select>
                        </form>
                        <form action="{{ route('alat-musik.index') }}" method="GET" id="filterUrutkan">
                            <select class="categories__filter-select" name="filter-query" id="filter-query">
                                <option value="" {{ $selectedValue === null ? 'selected' : '' }} disabled>Urutkan
                                </option>
                                <option value="terbaru" {{ $selectedValue === 'terbaru' ? 'selected' : '' }}>Terbaru
                                </option>
                                <option value="A-Z" {{ $selectedValue === 'A-Z' ? 'selected' : '' }}>A-Z</option>
                                <option value="Z-A" {{ $selectedValue === 'Z-A' ? 'selected' : '' }}>Z-A</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="categories__content">
                    <div class="row">
                        @foreach ($data as $item)
                        <div class="col-6 col-md-3">
                            <a href="/detail-musik/{{ $item->id }}" class="detail__item">
                                <div class="detail__item-image">
                                    <img src="{{ Storage::url($item->gambar) }}" alt="Musik Image" />
                                    <span class="detail__item-province">
                                        <i class="ri-map-pin-line"></i>
                                        {{ $item->province->province_name }}
                                    </span>
                                </div>
                                <div class="detail__item-content">
                                    <h6>{{ $item->alat_musik_name }}</h6>
                                    <p>Alat Musik Tradisional</p>
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
    document.addEventListener('DOMContentLoaded', function() {
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