<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Aceh</title>
    <link rel="shortcut icon" href="assets/img/header/aceh.png" />

    <!-- CDN Vue JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script> --}}

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">

</head>

<body>
    <!-- Navigasi -->
    <section class="navigasi">
        <nav class="navbar navbar-expand-lg box-navbar" data-bs-theme="white">
            <div class="container p-2">
                <a class="navbar-brand ms-3" href="#">
                    <img src="{{ asset('assets/img/header/aceh.png') }}" alt="Bootstrap" width="105px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end
                        me-4"
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
    </section>

    <!-- Judul -->
    <section class="judul mt-5 mb-5">
        <div class="text-center">
            <h2 class="text-uppercase font-weight-bold mb-4">Destinasi
                Wisata</h2>
        </div>
    </section>

    <!-- Isi Content -->
    <section class="mb-5 mt-3">
        <div id="app">


            <div class="container">
                <form action="{{ route('filterDestinasi') }}" method="GET">
                <div class="row" id="accordionPanelsStayOpenExample">

                    <div class="p-2 accordion-item accordion-toggle col-md-12 col-lg-8" style="border: 2px solid #ccc; display: flex; justify-content: center;">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    <span class="font-weight-bold" style="font-size: 20px;
                                            color: #6868ac;">Filter Kategori</span>
                                </button>
                            </h2>
                        </div>

                        {{-- <div class="accordion-item accordion-toggle col-4" style="border: 2px solid #ccc;">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    <span class="font-weight-bold" style="font-size: 20px;
                                            color: #6868ac;">Filter Keyword</span>
                                </button>
                            </h2>
                        </div> --}}

                            <button type="submit" class="badge badge-primary tester col-md-12 col-lg-4"><i class="fa fa-fw fa-search"></i> Filter</button>

                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse
                                collapse" aria-labelledby="panelsStayOpen-headingOne" style="border: 2px solid #ccc;">
                            <div class="accordion-body">

                                <!-- Radio Button -->

                                <div class="p-2">
                                    {{-- <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="selectcategory"
                                            id="flexRadioDefault1" value="">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Semua
                                        </label>
                                    </div> --}}
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="selectcategory"
                                            id="flexRadioDefault1" value="pusat perbelanjaan">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Pusat Perbelanjaan
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="selectcategory"
                                            id="flexRadioDefault1"  value="monumen">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Monumen
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="selectcategory"
                                            id="flexRadioDefault1"  value="religi">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Religi
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="selectcategory"
                                            id="flexRadioDefault1"  value="nature">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Nature and Outdoor
                                        </label>
                                    </div>

                                </div>
                                <!-- End Radio Button -->

                            </div>
                        </div>
                        {{-- <div id="panelsStayOpen-collapseTwo" class="accordion-collapse
                                collapse" aria-labelledby="panelsStayOpen-headingTwo" style="border: 2px solid #ccc;">
                            <div class="accordion-body">
                                <div class="mt-2 mb-2">
                                    <input class="form-control" type="text" name="search"
                                        placeholder="Cari Kata Kunci">
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </form>

                    {{-- Filter End --}}


                    <div class="container text-center">
                        <div class="row">
                            @foreach ($destinasi as $dest)
                            <div class="col-md-12 col-lg-4">
                                <a href="{{ route('detailDestinasi', [$dest->id]) }}" style="text-decoration: none; ">
                                <div class="mb-2 mt-3 img-rounded-hover-effect">
                                        <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="Destinasi" class="img-fluid">
                                    </div>
                                    <div>
                                        <span class="badge badge-primary"> {{ $dest->dest_category }}
                                        </span>
                                    </div>
                                    <hr class="mt-2 mb-2 badge-primary"
                                        style="border: 1.5px solid
                                        #6868ac; border-radius: 5px" />
                                    <div>
                                        <h5 class='font-weight-bold' style="color: black"> {{ $dest->dest_name }} </h5>
                                        <h6 style="color: black">
                                            <i
                                                class="fa fa-fw
                                                fa-map-marker-alt"></i>
                                            {{ $dest->dest_location }}
                                        </h6>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                        </div>
                        {{$destinasi->links('paginatedest')}}
                    </div>

                </div>


            </div>
    </section>

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
 <footer>
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

    {{-- <script>
            class Post {
                constructor(nama, kategori, img, alamat, category) {
                    this.nama = nama;
                    this.kategori = kategori;
                    this.img = img;
                    this.alamat = alamat;
                    this.category = category;
                }
            }

            const app = new Vue({
                el: "#app",
                data: {
                    search: "",
                    postList: [
                        new Post(
                            "City Of Tomorrow",
                            "Pusat Perbelanjaan",
                            "assets/img/belanja/city-of-tomorrow-mall.jpeg",
                            "Jl. Ahmad Yani No.288, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60234",
                            "pusatperbelanjaan"
                        ),
                        new Post(
                            "Tunjungan Plaza",
                            "Pusat Perbelanjaan",
                            "assets/img/belanja/tunjunganplaza.jpg",
                            "Jl. Jenderal Basuki Rachmat No.8-12, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261",
                            "pusatperbelanjaan"
                        ),
                        new Post(
                            "Monumen Jendral Sudirman",
                            "Monumen",
                            "assets/img/monumen/jendralsudirman.jpg",
                            "Jl. Yos Sudarso ",
                            "monumen"
                        ),
                        new Post(
                            "Monumen Kapal Selam",
                            "Monumen",
                            "assets/img/monumen/kapalselam.jpg",
                            "Jl. Pemuda no. 39 "
                        ),
                        new Post(
                            "Monumen Tugu Pahlawan",
                            "Monumen",
                            "assets/img/monumen/tugupahlawan.jpg",
                            "Jl. Pahlawan",
                            "monumen"
                        ),
                        new Post(
                            "Kebun Binatang Surabaya",
                            "Nature and Outdoor",
                            "assets/img/nature/kbs1.jpg",
                            "Jl. Setail No.1, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241",
                            "nature"
                        ),
                        new Post(
                            "Wisata Perahu Kalimas",
                            "Nature and Outdoor",
                            "assets/img/nature/perahukalimas.jpg",
                            "Jl. Ketabang Kali, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272",
                            "nature"
                        ),
                        new Post(
                            "Masjid Al-Akbar Surabaya",
                            "Religi",
                            "assets/img/religi/m_alakbar.jpg",
                            "Jl. Masjid Al-AkbarTimur No.1, Pagesangan, Kec. Jambangan, Kota SBY, Jawa Timur 60274",
                            "religi"
                        ),
                        new Post(
                            "Masjid Sunan Ampel Surabaya",
                            "Religi",
                            "assets/img/religi/m_sunanam.jpg",
                            "Jl. Ampel Masjid No.53, Ampel, Kec. Semampir, Kota SBY, Jawa Timur 60151",
                            "religi"
                        ),
                    ],
                    selectedCategory: "All"
                },
                computed: {
                    filteredList: function () {
                        var category = this.selectedCategory;

                        if (category === "All") {
                            return this.postList.filter((post) => {
                                return post.nama
                                    .toLowerCase()
                                    .includes(this.search.toLowerCase());
                            });
                        } else {
                            return this.postList.filter((post) => {
                                return post.category === category;
                            });
                        }
                    },
                },
            });
        </script> --}}
    <!-- CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
