<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Akun - NusantaraKu</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/main.min.css" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
</head>

<body>
    <main>
        <section class="login">
            <div class="container login__container">
                <div class="login__banner">
                    <img src="./img/banner-register.webp" alt="Banner Login Page" />
                    <div class="login__information">
                        <h6>Rumah Adat Kajang Lako</h6>
                        <p>
                            Rumah Panggung Kajang Lako adalah nama rumah adat yang berasal dari daerah Jambi. Rumah ini
                            adalah rumah tradisional masyarakat provinsi Jambi. Secara arsitektural, rumah panggung ini
                            dibangun dengan tetap mempertahankan gaya tradisional yang merupakan warisan dari
                            generasi nenek moyang masyarakat Jambi, baik pada bagian interior maupun pada bagian
                            eksteriornya.
                        </p>
                    </div>
                </div>
                <div class="login__content">
                    <a href="/"><img src="./img/logo-wide.svg" alt="Logo NusantaraKu Wide" /></a>
                    <div class="login__title">
                        <h5>Daftar Akun</h5>
                        <p>Silahkan isi form berikut untuk mendaftar akun baru.</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST" class="login__form">
                        @csrf
                        <div class="input__group">
                            <label class="input__label" for="name">Nama Lengkap</label>
                            <input type="name" name="name" value="{{ old('name') }}" id="name" required />
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input__group">
                            <label class="input__label" for="email">Alamat Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" required />
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input__group">
                            <label class="input__label" for="password">Password </label>
                            <input type="password" name="password" value="{{ old('password') }}" id="password" required
                                autocomplete="true" minlength="8" />
                            <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                    class="ri-eye-line"></i></button>
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input__group">
                            <label class="input__label" for="confirm-password">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" id="confirm-password" required
                                autocomplete="true" minlength="8" />
                            <button class="btn-icon btn-toggle-password" tabindex="-1"><i
                                    class="ri-eye-line"></i></button>
                        </div>
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="terms">
                            <input type="checkbox" name="terms" id="terms" required />
                            <p>Dengan ini saya menyetujui <strong>Syarat dan Ketentuan</strong> yang berlaku di Platform
                                NusantaraKu</p>
                        </label>

                        <div class="login__button">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <a href="{{ route('google.redirect') }}" type="submit" class="btn btn-outline">
                                <img src="./img/logo-google.webp" />
                                Daftar Menggunakan Google
                            </a>
                        </div>
                    </form>
                    <div class="login__footer">
                        <p>
                            Sudah memiliki akun? <a href="/login"><strong>Masuk Disini</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <link rel="stylesheet" href="./css/remixicon.css" />
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
</body>

</html>