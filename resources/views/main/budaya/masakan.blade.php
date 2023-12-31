<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ ucfirst($data->masakan_name) }} - NusantaraKu</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />

    <!-- Global Meta Tag -->
    <meta name="keywords" content="nusantaraku, budaya, ensiklopedia budaya, nusantara, Budaya Indonesia">
    <meta http-equiv="Content-Language" content="id-ID">

    <!-- Meta Tag for Share to Social Media -->
    <meta property="og:title" content="{{ ucfirst($data->masakan_name) }} - NusantaraKu">
    <meta property="og:image" itemprop="image" content="{{ Storage::url($data->gambar) }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ ucfirst($data->masakan_name) }} - NusantaraKu">
    <meta name="twitter:image" content="{{ Storage::url($data->gambar) }}">
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
                            <span class="headline text-primary">MASAKAN KHAS</span>
                            <h1>{{ ucfirst($data->masakan_name) }}</h1>
                        </div>
                        <div class="detail__content">
                            <div class="detail__image">
                                <img src="{{ Storage::url($data->gambar) }}" alt="{{ ucfirst($data->masakan_name) }}" />
                                <div class="detail__image-overlay">
                                    <i class="ri-map-pin-line"></i> {{ ucfirst($data->province->province_name) }}
                                </div>
                            </div>

                            <div class="detail__section">
                                <h4>Deskripsi {{ ucfirst($data->masakan_name) }}</h4>
                                <p>
                                    {{ $data->deskripsi }}
                                </p>
                            </div>

                            <div class="detail__section">
                                <h4>Sejarah {{ ucfirst($data->masakan_name) }}</h4>
                                <p>
                                    {{ $data->sejarah }}
                                </p>
                            </div>

                            <div class="detail__section">
                                <h4>Komentar</h4>
                                <div class="detail__comment">
                                    @foreach ($comments as $item)
                                    <div class="detail__comment-item">
                                        <div class="detail__comment-header">
                                            <img src="{{ Storage::url($item->user->gambar) }}" alt="Foto Profil User"
                                                class="detail__comment-image rounded-circle" />
                                            <div class="detail__comment-info">
                                                <span class="detail__comment-name">{{ $item->user->name }}
                                                    @if ($item->user->role == 'admin')
                                                    <i class="ri-verified-badge-fill admin-badge"></i>
                                                    @endif
                                                </span>
                                                <span
                                                    class="detail__comment-date">{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                                            </div>
                                        </div>
                                        <p class="detail__comment-text">{{ $item->body_comment }}</p>
                                        @can('admin')
                                        <form class="detail__comment-action" method="POST"
                                            action="{{ route('detail-masakan.destroy',$item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-primary btn--small"
                                                onclick="confirm('Yakin Ingin Menghapus Komentar Ini?')"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </form>
                                        @endcan
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            @auth
                            <!-- Jika Sudah Login Tampilkan ini -->
                            <form method="POST" class="comment__form" action="{{ route('detail-masakan.store') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="masakan_id" value="{{ $data->id }}">
                                <input type="hidden" name="budaya_id" value="{{ $data->budaya_id }}">
                                <h5>Tambahkan Komentar</h5>
                                <textarea name="body_comment" id="comment" style="resize: none" maxlength="255"
                                    placeholder="Ketik komentar disini..."></textarea>
                                <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                            </form>
                            <!-- Jika belum login, tampilkan ini -->
                            @else
                            <div class="comment__message">
                                <i class="ri-information-line"></i>
                                <p>Masuk akun terlebih dahulu untuk dapat berkomentar</p>
                            </div>
                            @endauth
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

    <script>
    const comment = document.querySelector('#comment');
    // disable button when comment empty
    comment.addEventListener('keyup', function() {
        if (comment.value.length > 0) {
            document.querySelector('.comment__form button').removeAttribute('disabled');
        } else {
            document.querySelector('.comment__form button').setAttribute('disabled', 'disabled');
        }
    });
    </script>
</body>

</html>