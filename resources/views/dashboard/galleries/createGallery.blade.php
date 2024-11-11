@extends('layouts.dashboard')

@section('tittle')
@endsection

@section('container')
    <h1 class="py-4">GALLERY | <span class="text-primary">Create</span></h1>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-body py-4 pb-5">
                <form action="/companyDashboard/galleries" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="mb-3">
                            <label for="image" class="fw-semibold">Image : </label>
                            <div class="d-flex justify-content-center py-4">
                                <div class="bg-secondary-subtle" style="width: 15rem; height: 15rem;">
                                    <img src="{{ asset('storage/default/defaultImage.jpg') }}" alt="" class="img-fluid" style="object-fit: cover; object-position: center; width 100%; height: 100%;">
                                </div>
                            </div>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror" autofocus>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tittle" class="fw-semibold">tittle : </label>
                            <input type="text" name="tittle" id="tittle"
                                class="form-control @error('tittle') is-invalid @enderror" value="{{ old('tittle') }}" autocomplete="off">
                            @error('tittle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end pt-3 gap-1">
                            <a href="/companyDashboard/galleries" class="btn btn-danger">back</a>
                            <button type="submit" class="btn btn-primary">Upload gallery</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
