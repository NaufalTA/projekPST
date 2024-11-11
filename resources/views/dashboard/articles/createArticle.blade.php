@extends('layouts.dashboard')

@section('tittle')
    {{-- Judul --}}
    <title>CREATE | ARTICLE</title>

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    {{-- menghilangkan tombol upload trix editor --}}
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
@endsection

@section('container')
    <h1 class="py-4">ARTICLE | <span class="text-primary">Create</span></h1>
    <div class="card">
        <div class="card-body py-4 pb-5">
            <form action="/companyDashboard/articles" method="post" enctype="multipart/form-data" class="d-flex flex-column">
                @csrf
                <div class="container">
                    <div class="mb-3">
                        <label for="tittle" class="fw-semibold">tittle : </label>
                        <input type="text" name="tittle" id="tittle"
                            class="form-control @error('tittle') is-invalid @enderror" value="{{ old('tittle') }}" autofocus>
                        @error('tittle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="fw-semibold">Content : </label>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content" class="form-control @error('content') is-invalid @enderror">{!! old('content') !!}</trix-editor>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="fw-semibold">Image : </label>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>  
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end py-4 gap-1">
                        <a href="/companyDashboard/articles" class="btn btn-danger">back</a>
                        <button type="submit" class="btn btn-primary">Create Article</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    {{-- nonaktif fitur upload trix editor --}}
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    </script>
@endsection
