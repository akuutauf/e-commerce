<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('icons/image.png') }}" />
    <title>Obugami | Login Page</title>

    {{-- Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Css custom --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- Css bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body id="login-body">
    <div class="container mt-5 pt-5">
        <div class="row d-flex justify-content-center">
            {{-- Start Form Login --}}
            <div class="col">
                <div class="card shadow-sm p-3 bg-white card-border">
                    <div class="card-body">
                        <div class="form-control border-none">
                            <form action="">
                                <div class="mt-3 mb-3">
                                    <h3 class="semi-bold">Login</h3>
                                    <small class="secondary-color font-10">Selamat datang kembali</small>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-theme" placeholder="Username"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-theme" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <a href="" class="btn btn-theme btn-lg btn-block border-none medium"
                                        type="button">Login</a>
                                </div>
                                <div class="form-group mt-3">
                                    <a href="/" class="btn btn-theme-2 btn-lg btn-block border-none medium"
                                        type="button">Login as Customer</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Form Login --}}
            <div id="image-ilustrator" class="col-6">
                <img src="{{ asset('ilustrator/login.svg') }}" class="mt-5 ml-4 img-hidden" width="350">
            </div>
        </div>
    </div>

    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
