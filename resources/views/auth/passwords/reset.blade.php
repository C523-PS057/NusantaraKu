<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konfirmasi Reset Password - NusantaraKu</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
</head>

<body>
    <main class="reset__main">
        <section class="reset">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 col-lg-4 m-auto">
                        <div class="reset__content">
                            <div class="reset__title">
                                <img src="/img/icon-key.svg" />
                                <h5>Buat Password Baru</h5>
                            </div>
                            <form class="reset__input" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="input__group">
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input value="{{ $email ?? old('email') }}" type="hidden" name="email" id="email"
                                        required autocomplete="true" />
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="password">Password </label>
                                    <input type="password" name="password" id="password" required autocomplete="true"
                                        minlength="8" />
                                    <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                            class="ri-eye-line"></i></button>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input__group">
                                    <label class="input__label" for="confirm-password">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="confirm-password" required
                                        autocomplete="true" minlength="8" />
                                    <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                            class="ri-eye-line"></i></button>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Reset Password</button>
                            </form>
                            <div class="reset__footer">
                                <a href="/login"><i class="ri-arrow-left-line"></i> Kembali ke halaman Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');

    confirmPassword.addEventListener('input', (e) => {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Password tidak sama');
        } else {
            confirmPassword.setCustomValidity('');
        }
    });
    </script>
    <link rel="stylesheet" href="/icons/remixicon.css" />
</body>

</html>