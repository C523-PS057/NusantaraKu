<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password - NusantaraKu</title>
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
                                <h5>Reset Password Akun</h5>
                            </div>
                            <form class="reset__input" method="POST" action="{{route('password.email')}}">
                                @csrf
                                <div class="input__group">
                                    <label class="input__label" for="email">Alamat Email</label>
                                    <input type="email" name="email" id="email" required />
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

    <link rel="stylesheet" href="/css/remixicon.css" />
</body>

</html>
