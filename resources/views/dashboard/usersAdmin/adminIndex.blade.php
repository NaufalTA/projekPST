@extends('layouts.dashboard')

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

        <h1 class="pb-3">DASHBOARD | <span class="text-primary">ADMIN</span></h1>

        <div class="d-flex justify-content-end gap-2">
                <a href="/companyDashboard/users" class="btn btn-primary px-3">User</a>
            <form class="d-flex gap-2" role="search">
                <input class="form-control" type="search" placeholder="Search..." aria-label="Search" name="search"
                    value="{{ request('search') }}" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <a href="/companyDashboard/user/trash" class="btn btn-primary"><i class='bx bxs-trash'></i></a>
        </div>


        <div class="py-3">
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td class="text-primary">{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->number)
                                        {{ $user->number }}
                                    @else
                                        -
                                    @endif

                                </td>
                                <td>
                                    <form action="/companyDashboard/admin/{{ $user->username }}"
                                        onsubmit="return confirm('Are you sure want to delete this account?')"
                                        class="d-flex justify-content-center gap-1" method="post">
                                        <a href="/companyDashboard/admin/{{ $user->username }}"
                                            class="btn btn-warning">view</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="py-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
