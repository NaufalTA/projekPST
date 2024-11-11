@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="text-center pt-5" data-aos="zoom-in" data-aos-duration="500">
            <h1>CONTACT</h1>
            <p class=""><small>Kami siap membantu Anda dalam menciptakan logo yang unik dan sesuai dengan brand Anda.
                    Jangan ragu untuk menghubungi kami untuk konsultasi atau pemesanan.</small></p>
        </div>
        <div class="py-5 d-flex justify-content-center px-2 row row-cols-lg-2 row-cols-md-1 row-cols-sm-1 gap-3"
            data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            <div class="py-5" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
                <div class="d-flex gap-2 py-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/assetsImage/profil-picture/stanLee.jpg') }}" alt="" width="70"
                            height="70" class="rounded-circle" style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="m-0"><small>Stan Lee</small></h5>
                        <h6 class="m-0 text-secondary"><small>CEO</small></h6>
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="https://www.facebook.com/realstanlee"><i
                                    class='bx bxl-facebook-circle primary-icon'></i></a>
                            <a href="https://x.com/TheRealStanLee"><i class='bx bxl-twitter primary-icon'></i></a>
                            <a href="https://www.instagram.com/therealstanlee/"><i
                                    class='bx bxl-instagram-alt primary-icon'></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2 py-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/assetsImage/profil-picture/sdiup81fiev8abr5lt9p5gl4c6._SY600_.jpg') }}"
                            alt="" width="70" height="70" class="rounded-circle"
                            style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="m-0"><small>James Martin</small></h5>
                        <h6 class="m-0 text-secondary"><small>DESIGNER</small></h6>
                        <div class="d-flex justify-content-start align-items-center">
                            <i class='bx bxl-facebook-circle'></i>
                            <a href="https://x.com/themadebyjames"><i class='bx bxl-twitter primary-icon'></i></a>
                            <a href="https://www.instagram.com/made.by.james/"><i
                                    class='bx bxl-instagram-alt primary-icon'></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2 py-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/assetsImage/profil-picture/Tinker_Hatfield.jpg') }}" alt=""
                            width="70" height="70" class="rounded-circle"
                            style="object-fit: cover; object-position: center">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="m-0"><small>Tinker Hatfield</small></h5>
                        <h6 class="m-0 text-secondary"><small>DESIGNER</small></h6>
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="https://web.facebook.com/TinkerHatfieldShoes"><i
                                    class='bx bxl-facebook-circle primary-icon'></i></a>
                            <i class='bx bxl-twitter'></i>
                            <a href="https://www.instagram.com/tinkahat/"><i
                                    class='bx bxl-instagram-alt primary-icon'></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
                <div class="card">
                    <div class="p-4">
                        <h2 class="text-center"><span  style="color: #435fed">Contact</span> Us!</h2>
                        <h6 class="text-center text-secondary"><small>jika anda memiliki keluhan atau ingin bertanya
                                mengenai logo, silahkan hubungi contact atau datangi lokasi ada di bawah</small></h6>
                        <div class="border-bottom border-secondary pt-4"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center pb-4 gap-2">
                            <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center text-white fs-2"
                                style="background-color: #2e46bc">
                                <i class='bx bx-envelope fs-5'></i>
                            </div>
                            <h5><small>Naufallopayy25@gmail.com</small></h5>
                        </div>
                        <div class="d-flex align-items-center pb-4 gap-2">
                            <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center text-white fs-2"
                                style="background-color: #2e46bc">
                                <i class='bx bx-phone fs-5'></i>
                            </div>
                            <h5><small>+62 898-6274-198</small></h5>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="feature-icon d-inline-flex rounded-circle p-2 align-items-center justify-content-center text-white fs-2"
                                style="background-color: #2e46bc">
                                <i class='bx bx-map fs-5'></i>
                            </div>
                            <h5><small>Perum Puskopad JL.Garuda 4 BLOK C 34</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 row" data-aos="zoom-in" data-aos-duration="500">
            <div class="text-center py-3" data-aos="zoom-in" data-aos-duration="500">
                <h1>Our Location</h1>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center py-3" data-aos="zoom-in"
                        data-aos-delay="500" data-aos-duration="500">
                        <i class='bx bx-building-house fs-1 p-2' style="color: #435fed;"></i>
                        <div class="text-start">
                            <h4 class="m-0">Workshop</h4>
                            <p class="m-0"><small>Perum Puskopad JL.Garuda 4 BLOK C 34, Purwakarta, Jawa Barat
                                    41118</small></p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center py-3" data-aos="zoom-in"
                        data-aos-delay="500" data-aos-duration="500">
                        <i class='bx bx-home-smile fs-1 p-2' style="color: #435fed"></i>
                        <div class="text-start">
                            <h4 class="m-0"">Office</h4>
                            <p class="m-0"><small>Jl. Jend. Ahmad Yani No.98, Nagri Tengah, Purwakarta, Jawa Barat
                                    41114</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.019387698745!2d107.46358889999999!3d-6.519228999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690de3be99d6c1%3A0x46c060cda53d9bfe!2sJl.%20Puskopad%2C%20Ciseureuh%2C%20Kec.%20Purwakarta%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat%2041118!5e0!3m2!1sid!2sid!4v1727528305050!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" data-aos="zoom-in" data-aos-duration="500"
                data-aos-delay="500"></iframe>
        </div>
    </div>
@endsection
