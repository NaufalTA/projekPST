@extends('layouts.main')

@section('tittle')
    <style>
        .image-article {
            max-width: 15rem;
            max-height: 15rem;
        }

        @media(max-width: 900px) {
            .image-article {
                max-width: none;
                max-height: 10rem
            }
        }

        @media(max-width: 500px) {
            .search {
                width: 100%;
            }
        }
    </style>
@endsection

@section('container')
    <div class="container py-3">
        <div class="p-5 mb-4 rounded text-body-emphasis" data-aos="zoom-in" data-aos-duration="500"
            style="background-image: url('img/assetsImage/article-image/cremBanner.png')">
            <div class="col-lg-8 px-0 text-black">
                <h1 class="display-4 fst-italic">ARTICLES</h1>
                <p class="lead my-3"><span class="fw-medium text-dark">Penasaran bagaimana logo yang keren bisa mengubah bisnismu?</span> Yuk, simak artikel kami
                    tentang pentingnya desain logo yang kuat dan bagaimana kami bisa membantumu!</p>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-2" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            <form class="d-flex gap-2 search" role="search">
                <input class="form-control" type="search" placeholder="Search..." aria-label="Search" name="search"
                    value="{{ request('search') }}" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        @if ($articles->count() > 0)
            <div class="row row-cols-1 row-cols-lg-2" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
                @foreach ($articles as $article)
                    <div class="col py-2" data-aos="zoom-in" data-aos-duration="500">
                        <a href="article/{{ $article->slug }}" class="text-decoration-none">
                            <div class="card h-100">
                                <div class="row g-0 h-100">
                                    <div class="col-md-4 d-flex" style="height: 15rem;">
                                        @if ($article->image)
                                            <img src="{{ asset('storage/article/' . $article->image) }}"
                                                class="img-fluid rounded-start" alt="..."
                                                style="object-fit: cover; object-position: center; width: 100%; height: auto;">
                                        @else
                                            <img src="{{ asset('storage/default/defaultArticle.jpg') }}"
                                                class="img-fluid rounded-start" alt="..."
                                                style="object-fit: cover; object-position: center; width: 100%; height: auto;">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body h-100 d-flex flex-column justify-content-between gap-3">
                                            <div class="d-flex flex-column">
                                                <h4 class="m-0">{{ $article->tittle }}</h4>
                                                <p class="text-secondary"><small>By : {{ $article->uploaded_by }}</small>
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button href="" class="btn btn-link text-decoration-none p-0">read
                                                    article
                                                    &raquo;</button>
                                                <p class="m-0"><small
                                                        class="text-body-secondary">{{ $article->created_at->format('j F Y') }}</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="py-3">
                {{ $articles->links() }}
            </div>
        @else
            <div style="padding-top: 8rem; padding-bottom: 8rem;">
                <h2 class="text-center text-secondary">No Article Found.</h2>
            </div>
        @endif
    </div>
@endsection
