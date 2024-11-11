<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            width: 100%;
            height: 100vh;
        }

        .card {
            width: 24rem;
            height: 28rem;
        }

        .card-body {
            justify-content: space-between;
        }

        @media(max-width: 500px) {
            .card {
                /* border: none; */
                width: 20rem;
                height: 25rem;
            }

            .card-title {
                margin-bottom: 2.5rem;
            }

            .card-form {
                margin-bottom: 2rem;
            }

            .form-label {
                display: none;
            }

            .card-body {
                justify-content: center;
            }
        }
    </style>
</head>

<body data-bs-theme="dark">


    <div class="position-absolute top-50 start-50 translate-middle">
        @if (session('error'))
            <div class="alert alert-danger my-2">
                {{ session('error') }}
            </div>
        @endif
        @if (session('register'))
            <div class="alert alert-success my-2">
                {{ session('register') }}
            </div>
        @endif
        <div class="card p-4">
            <a href="/" class="position-absolute text-white" style="width: 2rem;"><i
                    class='bx bx-x fs-2 fw-bold'></i></a>
            <div class="card-body px-3 d-flex flex-column">
                <h2 class="card-title text-center">LOGIN</h2>
                <form action="{{ '/login' }}" class="card-form" method="post">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="username" class="form-label m-1">Username</label>
                        <input type="text" class="form-control p-2 @error('username') is-invalid @enderror"
                            name="username" id="username" placeholder="Enter Username..." value="{{ old('username') }}" required  autocomplete="off">
                    </div>
                    <div class="d-flex flex-column mt-2">
                        <label for="password" class="form-label m-1">Password</label>
                        <input type="password" class="form-control p-2 @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Enter Password..." required>
                    </div>
                    <div class="mb-5 py-2 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary mb-2 w-100">Login</button>
                        <p class="text-center m-0"><small>dont have any account? <a href="{{ '/register' }}"
                                    class="text-decoration-none fw-medium">sign up</a></small></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
