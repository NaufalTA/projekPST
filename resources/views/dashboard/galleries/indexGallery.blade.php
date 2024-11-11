@extends('layouts.dashboard')

@section('tittle')
    <title></title>

    <style>
        .search-button-position {
            display: flex;
            justify-content: space-between
        }

        @media (max-width: 900px) {
            .search-button-position {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
@endsection

@section('container')
    <div class="container py-4">

        @if (session('delete'))
            <div style="z-index: 99;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if (session('update'))
            <div style="z-index: 99;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if (session('create'))
            <div style="z-index: 99;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('create') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if (session('restore'))
            <div style="z-index: 99;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('restore') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if (session('deletePerma'))
            <div style="z-index: 99;">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('deletePerma') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <h1 class="pb-4">DASHBOARD | <span class="text-primary">GALLERY</span></h1>

        <div class="search-button-position mb-2">
            <div class="d-flex gap-2">
                <a href="/companyDashboard/galleries/create" class="btn btn-primary">Upload new gallery</a>
                <a href="/companyDashboard/gallery/trash" class="btn btn-primary"><i class='bx bxs-trash'></i></a>
            </div>
            <div class="d-flex gap-2">
                <form class="d-flex gap-2 w-100" role="search">
                    <input class="form-control" type="search" placeholder="Search..." aria-label="Search" name="search"
                        value="{{ request('search') }}" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-striped text-center">
                <thead>
                    <tr class="">
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col" class="px-5">Judul</th>
                        <th scope="col">Uploader</th>
                        <th scope="col" class="px-3">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{ ($galleries->currentPage() - 1) * $galleries->perPage() + $loop->iteration }}</td>

                                <td class="d-flex justify-content-center">
                                    <div style="height: 5rem; width: 5rem;">
                                        <img src="{{ asset('storage/gallery/' . $gallery->image) }}" alt=""
                                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                    </div>
                                </td>

                            <td>{{ $gallery->tittle }}</td>

                            @if ($gallery->user)
                            <td>{{ $gallery->uploaded_by }}</td>
                            @else
                            <td class="text-secondary text-decoration-line-through">{{ $gallery->uploaded_by }}</td>
                            @endif
                            
                            <td>{{ $gallery->created_at }}</td>
                            <td>{{ $gallery->updated_at }}</td>
                            <td>
                                <div class="dropdown-center">
                                    <a class="text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <form action="/companyDashboard/galleries/{{ $gallery->slug }}"
                                            onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini ?')"
                                            method="POST">
                                            <li><a class="dropdown-item"
                                                    href="/companyDashboard/galleries/{{ $gallery->slug }}/edit"><i
                                                        class='bx bxs-edit-alt text-primary'></i> <span
                                                        class="text-secondary fw-semibold">Edit</span></a></li>
                                            @csrf
                                            @method('DELETE')
                                            <li><button type="submit" class="dropdown-item"><i
                                                        class='bx bxs-trash text-danger'></i> <span
                                                        class="text-secondary fw-semibold">Delete</span></button></li>
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if ($galleries->count() < 1)
            <h1 class="text-center text-secondary py-3">empty data.</h1>
        @endif

        <div class="py-3">
            {{ $galleries->links() }}
        </div>
    </div>
@endsection
