@extends('layouts.dashboard')

@section('tittle')
    <title>GALLERY | PAGE</title>
    <style>
        .image-size {
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 15rem;
        }

        @media (max-width: 1000px) {
            .image-size {
                height: 10rem;
            }

            .gap-size {
                gap: 1rem;
            }
        }

        @media (max-width: 500px) {
            .image-size {
                height: 8rem;
            }
        }
    </style>
@endsection

@section('container')
    <div class="container pb-4">
        <h2 class="py-4">DASHBOARD | <span class="text-primary">Home</span></h2>

        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 py-2" >

            <div class="col py-2">
                <div class="card px-5" style="background-color: #2e46bc">
                    <div class="card-body m-3">
                        <div class="gap-2 d-flex flex-column justify-content-center align-items-center">
                            <div class="feature-icon d-inline-flex rounded-circle p-3 align-items-center justify-content-center text-white"
                                style="background-color: white">
                                <i class='bx bx-user' style="color: #2e46bc"></i>
                            </div>
                            <div class="text-center text-white">
                                <h3 class="m-0">User</h3>
                                <h5 class="m-0">({{ count($users) }})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col py-2">
                <div class="card px-5" style="background-color: #2e46bc">
                    <div class="card-body m-3">
                        <div class="gap-2 d-flex flex-column justify-content-center align-items-center">
                            <div class="feature-icon d-inline-flex rounded-circle p-3 align-items-center justify-content-center text-white"
                                style="background-color: white">
                                <i class='bx bx-news' style="color: #2e46bc"></i>
                            </div>
                            <div class="text-center text-white">
                                <h3 class="m-0">Article</h3>
                                <h5 class="m-0">({{ count($articles) }})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col py-2">
                <div class="card px-5" style="background-color: #2e46bc">
                    <div class="card-body m-3">
                        <div class="gap-2 d-flex flex-column justify-content-center align-items-center">
                            <div class="feature-icon d-inline-flex rounded-circle p-3 align-items-center justify-content-center text-white"
                                style="background-color: white">
                                <i class='bx bx-photo-album' style="color: #2e46bc"></i>
                            </div>
                            <div class="text-center text-white">
                                <h3 class="m-0">Galleries</h3>
                                <h5 class="m-0">({{ count($galleries) }})</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>

        @if ($articles->count() > 0 && $users->count() > 0)
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 gap-size py-5">
            @else
                <div class="row row-cols-1">
        @endif

        @if ($articles->count() > 0)
            <a href="/companyDashboard/articles" class="text-decoration-none">
                <div class="col">
                    <div class="card p-2">
                        <div class="card-body">
                            <h3 class="text-primary pb-2">Articles &raquo;</h2>
                            @foreach ($articles->take(2) as $article)
                                <div class="card h-100 mb-3">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-4 d-flex">
                                            @if ($article->image)
                                                <img src="{{ asset('storage/article/' . $article->image) }}"
                                                    class="img-fluid rounded-start" alt="..."
                                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                            @else
                                                <img src="{{ asset('storage/default/defaultArticle.jpg') }}"
                                                    class="img-fluid rounded-start" alt="..."
                                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body h-100 d-flex flex-column justify-content-between gap-3">
                                                <div class="d-flex flex-column">
                                                    <h4 class="m-0">{{ $article->tittle }}</h4>
                                                    @if ($article->user)
                                                        <p class="text-secondary"><small>By :
                                                                {{ $article->user->username }}</small></p>
                                                    @else
                                                        <p class="text-secondary text-decoration-line-through"><small>By :
                                                                {{ $article->uploaded_by }}</small></p>
                                                    @endif
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="m-0"><small
                                                            class="text-body-secondary">{{ $article->created_at->format('j F Y') }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </a>
        @endif

        @if ($users->count() > 0)
            <a href="/companyDashboard/users" class="text-decoration-none">
                <div class="col">
                    <div class="card p-2">
                        <div class="card-body">
                            <h3 class="text-primary pb-2">Users &raquo;</h3>
                            <div class="d-flex flex-column align-items-center gap-3">
                                @foreach ($users->take(4) as $user)
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="rounded-circle bg-secondary" style="width: 4rem; height: 4rem;">
                                                    @if ($user->image)
                                                        <img src="{{ asset('storage/profil/' . $user->image) }}"
                                                            alt="" class="rounded-circle img-fluid"
                                                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                                    @else
                                                        <img src="{{ asset('storage/default/defaultProfil.png') }}"
                                                            alt="" class="rounded-circle img-fluid"
                                                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ps-2">
                                                    <h5 class="m-0">{{ $user->name }}</h5>
                                                    <p class="text-secondary m-0"><small>{{ $user->email }}</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endif

    </div>

    @if ($galleries->count() > 0)
        <a href="/companyDashboard/galleries" class="text-decoration-none">
            <div class="card p-2 mt-3">
                <div class="card-body">
                    <h3 class="text-primary pb-2">Galleries &raquo;</h3>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2">
                        @foreach ($galleries->take(4) as $gallery)
                            <div class="col mb-3">
                                <div class="card" style="height: 100%;">
                                    <img src="{{ asset('storage/gallery/' . $gallery->image) }}"
                                        class="img-fluid bg-secondary-subtle image-size">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </a>
    @endif


    </div>
@endsection
