<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Aceh</title>
    <link rel="shortcut icon" href="assets/img/header/aceh.png" />

    <!-- CDN Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/menuzord.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/star.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <style>
        /* Tambahan Header */
        .nav-link {
            color: #1cdbed;
        }
        .caption_overlay {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            top: 50%;
            color: white;
            z-index: 100;
        }

        .w-100 {
            width: 100%;
        }

        .animated-title {
            font-family: inherit;
            position: relative;
            height: 100px;
            width: 100%;
            text-align: center;
        }

        .caption_overlay_title {
            font-size: 70px;
            font-weight: bold;
        }

        .caption_overlay_subtitle {
            font-size: 35px;
            font-weight: bold;
        }

        .text-top {
            height: 45%;
        }

        .my-10 {
            margin-top: 6.25rem !important;
            margin-bottom: 6.25rem !important;
        }

        .container-shortcut {
            display: inline-block;
        }

        .group-shortcut {
            margin-right: 1.5em;
            margin-left: 1.5em;
        }

        .btn-shortcut {
            height: 100px;
            width: 100px;
            padding: 13px 7px;
            position: relative;
            color: white;
            text-decoration: none;
            border-radius: 120px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .testing {
            border: 2px solid green;
            background: red;
        }

        .padding-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .image {
            border-radius: 20px;
        }

        /* .fullwidthbanner-container {
            width: 100%;
            position: relative;
            padding: 0;
            overflow: hidden;
        } */
    </style>
</head>

<body>
    {{-- <header class="header">
        <nav class="nav-menuzord nav-menuzord-transparent">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord">
                    <a href="{{ route('home') }}" class="menuzord-text-brand">
                        <img src="{{ asset('assets/img/header/surabaya.png') }}"
                            style="width: 120px;" alt="Wisata Surabaya">
                    </a>
                    <ul class="menuzord-menu menuzord-right">
                        <li class="">
                            <a class="font-weight-bold" href="{{ route('home') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="">
                            <a class="font-weight-bold" href="{{ route('publicDestinasi') }}">
                                Destinasi
                            </a>
                        </li>
                        <li class="">
                            <a class="font-weight-bold" href="{{ route('publicEvent') }}">
                                Event
                            </a>
                        </li>
                        <li class="">
                            <a class="font-weight-bold" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}

    <nav style="height:80px" class="navbar navbar-expand-lg navbar-expand-md nav-menuzord nav-menuzord-transparent" data-bs-theme="white">
        <div class="container p-2">
            <a class="navbar-brand ms-3" href="{{ route('home') }}" class="menuzord-text-brand">
                <img src="{{ asset('assets/img/header/aceh.png') }}"
                    style="width: 120px;" alt="Wisata Aceh">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end
                    me-4 " 
                id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"
                            style="font-size: 20px;
                                font-weight: 500;"
                            href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            style="font-size: 20px;
                                font-weight: 500;"
                            href="{{ route('publicDestinasi') }}">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            style="font-size: 20px;
                                font-weight: 500;"
                            href="{{ route('publicEvent') }}"> Event </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            style="font-size: 20px;
                                font-weight: 500;"
                            href="{{ route('team') }}"> Team </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            style="font-size: 20px;
                                font-weight: 500;"
                            href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="caption_overlay text-center w-100">
                <div class="text-top">
                    <h1 class="caption_overlay_title mt-0">
                        WISATA ACEH
                    </h1>
                </div>
            <div class="text-bottom">
                <div class="content">
                    <h2 class="mb-0 caption_overlay_subtitle">
                        You will love every corner of it
                    </h2>
                    <div class="mt-3">
                        <h5>
                            Let's explore one of the biggest city in Indonesia with famous name called "Serambi Mekkah" City .
                        </h5>
                    </div>
                </div>
            </div>
            <div class="my-10">
            </div>
            <div class="mt-9 container-shortcut">
                <div class="d-flex">
                    <div class="text-center group-shortcut">
                        <a href="{{ route('publicDestinasi') }}" class="btn-shortcut btn-beat-radial">
                            <div class="d-block w-100">
                                <i class="fa fa-fw fa-map-marked-alt fa-3x"></i>
                            </div>
                            <div class="d-block w-100">
                                <span>
                                    Destinasi Wisata
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="text-center group-shortcut">
                        <a href="{{route('publicEvent')}}" class="btn-shortcut btn-beat-radial">
                            <div class="d-block w-100">
                                <i class="fa fa-fw fa-bullhorn fa-3x"></i>
                            </div>
                            <div class="d-block w-100">
                                <span>
                                    Event Aceh
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <div class="bg-overlay-dark fullwidthbanner-container">
        <video class="w-100 video-front" autoplay muted loop id="myVideo"
            style="height: 100vh; object-fit: cover;">
            <source src="assets/video/aceh.mp4" type="video/mp4">
        </video>
    </div> 


    <!-- Isi Content -->
    <section class="padding-section">
        <div class="tittle text-center">
            <img src="assets/img/icon-index/icon-sign.png" alt="journey" height="100px" width="100px">
            <h1 class="font-weight-bold mt-2" style="font-size: 60px; color: #6868ac;">
                Start Your Best <br />
                Journey In Aceh
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-4">

                    <div>
                        <div class="mb-2">
                            <img class="image" src="assets/img/nature/1.jpg" alt="CITO"
                                height="400px" width="550px">
                        </div>
                        <span class="badge badge-primary mb-2"> Rumah Ibadah </span>
                        <h4 class="mb-1 font-weight-bold">Masjid Baiturrahman</h4>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Moh. Jam No.1, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh
                        </h6>
                    </div>

                    <div>
                        <div class="mb-2">
                            <img class="image" src="assets/img/nature/kbs1.jpg" alt="Tugu Pahlawan"
                                height="363px" width="550px">
                        </div>
                        <span class="badge badge-primary mb-2">Monumen</span>
                        <h4 class="mb-1 font-weight-bold">Titik Nol Kilometer Sabang </h4>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                           Desa Iboih Ujong Ba'u, Kecamatan Sukakarya, Kota Sabang
                        </h6>
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <div class="mb-2">
                        <img class="image" src="assets/img/nature/2.jpg" alt="KBS" height="900px"
                            width="550px">
                    </div>
                    <span class="badge badge-primary mb-2">Nature and Outdoor</span>
                    <h4 class="mb-1 font-weight-bold">Danau Lut Tawar</h4>
                    <h6>
                        <i class="fa fa-fw fa-map-marker-alt"></i>
                        Dataran Tinggi Gayo, Kabupaten Aceh Tengah, Aceh
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->

     <!-- Footer -->
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
     style="transform:rotate(180deg);margin-bottom:-1px">
     <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33"
         d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7
                 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
     </path>
     <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66"
         d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1
                 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
     </path>
     <path class="elementor-shape-fill" fill="#4a4a8a"
         d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0
                 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
     </path>
 </svg>
  <center>
 <footer class="footer row justify-content-center align-items-center">
     <div class="pb-3" style="background: #4a4a8a;">
         <div class="container">

             <!-- Find Us -->
            
             <div class="row">
                 <div class="col">
                     <div class="title-tag mb-5">
                         <h6>FIND US</h6>
                     </div>
                     <div class="footer-link mb-2">
                         <a href="#">
                             Tourism Information Center <br>
                             Jl. Lhokseumawe
                         </a>
                     </div>
                     <div class="hubungi-kami">
                         <button>
                             <a href="#"
                                 class="btn btn-white
                                         font-weight-bold
                                         telpon-icon">
                                 <i
                                     class="fa fa-fw fa-phone
                                             telpon-icon"></i>
                                 Kontak Kami
                             </a>
                         </button>
                     </div>
                     <div class="icon mt-3">
                         <button type="button" class="btn btn-light" style="border-radius: 30px;">
                             <div>
                                 <i
                                     class="fa-brands fa-facebook
                                             facebook-icon"></i>
                             </div>
                         </button>
                         <button type="button" class="btn btn-light
                                     ms-3"
                             style="border-radius: 30px;">
                             <div>
                                 <i class="fa-brands fa-instagram "></i>
                             </div>
                         </button>
                     </div>
                 </div>

                 <!-- Contact Us -->
                 <div class="col">
                     <div class="title-tag mb-5">
                         <h6>CONTACT US</h6>
                     </div>
                     <div class="footer-link mb-2">
                         <p>
                             Pengelola Wisata Aceh
                         </p>
                     </div>
                     <div class="row">
                         <div class="col-2 footer-link">
                             <span
                                 class="fa fa-lg fa-fw
                                         fa-map-marker-alt"></span>
                         </div>
                         <div class="col-10">
                             <p>
                                 Cot Tengku Nie Reuleut, Kec. Muara Batu, Kabupaten Aceh Utara, Aceh<br />
                                 
                             </p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-2 footer-link">
                             <span class="fa fa-lg fa-fw fa-phone"></span>
                         </div>
                         <div class="col-10">
                             <p>
                                 031-5318409
                             </p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-2 footer-link">
                             <span
                                 class="fa fa-lg fa-fw
                                         fa-envelope"></span>
                         </div>
                         <div class="col-10">
                             <p>
                                 pengelolawisataaceh@wisata.com
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- Our Other Sites -->
                
             </div>
         </div>
     </div>
     </center>
 </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
