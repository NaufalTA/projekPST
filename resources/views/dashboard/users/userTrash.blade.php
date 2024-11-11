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

        <h1>USER | <span class="text-success">TRASH</span></h1>
        <form action="/companyDashboard/user/trash" method="POST">
            @csrf
            <div class="table-responsive py-4">
                <table class="table text-center">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Deleted_Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><input type="checkbox" name="select[]" value="{{ $user->id }}"></td>
                                <td>{{ $user->name }}</td>

                                @if ($user->role == 'admin')
                                <td class="text-primary">{{ $user->username }}</td>
                                @else
                                <td>{{ $user->username }}</td>
                                @endif

                                <td>{{ $user->email }}</td>
                                <td>{{ $user->deleted_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end gap-2 py-3">
                <a href="/companyDashboard/users" class="btn btn-outline-danger visibility">&laquo; Back</a>
                <button type="submit" name="action" value="restore" class="btn btn-primary">Restore</button>
                <button type="submit"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini secara permanent?, Data ini tidak dapat dipulihkan setelah dihapus')"
                    name="action" value="delete" class="btn btn-danger">Delete Permanent</button>
            </div>
        </form>
    </div>
@endsection
