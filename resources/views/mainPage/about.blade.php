    @extends('layouts.main')

    @section('tittle')
        <link href="{{ 'assets/carousel.css' }}" rel="stylesheet">
        <style>
            .img-scroll-size {
                height: 25rem;
            }

            .gap-size {
                gap: 40px;
            }

            .carousel-item {
                transition: transform 1s ease, opacity 1s ease-out
            }

            .container-profil {
                display: flex;
                justify-content: space-between;
            }

            .mid-featurette {
                padding-left: 4rem;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (max-width: 1000px) {
                .mid-featurette {
                    padding-left: 1rem;
                }


            }

            @media (max-width: 500px) {

                .img-scroll-size {
                    height: 20rem;
                }

                .container-profil {
                    display: grid;
                    justify-content: center;
                    gap: 0.5rem;
                }

                .mid-featurette {
                    padding-left: 0rem;
                }

                .featurette-divider {
                    margin: 2rem;
                }

                .carousel-inner {
                    height: 20rem;
                }

                .image-scroll-2 {
                    background-position: center;
                }
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                width: 100%;
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .btn-bd-primary {
                --bd-violet-bg: #712cf9;
                --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-violet-bg);
                --bs-btn-border-color: var(--bd-violet-bg);
                --bs-btn-hover-color: var(--bs-white);
                --bs-btn-hover-bg: #6528e0;
                --bs-btn-hover-border-color: #6528e0;
                --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #5a23c8;
                --bs-btn-active-border-color: #5a23c8;
            }

            .bd-mode-toggle {
                z-index: 1500;
            }

            .bd-mode-toggle .dropdown-menu .active .bi {
                display: block !important;
            }
        </style>
    @endsection

    @section('container')
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item img-scroll-size active">
                    <img src="img/assetsImage/scroll-image/close-up-photographer-using-graphic-tablet-stylus-editing-pictures-photography-studio-image-editor-working-with-modern-equipment-gadget-retouching-photos-media-production.jpg"
                        class="img-fluid" alt="..."
                        style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                </div>
                <div class="carousel-item img-scroll-size">
                    <img src="img/assetsImage/scroll-image/photo-editor-working-independent-production-company-using-professional-graphic-tablet-photographer-adjusting-white-balance-overexposed-pictures-touchscreen-device-using-stylus-close-up.jpg"
                        class="img-fluid" alt="..."
                        style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                </div>
                <div class="carousel-item img-scroll-size">
                    <img src="img/assetsImage/scroll-image/adult-person-working-late-night-from-home.jpg" class="img-fluid"
                        alt="..." style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span aria-hidden="true"><i class='bx bx-chevron-left fs-1'></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span aria-hidden="true"><i class='bx bx-chevron-right fs-1'></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




        <div class="container marketing" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
            <div class="text-center pb-3">
                <h1 class="m-0">Our Team</h1>
                <p class="text-secondary">People who influence the company</p>
            </div>
            <div class="container-profil">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <img src="{{ asset('img/assetsImage/profil-picture/stanLee.jpg') }}" alt=""
                        class="border border-secondary-subtle border-3 rounded-circle" width="140" height="140"
                        style="object-position: center; object-fit: cover;">
                    <h2 class="fw-semibold pt-2 m-0">Stan Lee</h2>
                    <p class="text-secondary m-0"><small>CEO of DS Company</small></p>
                    <div class="d-flex justify-content-center gap-2 fs-5">
                        <a href="https://www.facebook.com/realstanlee"><i
                                class='bx bxl-facebook-circle primary-icon'></i></a>
                        <a href="https://x.com/TheRealStanLee"><i class='bx bxl-twitter primary-icon'></i></a>
                        <a href="https://www.instagram.com/therealstanlee/"><i
                                class='bx bxl-instagram-alt primary-icon'></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <img src="{{ asset('img/assetsImage/profil-picture/sdiup81fiev8abr5lt9p5gl4c6._SY600_.jpg') }}"
                        alt="" class="border border-secondary-subtle border-3 rounded-circle" width="140">
                    <h2 class="fw-semibold pt-2 m-0">James Martin</h2>
                    <p class="text-secondary m-0"><small>Designer of DS Company</small></p>
                    <div class="d-flex justify-content-center align-items-center gap-2 fs-5">
                        <i class='bx bxl-facebook-circle'></i>
                        <a href="https://x.com/themadebyjames"><i class='bx bxl-twitter primary-icon'></i></a>
                        <a href="https://www.instagram.com/made.by.james/"><i
                                class='bx bxl-instagram-alt primary-icon'></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                    <img src="{{ asset('img/assetsImage/profil-picture/Tinker_Hatfield.jpg') }}" alt=""
                        class="border border-secondary-subtle border-3 rounded-circle" width="140" height="140"
                        style="object-position: center; object-fit: cover;">
                    <h2 class="fw-semibold pt-2 m-0">Tinker Hatfield</h2>
                    <p class="text-secondary m-0"><small>Designer Of DS Company</small></p>
                    <div class="d-flex justify-content-center align-items-center gap-2 fs-5">
                        <a href="https://web.facebook.com/TinkerHatfieldShoes"><i
                                class='bx bxl-facebook-circle primary-icon'></i></a>
                        <i class='bx bxl-twitter'></i>
                        <a href="https://www.instagram.com/tinkahat/"><i class='bx bxl-instagram-alt primary-icon'></i></a>
                    </div>
                </div>
            </div>


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row flex-row-reverse featurette gap-size py-5 bg-body-secondary" data-aos="zoom-in"
                data-aos-duration="500">
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <img src="{{ 'img/assetsImage/about-image/Key Tactics from the Military Art of Adaptive Planning.jpg' }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="featurette-heading fw-normal lh-1 m-0 py-4">Perjalanan Kreativitas Kami</h2>
                    <p class="lead">Kami adalah sebuah studio desain yang berdedikasi untuk menciptakan karya-karya
                        visual yang memukau. Dengan semangat kreativitas yang tinggi, kami berkomitmen untuk membantu klien
                        kami mencapai tujuan branding mereka.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette mid-featurette gap-size py-5 bg-body-secondary" data-aos="zoom-in"
                data-aos-duration="500">
                <div class="col-md-5 d-flex align-items-center justify-content-start">
                    <img src="{{ 'img/assetsImage/about-image/Free Photo _ Cherful positive young colleagues using laptop computer_.jpg' }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="featurette-heading fw-normal lh-1 m-0 py-4">Di Balik Setiap Desain, <span
                        style="color: #435fed">Ada Cerita</span></h2>
                    <p class="lead">Pernahkah kamu bertanya-tanya bagaimana sebuah logo yang sederhana bisa begitu
                        berkesan? Di balik setiap desain yang kami buat, terdapat sebuah cerita yang mendalam. Kami percaya
                        bahwa desain bukan hanya sekadar gambar, tetapi sebuah bentuk komunikasi yang kuat.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row flex-row-reverse featurette gap-size py-5 bg-body-secondary" data-aos="zoom-in"
                data-aos-duration="500">
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <img src="{{ 'img/assetsImage/about-image/13 Brand Names That You Might Have Been Pronouncing Wrong All This Time - When In Manila.jpg' }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="featurette-heading fw-normal lh-1 m-0 py-4">Desain Berkualitas, Hasil Maksimal</h2>
                    <p class="lead">Kami berkomitmen untuk memberikan desain berkualitas tinggi yang sesuai dengan
                        kebutuhan dan ekspektasi klien. Setiap proyek yang kami kerjakan, kami perlakukan seperti proyek
                        kami sendiri.</p>
                </div>
            </div>
        </div>
    @endsection
