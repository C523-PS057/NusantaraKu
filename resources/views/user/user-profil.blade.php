<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard User: Profil Saya - NusantaraKu</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    </head>
    <body>
        @extends('main.layouts.navbar')
        <main>
            <section class="user">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mx-auto user__col">
                            <div class="user__header">
                                <h2>Profil Saya</h2>
                            </div>
                            <div class="user__content">
                                <div class="user__picture">
                                    <img src="{{ Storage::url($data->gambar) }}" alt="Foto Profil User" />
                                </div>
                                <div class="user__detail">
                                    <h5 class="user__fullname">{{ $data->name }}</h5>
                                    <p class="user__email">{{ $data->email }}</p>
                                    <p class="user__joined">Pengguna sejak {{ $data->created_at->format('d/m/Y') }}</p>
                                </div>
                                <div class="user__buttons">
                                    @if ($data->id == auth()->user()->id)
                                    <a href="{{ route('user-settings.edit',$data->id) }}" class="btn btn-primary">Edit Profil <i class="ri-edit-line"></i></a>
                                    <a href="{{ route('change-password.edit',$data->id) }}" class="btn btn-outline">Ubah Password <i class="ri-key-2-line"></i></a>
                                    @else
                                    <a href="{{ route('user-settings.edit',$data->id) }}" class="btn btn-primary">Edit Profil <i class="ri-edit-line"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script src="/js/main.js" type="module"></script>
        <script src="/js/user.js" type="module"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="/css/remixicon.css" />
    </body>
</html>
