<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALKASOFT - @yield('title')</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            {{-- @section('title', 'Create') --}}
            <form action="#">
                <h1>Buat Akun</h1>
                <input type="text" placeholder="Nama Lengkap" required />
                <input type="email" placeholder="Alamat Email" required/>
                <input type="password" placeholder="Kata Sandi" required/>
                <input type="password" placeholder="Konfirmasi Kata Sandi" required/>
                <input type="text" name="" id="" placeholder="Perusahaan" required>
                <input type="number" name="" id="" placeholder="No. HP" required>
                <span>atau daftar dengan sosial media</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <button><a href="#" class="btn">Daftar</a></button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Masuk</h1>
                <input type="email" placeholder="Alamat Email" required/>
                <input type="password" placeholder="Kata Sandi" required/>
                <a href="#">Lupa kata sandi?</a>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <a href="{{ url('/dashboard') }}" class="btn">Masuk</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="wrapper-img" style="width: 150px;">
                        <img style="width: 100%;" src="{{ asset('assets/img/logo.png') }}" alt="" srcset="">
                    </div>
                    <img style="width: 100%; padding: 10px 0;" src="{{ asset('assets/img/login.svg') }}" alt="" srcset="">
                    <h1>Selamat Datang!</h1>
                    <p>Untuk tetap terhubung dengan kami, silahkan masuk terlebih dahulu</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <div class="wrapper-img" style="width: 180px; height: 80px">
                        <img style="width: 100%;" src="{{ asset('assets/img/galkasoft-hr.png') }}" alt="" srcset="">
                    </div>
                    <img style="width: 100%; padding: 10px 0;" src="{{ asset('assets/img/login.svg') }}" alt="" srcset="">
                    <h1>Selamat Datang!</h1>
                    <p>Belum punya akun ?<br>Silahkan daftarkan perusahaan anda</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>
</html>