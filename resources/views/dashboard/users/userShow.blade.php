@extends('layouts.dashboard')

@section('tittle')
@endsection

@section('container')
    <h2 class="py-3">PROFIL | <span class="text-primary">{{ $user->username }}</span></h2>

    <main class="py-3">
        <div class="container">
            <div class="d-flex flex-column align-items-center">

                {{-- IMAGE --}}
                <div class="rounded-circle mb-4" style="width: 8rem; height: 8rem;">
                    @if ($user->image)
                        <img src="{{ asset('storage/profil/' . $user->image) }}" alt=""
                            class="img-fluid rounded-circle border border-2"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                    @else
                        <img src="{{ asset('storage/default/defaultProfil.png') }}" alt=""
                            class="img-fluid rounded-circle border border-2"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                    @endif
                </div>

                {{-- PROFIL --}}
                <div class="d-flex flex-column gap-2 pb-4" style="width: 90%;">

                    <label class="form-label m-0">Name : </label>
                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>

                    <label class="form-label m-0">Username : </label>
                    <input type="text" class="form-control" value="{{ $user->username }}" disabled>

                    <label class="form-label m-0">Email : </label>
                    <input type="text" class="form-control" value="{{ $user->email }}" disabled>

                    <label class="form-label m-0">Number : </label>
                    
                    @if ( $user->number)
                    <input type="text" class="form-control" value="{{ $user->number }}" disabled>
                    @else
                    <input type="text" class="form-control" value="-" disabled>
                    @endif

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col mb-2">
                            <label class="form-label m-0">Created At : </label>
                            <input type="text" class="form-control" value="{{ $user->created_at }}" disabled>
                        </div>
                        <div class="col mb-2">
                            <label class="form-label m-0">Updated At : </label>
                            <input type="text" class="form-control" value="{{ $user->updated_at }}" disabled>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end" style="width: 90%;">
                    <a href="/companyDashboard/users" class="btn btn-danger">back</a>
                </div>
            </div>
        </div>
    </main>
@endsection
