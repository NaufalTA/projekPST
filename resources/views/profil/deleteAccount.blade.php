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

    <main class="py-3 w-100 h-100 d-flex align-items-center">
        <div class="container">
            @if (session('failed'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show py-3" role="alert" style="width: 35rem;">
                        {{ session('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                <div class="card border-gone" style="width: 35rem;">
                    <div class="card-body d-flex flex-column align-items-center py-4">
                        <h3 class="py-2 m-0">DELETE <span class="text-danger">ACCOUNT</span></h3>



                        <div>
                            <h6>please confirm your account for delete your account!</h6>
                        </div>
                        


                        {{-- PROFIL --}}
                        <form action="{{ '/profil/' . Auth::user()->username . '/deleteAccount' }}" method="post" onsubmit="return confirm('Are you sure want to delet this account?')"
                            enctype="multipart/form-data" style="width: 90%">
                            <div class="card py-1 d-flex flex-column mt-4 mb-3">
                                <div class="card-body py-4">
                                    @csrf
                                    @method('DELETE')


                                    <div class="mb-3">
                                        <label class="form-label">Email : </label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            required autocomplete="off">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Password : </label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end py-3 w-100 gap-2">
                                <a href="/profil/{{ Auth::user()->username }}" class="btn btn-danger">back</a>
                                <button type="submit" class="btn btn-primary">Delete Account</button>
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
