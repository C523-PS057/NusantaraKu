<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User: Edit Saya - NusantaraKu</title>
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
                            <h2>Edit Profil</h2>
                        </div>
                        <form class="user__content" method="POST" action="{{ route('user-settings.update',$data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="user__picture">
                                <img src="{{ Storage::url($data->gambar) }}" alt="Foto Profil User" id="profile-pic" />
                                <label for="select-photo" class="btn-icon">
                                    <i class="ri-camera-line"></i>
                                    <label />
                                    <input type="file" name="gambar" id="select-photo">
                            </div>
                            <div class="user__detail">
                                <div class="input__group">
                                    <label class="input__label" for="name">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" required value="{{ $data->name }}" />
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="email">Alamat Email</label>
                                    <input type="email" name="email" id="email" disabled value="{{ $data->email }}" />
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="tgl-lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tgl-lahir" required
                                        value="{{ !empty($data->tanggal_lahir) ? \Carbon\Carbon::parse($data->tanggal_lahir)->format('Y-m-d') : 'mm/dd/yy' }}" />
                                </div>
                            </div>
                            <div class="user__buttons">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script>
        const gantiFoto = document.querySelector("#select-photo");
        const fotoProfil = document.querySelector("#profile-pic");

        gantiFoto.addEventListener("change", (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.onload = () => {
                fotoProfil.src = reader.result;
            };

            reader.readAsDataURL(file);
        });
        </script>
    </main>

    <script src="/js/main.js" type="module"></script>
    <script src="/js/user.js" type="module"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/icons/remixicon.css" />
</body>

</html>