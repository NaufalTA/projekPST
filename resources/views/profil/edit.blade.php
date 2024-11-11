<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        @media (max-width: 500px) {
            .border-gone {
                border: none;
            }
        }
    </style>

    @yield('tittle')

</head>

<body data-bs-theme="dark" style="width: 100%; height: 100vh; background-image: url({{ asset('img/assetsImage/4845913.png') }});">

    <main class="py-3">
        <form action="{{ '/profil/' . $user->username . '/edit' }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="card border-gone" style="width: 35rem;">
                        <div class="card-body d-flex flex-column align-items-center py-2">
                            <h3 class="py-2">PROFIL | <span class="text-success">Edit</span></h3>



                            {{-- IMAGE --}}
                            <div class="rounded-circle" style="width: 8rem; height: 8rem;">
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


                            <div class="d-flex justify-content-center py-3">
                                <input type="file" class="form-control" name="image" style="width: 72%">
                            </div>


                            {{-- PROFIL --}}
                            <div class="card py-1 d-flex flex-column mt-1" style="width: 90%">
                                <div class="card-body py-3">

                                    <div class="mb-3">
                                        <label class="form-label m-0">Name : </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ $user->name }}" autocomplete="off">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label m-0">Username : </label>
                                        <input type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ $user->username }}" autocomplete="off">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label m-0">Email : </label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $user->email }}" autocomplete="off">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="form-label m-0">Number : </label>
                                        <input type="number" class="form-control @error('number') is-invalid @enderror"
                                            name="number" value="{{ $user->number }}" autocomplete="off">
                                        @error('number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="d-flex justify-content-end py-3 w-100 gap-2">
                                <a href="/profil/{{ $user->username }}" class="btn btn-danger">back</a>
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('assets/js/darkmode.js') }}"></script>
    <script>
        document.querySelector('input[type="number"]').addEventListener('keydown', function(e) {
            if (e.key === 'ArrowUp' || e.key === 'ArrowDown') {
                e.preventDefault(); // Mencegah aksi default ketika panah atas/bawah ditekan
            }
        });
    </script>
</body>

</html>
