@extends('layouts.main')

@section('tittle')
<style>
    .height-image {
        height: 35rem;
    }

    @media(max-width:900px) {
        .height-image {
            height: 18rem;
        }
    }

    @media(max-width:500px) {
        .height-image {
            height: 12rem;
        }
    }
</style>
@endsection

@section('container')
{{-- @dd($article) --}}
<div class="container py-4 pb-5">
    <div class="mb-4">
        <h1 class="display-5 fst-italic">{{ $articles->tittle }}</h1>
        <h6 class="blog-post-meta text-secondary fw-medium m-0">Post by : <span class="text-success">admin</span> <span
                class="text-secondary">{{ $articles->uploaded_by }}</span> <small class="text-secondary">(
                {{ $articles->created_at->diffForHumans() }} )</small></h6>
    </div>
    <div class="bg-body-secondary d-flex justify-content-center height-image">
        @if ($articles->image)
            <img src="{{ asset('storage/article/' . $articles->image) }}" alt="" class="img-fluid"
                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
        @else
            <img src="{{ asset('storage/default/defaultArticle.jpg') }}" alt="" class="img-fluid"
                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
        @endif
    </div>
    <article class="blog-post py-3 mb-5">
        <p>{!! $articles->content !!}</p>
    </article>
    <a href="/article" class="btn btn-danger">&laquo; back</a>
</div>
@endsection
