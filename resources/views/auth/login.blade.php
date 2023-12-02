<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Masuk Akun - NusantaraKu</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/main.min.css" />
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    </head>
    <body>
        <main>
            <section class="login">
                <div class="container login__container">
                    <div class="login__content">
                        <a href="/"><img src="./img/logo-wide.svg" alt="Logo NusantaraKu Wide" /></a>
                        <div class="login__title">
                            <h5>Masuk Akun</h5>
                            <p>Silahkan masuk menggunakan akun yang sudah terdaftar.</p>
                        </div>
                        <form action="{{ route('login') }}" class="login__form" method="POST">
                            @csrf
                            <div class="input__group">
                                <label class="input__label" for="email">Alamat Email</label>
                                <input type="email" name="email" id="email" required />
                            </div>
                            <div class="input__group">
                                <label class="input__label" for="password">Password </label>
                                <input type="password" name="password" id="password" required autocomplete="true" />
                                <button class="btn-icon" id="btn-toggle-password"><i class="ri-eye-line"></i></button>
                            </div>
                            <div class="input__row">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember" />
                                    Ingat Saya</label
                                >
                                <a href="./lupa-password.html">Lupa Password?</a>
                            </div>

                            <div class="login__button">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                                <button type="submit" class="btn btn-outline">
                                    <img src="./img/logo-google.png" />
                                    Masuk Menggunakan Google
                                </button>
                            </div>
                        </form>
                        <div class="login__footer">
                            <p>
                                Belum memiliki akun? <a href="/register"><strong>Daftar Disini</strong></a>
                            </p>
                        </div>
                    </div>
                    <div class="login__banner">
                        <img src="./img/banner-login.jpg" alt="Banner Login Page" />
                        <div class="login__information">
                            <h6>Tari Piring</h6>
                            <p>
                                Tari piring adalah tarian tradisional Minangkabau yang menampilkan atraksi menggunakan piring. Para penari mengayunkan piring di tangan mengikuti gerakan-gerakan cepat yang teratur, tanpa satu pun piring terlepas dari tangan. Gerakannya diambil dari langkah dalam
                                silat Minangkabau atau silek.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <link rel="stylesheet" href="./icons/remixicon.css" />
        <script>
            const btnTogglePassword = document.querySelector('#btn-toggle-password');
            const inputPassword = document.querySelector('#password');

            btnTogglePassword.addEventListener('click', (e) => {
                e.preventDefault();
                if (inputPassword.type === 'password') {
                    inputPassword.type = 'text';
                    btnTogglePassword.innerHTML = '<i class="ri-eye-off-line"></i>';
                } else {
                    inputPassword.type = 'password';
                    btnTogglePassword.innerHTML = '<i class="ri-eye-line"></i>';
                }
            });
        </script>
    </body>
</html>
