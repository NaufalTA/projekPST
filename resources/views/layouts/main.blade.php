<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DesainLogo.id</title>
    <style>
        .primary-color-button {
            background-color: #3551db;
            color: white;
            transition: all 0.2s
        }

        .primary-color-button:hover {
            background-color: #1d39c4;
            color: white;
            box-shadow: 2px 2px 10px black;
        }

        .primary-color-text {
            background-color: #172c95;
        }

        .primary-icon {
            color: #536ffb;
        }

        .justify-footer {
            justify-content: space-between;
        }

        .navbar-darkmode-icon {
            display: flex;
            align-items: center;
        }

        @media (max-width: 991.20px) {
            .navbar-darkmode-icon {
                display: grid;
            }
        }

        @media (max-width: 500px) {
            .footer-mobile {
                display: none;
            }

            .justify-footer {
                justify-content: center;
            }
        }
    </style>

    @yield('tittle')

</head>

<body class="" style="max-width: 100%">

    <nav class="sticky-top" style="background-color: #102074">
        @include('components.navbar')
    </nav>

    @if (session('logout'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert"
            style="position: absolute; width: 100%;">
            {{ session('logout') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert"
            style="position: absolute; width: 100%;">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('login'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert"
            style="position: absolute; width: 100%;">
            {{ session('login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <main>
        @yield('container')
    </main>

    <footer style="margin-top: 1rem;">
        @include('components.footer')
    </footer>

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
