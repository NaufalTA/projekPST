@extends('layouts.main')

@section('tittle')
    <style>
        .b-example-divider {
            width: 100%;
            height: 2rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .padding-hero {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        @media screen and (max-width: 500px) {

            .gallery-font {
                font-size: 1.5rem;
            }

            .image-gone {
                display: none;
            }

            .padding-hero {
                padding-top: 0;
                padding-bottom: 0;
            }

            .features-font {
                font-size: 0.7rem;
            }
        }

        @media screen and (max-width: 1000px) {
            .image-gone {
                display: none;
            }
        }
    </style>
@endsection


@section('container')
    {{-- HERO --}}
    <div class="text-white"
        style="background-image: url({{ asset('img/assetsImage/4845913.png') }}); background-color: rgba(0, 0, 0, .7); width: 100%; background-position: 10%;">
        <div class="container col-xxl-12 px-4">
            <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-lg-5 image-gone" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
                    <img src="{{ asset('img/assetsImage/social-media-marketing-concept-marketing-with-applications.png') }}"
                        class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500"
                        loading="lazy">
                </div>
                <div class="col-lg-7 col-md-8 py-5" data-aos="fade-down" data-aos-delay="400" data-aos-duration="800">
                    <h1 class="fw-bold lh-1 mb-3">Desain Logo Impianmu dalam Sekejap!
                    </h1>
                    <p class="lead py-3">Berikan detail produk Anda, dan kami akan memberikan konsep desain logo yang
                        menarik!</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start" data-aos="fade-right" data-aos-delay="800"
                        data-aos-duration="">
                        <a href="/service" class="btn btn-outline-light btn-lg px-4">Selengkapnya &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PRODUCT --}}
    <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h2 class="display-5 fw-normal text-body-emphasis">Products</h2>
            <p class="text-body-secondary">Kami tawarkan berbagai pilihan paket dengan fitur yang lengkap, Dapatkan
                <span class="fw-bold">logo berkualitas tinggi</span> yang akan membuat bisnismu
                semakin dikenal.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-2 text-center">
            <div class="col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Logo Reguler</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title py-2">$65
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>* 3 Pilihan Desain Logo</li>
                            <li>* 2x Revisi Logo</li>
                            <li>* 3D Mockup</li>
                            <li><strong>And more...</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Logo Starter</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title py-2">$125
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>* 5 Pilihan Desain Logo</li>
                            <li>* 3x Revisi Logo</li>
                            <li>* 3D Mockup</li>
                            <li><strong>And more...</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Logo Premium</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title py-2">$180
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>* 8 Pilihan Desain Logo</li>
                            <li>* 5x Revisi Logo</li>
                            <li>* 3D Mockup</li>
                            <li><strong>And more...</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
            <a href="/service" class="btn primary-color-button py-2 px-4">Mulai Desain Logo Anda!</a>
        </div>
    </div>

    {{-- FEATURES --}}
    <div class="container px-4" style="padding-top: 8rem; padding-bottom: 8rem;" id="icon-grid" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
        <h1 class="pb-4 border-bottom text-center">Solusi Maksimal<br>
            <span style="color: #435fed">Desain Profesional</span>
        </h1>

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-5 py-5 features-font" data-aos="zoom-in"
            data-aos-delay="300" data-aos-duration="500">
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-timer fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Cepat</h3>
                    <p>Pembuatan Logo Dalam Waktu Yang Sangat Cepat</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-support fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Komunikatif</h3>
                    <p>Kemudahan untuk berkomunikasi dengan admin</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bxs-coin-stack fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Paham Bisnis</h3>
                    <p>Kami membuat desain dan saran dari sudut pandang bisnis.</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-universal-access fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Universal</h3>
                    <p>Desain yang kami buat, dapat diaplikasikan di berbagai media.</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-rocket fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Custom Design</h3>
                    <p>Hasil desain profesional dengan kualitas internasional.</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bxs-user-check fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Expert</h3>
                    <p>Logo yang di buat oleh desainer professional</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-receipt fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Up To Date</h3>
                    <p>Logo yang kami buat, dapat mengikuti tren maupun timeless.</p>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300"
                data-aos-duration="500">
                <i class='bx bx-layer fs-3 p-1' style="color: #4660df;"></i>
                <div class="text-center">
                    <h3 class="fw-bold mb-0 fs-5 text-body-emphasis">Bergaransi</h3>
                    <p>Berkomitmen untuk selalu mengutamakan kepuasan pelanggan.</p>
                </div>
            </div>

        </div>
    </div>

    {{-- FEATURES --}}
    <div class="container px-4" style="padding-bottom: 8rem" id="featured-3" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
        <h1 class="pb-4 border-bottom text-center">Desain Berkualitas<br><span style="color: #435fed">Hasil Maksimal</span></h1>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div class="feature col" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center fs-3 mb-3 text-light"
                    style="background-color: #2e46bc">
                    <i class='bx bx-wrench fs-5'></i>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Service</h3>
                    <p>Ingin desain yang bikin kamu wow? kami akan mewujudkan idemu menjadi karya yang <span class="fw-bold">berkualitas.</span></p>
                </div>
                <a href="/service" class="icon-link text-decoration-none" style="color: #435fed">
                    selengkapnya
                    <i class='bx bx-chevrons-right pt-1'></i>
                </a>
            </div>

            <div class="feature col" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center text-light fs-2 mb-3"
                    style="background-color: #2e46bc">
                    <i class='bx bx-user fs-5'></i>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Contact</h3>
                    <p>Butuh bantuan? Hubungi kami, kami <span class="fw-bold">siap melayani dan membantu</span> untuk mewujudkan ide desainmu.</p>
                </div>
                <a href="/contact" class="icon-link text-decoration-none" style="color: #435fed">
                    selengkapnya
                    <i class='bx bx-chevrons-right pt-1'></i>
                </a>
            </div>

            <div class="feature col" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center text-white fs-2 mb-3"
                    style="background-color: #2e46bc">
                    <i class='bx bx-images fs-5'></i>
                </div>
                <div>
                    <h3 class="fs-2 text-body-emphasis">Galleries</h3>
                    <p>Hasil adalah bukti, Lihat sendiri hasil karya kami yang <span class="fw-bold">kreatif dan menarik</span>. Kunjungi galeri kami
                        sekarang!</p>
                </div>
                <a href="/galleries" class="icon-link text-decoration-none" style="color: #435fed">
                    selengkapnya
                    <i class='bx bx-chevrons-right pt-1'></i>
                </a>
            </div>
        </div>
    </div>
@endsection
