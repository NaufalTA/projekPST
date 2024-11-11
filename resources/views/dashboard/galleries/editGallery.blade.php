@extends('layouts.dashboard')

@section('tittle')
@endsection

@section('container')
    <h1 class="py-4">GALLERY | <span class="text-primary">Update</span></h1>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-body py-4 pb-5">
                <form action="/companyDashboard/galleries/{{ $gallery->slug }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="mb-3">
                            <label for="image" class="fw-semibold">Image : </label>
                            <div class="d-flex justify-content-center">
                                <div class="col-lg-5 border rounded-3 mt-2 mb-3" style="height: 15rem; width: 15rem;">
                                        <img src="{{ asset('storage/gallery/' . $gallery->image) }}" alt=""
                                            class="img-fluid rounded-3"
                                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                </div>
                            </div>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" autofocus>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tittle" class="fw-semibold">tittle : </label>
                            <input type="text" name="tittle" id="tittle"
                                class="form-control @error('tittle') is-invalid @enderror" value="{{ $gallery->tittle }}" autocomplete="off">
                            @error('tittle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end pt-4 gap-1">
                            <a href="/companyDashboard/galleries" class="btn btn-danger">back</a>
                            <button type="submit" class="btn btn-primary">Update gallery</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
