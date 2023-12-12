<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User: Ubah Password - NusantaraKu</title>
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
                            <h2>Ubah Password</h2>
                        </div>
                        <form class="user__content" method="POST"
                            action="{{ route('change-password.update',$data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="user__detail">
                                <div class="input__group">
                                    <label class="input__label" for="old-password">Password Lama</label>
                                    <input type="password" value="{{ old('password') }}" name="oldPassword"
                                        id="old-password" required autocomplete="true" minlength="8" />
                                    <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                            class="ri-eye-line"></i></button>
                                    @error('old-password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="new-password">Password Baru</label>
                                    <input type="password" name="password" id="new-password" required
                                        autocomplete="true" minlength="8" />
                                    <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                            class="ri-eye-line"></i></button>
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="confirm-new-password">Konfirmasi Password
                                        Baru</label>
                                    <input type="password" name="password_confirmation" id="confirm-new-password"
                                        required autocomplete="true" minlength="8" />
                                    <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                            class="ri-eye-line"></i></button>
                                    @error('confirm-new-password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
        const btnTogglePasswords = document.querySelectorAll('.btn-toggle-password');
        const passwordFields = document.querySelectorAll('[type="password"]');

        btnTogglePasswords.forEach((btnTogglePassword, index) => {
            btnTogglePassword.addEventListener('click', (e) => {
                e.preventDefault();
                if (passwordFields[index].type === 'password') {
                    passwordFields[index].type = 'text';
                    btnTogglePassword.innerHTML = '<i class="ri-eye-off-line"></i>';
                } else {
                    passwordFields[index].type = 'password';
                    btnTogglePassword.innerHTML = '<i class="ri-eye-line"></i>';
                }
            });
        });

        const newPassword = document.getElementById('new-password');
        const confirmNewPassword = document.getElementById('confirm-new-password');

        confirmNewPassword.addEventListener('input', (e) => {
            if (newPassword.value !== confirmNewPassword.value) {
                confirmNewPassword.setCustomValidity('Password tidak sama');
            } else {
                confirmNewPassword.setCustomValidity('');
            }
        });
        </script>
    </main>

    <script src="/js/main.js" type="module"></script>
    <script src="/js/user.js" type="module"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/remixicon.css" />
</body>

</html>