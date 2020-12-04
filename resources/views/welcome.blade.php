<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SiCerDik') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- icon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icon') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icon') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icon') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icon') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icon') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icon') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icon') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icon') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icon') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icon') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon') }}/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('img/icon') }}/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/icon') }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /*!
 * Start Bootstrap - Landing Page v5.0.9 (https://startbootstrap.com/theme/landing-page)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
 */
        body {
            font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 700
        }

        header.masthead {
            position: relative;
            background: rgb(2, 0, 36);
            background: linear-gradient(25deg, rgba(2, 0, 36, 1) 0%, rgba(21, 121, 9, 1) 35%, rgba(0, 212, 255, 1) 100%);
            background-size: cover;
            padding-top: 8rem;
            padding-bottom: 8rem
        }

        header.masthead .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: .3
        }

        header.masthead h1 {
            font-size: 2rem
        }

        @media (min-width:768px) {
            header.masthead {
                padding-top: 12rem;
                padding-bottom: 12rem
            }

            header.masthead h1 {
                font-size: 3rem
            }
        }

        .showcase .showcase-text {
            padding: 3rem
        }

        .showcase .showcase-img {
            min-height: 30rem;
            background-size: cover
        }

        @media (min-width:768px) {
            .showcase .showcase-text {
                padding: 7rem
            }
        }

        .features-icons {
            padding-top: 7rem;
            padding-bottom: 7rem
        }

        .features-icons .features-icons-item {
            max-width: 20rem
        }

        .features-icons .features-icons-item .features-icons-icon {
            height: 7rem
        }

        .features-icons .features-icons-item .features-icons-icon i {
            font-size: 4.5rem
        }

        .features-icons .features-icons-item:hover .features-icons-icon i {
            font-size: 5rem
        }

        .testimonials {
            padding-top: 7rem;
            padding-bottom: 7rem
        }

        .testimonials .testimonial-item {
            max-width: 18rem
        }

        .testimonials .testimonial-item img {
            max-width: 12rem;
            box-shadow: 0 5px 5px 0 #adb5bd
        }

        .call-to-action {
            position: relative;
            background-color: #343a40;
            background: url(../img/bg-masthead.jpg) no-repeat center center;
            background-size: cover;
            padding-top: 7rem;
            padding-bottom: 7rem
        }

        .call-to-action .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: .3
        }

        footer.footer {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-pinggir.png') }}" alt="logo-pinggir.png" width="80" height="30"></a>
            <div>
                <a class="btn btn-primary btn-sm" href="{{ route('login') }}">Masuk</a>
                <a class="btn btn-info btn-sm" href="{{ route('register') }}">Daftar</a>
            </div>
        </div>
    </nav>
    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Selamat Datang Di Aplikasi SiCerDik</h1>
                    <p>Sicerdik merupakan aplikasi yang dapat membantu siswa/siswi, juga dapat menghubungkan antara guru dan siswa melalui aplikasi ini dalam kegitan proses pembelajaran dan memepermudah para guru dalam penugasan, penilaian, dan evaluasi. selain itu aplikasi ini bisa meningkatkan minat belajar siswa, karna terdapat sebuah reward dalam aplikasi ini dengan cara penukaran poin yang di peroleh dari pengisian soal.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/logo-kemendikbud.png') }}" alt="" width="140" height="120" class="mr-auto">
                        </div>
                        <h3>KEMENDIKBUD</h3>
                        <p class="lead mb-0">Kementerian Pendidikan dan Kebudayaan</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/kksi.jpeg') }}" alt="" width="140" height="120" class="mr-auto">
                        </div>
                        <h3>KKSI</h3>
                        <p class="lead mb-0">Kamp Kreatif Sekolah Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/smart-school.jpeg') }}" alt="" width="140" height="120" class="mr-auto">
                        </div>
                        <h3>Smart Schools</h3>
                        <p class="lead mb-0">KKSI - Bidang Smart School</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="text-center mb-3">
                            <img src="{{ asset('img/logo-smk.png') }}" alt="" width="140" height="120" class="mr-auto">
                        </div>
                        <h3>SMK PAY</h3>
                        <p class="lead mb-0">SMK Plus Ashabulyamin Cianjur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
        <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img">
                  <img src="{{ asset('img/developer/pembimbing.png') }}" alt="" width="400" height="500">
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Pembimbing</h2>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" value="Abdul Hakim M.A., S.Kom" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat Tanggal Lahir</label>
                      <input type="text" value="Bandung, 23 April 1995" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Motto</label>
                      <input type="text" value="Sacangreud Pageuh, Sagolek Pangkek" class="form-control" style="font-style:italic" disabled>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img">
                  <img src="{{ asset('img/developer/ui.jpg') }}" alt="" width="400" height="500">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>UI / UX Designer</h2>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" value="Yulia " class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat Tanggal Lahir</label>
                      <input type="text" value="" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Motto</label>
                      <input type="text" value="" class="form-control" style="font-style:italic" disabled>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img">
                <img src="{{ asset('img/developer/frontend.jpeg') }}" alt="" width="400" height="500">
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Frontend</h2>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" value="Muhammad Taufik" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat Tanggal Lahir</label>
                      <input type="text" value="03 November 2002" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Motto</label>
                      <input type="text" value="Berbuat baiklah tanpa perlu alasan" class="form-control" style="font-style:italic" disabled>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img">
                  <img src="{{ asset('img/developer/backend.jpg') }}" alt="" width="400" height="500">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Backend</h2>
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" value="Muhammad Fauzan F." class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat Tanggal Lahir</label>
                      <input type="text" value="Sukabumi, 19 Desember 2001" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="">Motto</label>
                      <textarea type="text" class="form-control" style="font-style:italic" disabled>Jadilah seperti pohon kelapa yang seribu guna, dan jadilah orang yang beguna untuk sesama</textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; SiCerDik 2020. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
