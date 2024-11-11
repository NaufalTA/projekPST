@extends('layouts.dashboard')

@section('tittle')
    {{-- Judul --}}
    <title>EDIT | ARTICLE</title>

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
    {{-- @dd($articles) --}}
    <h1 class="py-4">ARTICLE | <span class="text-primary">Edit</span></h1>
    <div class="card">
        <div class="card-body py-4 pb-5">
            <form action="/companyDashboard/articles/{{ $articles->slug }}" method="post" enctype="multipart/form-data"
                class="d-flex flex-column col-lg-10">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="mb-3">
                        <label for="tittle" class="fw-semibold">tittle : </label>
                        <input type="text" name="tittle" id="tittle" class="form-control @error('tittle') is-invalid @enderror" value="{{ old('tittle', $articles->tittle) }}" autofocus  autocomplete="off">
                        @error('tittle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="fw-semibold">Content : </label>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content"
                            class="form-control @error('content') is-invalid @enderror">{!! $articles->content !!}</trix-editor>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="fw-semibold">Image : </label>
                        <div class="col-lg-5 border rounded-3 mt-2 mb-3" style="height: 20rem;">
                            @if ($articles->image)
                                <img src="{{ asset('storage/article/' . $articles->image) }}" alt=""
                                    class="img-fluid rounded-3"
                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                            @else
                                <img src="{{ asset('storage/default/defaultArticle.jpg') }}" alt=""
                                    class="img-fluid rounded-3"
                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                            @endif
                        </div>
                        <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end py-4 gap-1">
                        <a href="/companyDashboard/articles" class="btn btn-danger">back</a>
                        <button type="submit" class="btn btn-primary">Update Article</button>
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
