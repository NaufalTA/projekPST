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
        .card-padding {
            padding-bottom: 3rem;
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
            <div class="d-flex justify-content-center">
                <div class="card border-gone" style="width: 35rem; max-height: 43rem;">

                    <a href="/" class="position-absolute ps-4 pt-4 text-body"><i
                            class='bx bx-left-arrow-alt fs-3'></i></a>

                    <div class="card-body d-flex flex-column align-items-center card-padding">
                        <h3 class="py-2">PROFIL</h3>

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


                        @if (session('update'))
                            <div style="z-index: 99; width:90%;">
                                <div class="alert alert-success alert-dismissible fade show py-3" role="alert">
                                    {{ session('update') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif


                        {{-- PROFIL --}}
                        <div class="card mt-2" style="width: 90%;">
                            <div class="dropdown-center position-absolute d-flex justify-content-end w-100">
                                <a class="text-decoration-none text-body pt-2 pe-3 fs-4" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profil/{{ $user->username }}/edit"><i
                                                class='bx bxs-edit-alt'></i> Edit</a></li>
                                    <li><a class="dropdown-item"
                                            href="/profil/{{ $user->username }}/resetPassword"><i
                                                class='bx bxs-lock-alt'></i> Change
                                            Password</a></li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="/profil/{{ $user->username }}/deleteAccount"><i class='bx bxs-trash'></i> Delete</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider m-1">
                                    </li>
                                    <li><a class="dropdown-item" href="/profil/{{ $user->username }}/logout"><i class='bx bx-log-out'></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body py-3">
                                <form class="d-flex flex-column gap-2 py-3">

                                    <label class="form-label m-0">Name : </label>
                                    <input type="text" class="form-control" value="{{ $user->name }}"
                                        disabled>

                                    <label class="form-label m-0">Username : </label>
                                    <input type="text" class="form-control" value="{{ $user->username }}"
                                        disabled>

                                    <label class="form-label m-0">Email : </label>
                                    <input type="text" class="form-control" value="{{ $user->email }}"
                                        disabled>

                                    <label class="form-label m-0">Number : </label>
                                    @if ($user->number == !null)
                                    <input type="text" class="form-control" value="{{ $user->number }}"
                                        disabled>
                                    @else
                                    <input type="text" class="form-control" value="-"
                                    disabled>
                                    @endif

                                </form>
                            </div>
                        </div>

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
