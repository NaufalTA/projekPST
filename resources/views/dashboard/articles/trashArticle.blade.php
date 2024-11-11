@extends('layouts.dashboard')

@section('tittle')
<style>
    .visibility {
        display: none;
    }

    @media(max-width: 768px) {
        .visibility {
            display: block;
        }
    }
</style>
@endsection

@section('container')
    <div class="container py-3">

        @if (session('error'))
            <div style="z-index: 99;">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <h1>ARTICLE | <span class="text-success">TRASH</span></h1>
        <form action="/companyDashboard/article/trash" method="POST">
            @csrf
            <div class="table-responsive py-4">
                <table class="table text-center">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Uploader</th>
                            <th scope="col">Deleted_Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td><input type="checkbox" name="select[]" value="{{ $article->id }}"></td>

                                @if ($article->image)
                                    <td class="d-flex justify-content-center">
                                        <div style="height: 5rem; width: 5rem;">
                                            <img src="{{ asset('storage/article/' . $article->image) }}" alt=""
                                                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                        </div>
                                    </td>
                                @else
                                    <td> - </td>
                                @endif

                                <td>{{ $article->tittle }}</td>
                                <td>{{ $article->uploaded_by }}</td>
                                <td>{{ $article->deleted_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end gap-2 py-3">
                <a href="/companyDashboard/articles" class="btn btn-outline-danger visibility">&laquo; Back</a>
                <button type="submit" name="action" value="restore" class="btn btn-primary">Restore</button>
                <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini secara permanent?, Data ini tidak dapat dipulihkan setelah dihapus')" name="action" value="delete" class="btn btn-danger">Delete Permanent</button>
            </div>
        </form>
    </div>
@endsection
