@extends('layouts.main')

@section('tittle')
    <style>
        .image-size {
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 15rem;
        }

        @media (max-width: 500px) {
            .image-size {
                height: 8rem;
            }
        }
    </style>
@endsection

@section('container')
    <div class="mb-3">
        <div class="d-flex align-items-center justify-content-center" style="height: 15rem;">
            <img src="{{ asset('img/assetsImage/gallery-image/blueBanner.png') }}" alt="" class="img-fluid"
                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
            <div class="position-absolute text-center text-light">
                <h1 class="card-tittle m-0" data-aos="zoom-in" data-aos-duration="500">Gallery</h1>
            </div>
        </div>
    </div>

    @if ($galleries->count() > 0)
        <div class="container">
            <div class="px-3 pt-3">
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2" data-aos="zoom-in" data-aos-delay="500"
                    data-aos-duration="500">
                    @foreach ($galleries as $gallery)
                        <div class="col mb-3" data-aos="zoom-in" data-aos-duration="500">
                            <div class="card" style="height: 100%;">
                                <img src="{{ asset('storage/gallery/' . $gallery->image) }}"
                                    class="img-fluid bg-secondary-subtle image-size">
                                <div class="card-body p-2">
                                    <h6 class="card-title">{{ $gallery->tittle }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="reverse">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    @else
        <div style="padding-top: 10rem; padding-bottom: 10rem;">
            <h2 class="text-center text-secondary">No Gallery Found.</h2>
        </div>
    @endif
@endsection
