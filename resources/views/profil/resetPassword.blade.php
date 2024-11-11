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
        <div class="container">
            @if (session('failedConfirm'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show py-3" role="alert" style="width: 35rem;">
                        {{ session('failedConfirm') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            @if (session('failedUpdate'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show py-3" role="alert" style="width: 35rem;">
                        {{ session('failedUpdate') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                <div class="card border-gone" style="width: 35rem; height: 43rem;">
                    <div class="card-body d-flex flex-column align-items-center py-4">
                        <h3 class="py-2">RESET <span class="text-success">PASSWORD</span></h3>



                        {{-- IMAGE --}}
                        <div class="rounded-circle" style="width: 8rem; height: 8rem;">
                            @if (Auth::user()->image)
                                <img src="{{ asset('storage/profil/' . Auth::user()->image) }}" alt=""
                                    class="img-fluid rounded-circle border border-2"
                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                            @else
                                <img src="{{ asset('storage/default/defaultProfil.png') }}" alt=""
                                    class="img-fluid rounded-circle border border-2"
                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                            @endif
                        </div>


                        {{-- PROFIL --}}
                        <form action="{{ '/profil/' . Auth::user()->username . '/resetPassword' }}" method="post"
                            enctype="multipart/form-data" style="width: 90%">
                            <div class="card py-1 d-flex flex-column mt-4 mb-3">
                                <div class="card-body py-4">
                                    @csrf
                                    @method('PUT')


                                    <div class="">
                                        <label class="form-label">Current Password : </label>
                                        <input type="password"
                                            class="form-control @error('oldPass') is-invalid @enderror" name="oldPass"
                                            required autofocus>
                                        <div class="form-text">Input Current Password To Confirm It's Your Account</div>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <hr class="my-3">

                                    <div class="mb-3">
                                        <label class="form-label">New Password : </label>
                                        <input type="password"
                                            class="form-control @error('newPass') is-invalid @enderror" name="newPass"
                                            required>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password : </label>
                                        <input type="password"
                                            class="form-control @error('confirmPass') is-invalid @enderror"
                                            name="confirmPass" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end py-3 w-100 gap-2">
                                <a href="/profil/{{ Auth::user()->username }}" class="btn btn-danger">back</a>
                                <button type="submit" class="btn btn-primary">Reset Password</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('assets/js/darkmode.js') }}"></script>
</body>

</html>
