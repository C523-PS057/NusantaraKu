<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reset Password Berhasil - NusantaraKu</title>
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
                                    <img src="/img/icon-success.svg" />
                                    <h5>Reset Password Berhasil</h5>
                                    <p>Sekarang kamu bisa menggunakan password baru untuk masuk akunmu.</p>
                                </div>
                                <div class="reset__input">
                                    <a href="/" class="btn btn-primary">Masuk Akun</a>
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
