<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('icons/bagshop.svg') }}" />
    <title>D-Shop | Beranda</title>
    {{-- Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Css custom --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- Css bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    {{-- Navabar Start --}}
    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-dark bg-navbar fixed-top shadow-card  ">
            <div class="container d-flex justify-content-lg-around align-items-center">
                <a class="navbar-brand font-weight-bold" href="/welcome">D-Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 mx-auto search-bar">
                    <input id="search" class="form-control pl-5" size="50" type="search" placeholder="Search Produk" aria-label="Search">
                    <label for="search" class="label-search fa-solid fa-magnifying-glass blue-text ml-3"></label>
                </form>
                <div id="icon-cart" class="mx-lg-5">
                    <a href="#"><i class="fa-solid fa-cart-shopping text-white icon-size"></i></a>
                </div>
                <a id="login-button" class="btn btn-login px-sm-4 py-sm-1" href="#">LOGIN</a>
                </div>
            </div>
        </nav>
    </section>
    {{-- Navbar End --}}

    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5 pt-lg-5">
        <div id="konten" class="container mt-3">
            <h3>Sepatu Olahraga</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            <div class="row py-4 px-2">
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="h6 card-text">Sneakers Sports - Green Couple</p>
                          <p class="card-text product-price">Rp. 300.000</p>
                          <p class="h6 card-text">Toko Setia</p>
                          <p class="card-text total-sales">Terjual 1rb+</p>
                          <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="h6 card-text">Sneakers Sports - Green Couple</p>
                          <p class="card-text product-price">Rp. 300.000</p>
                          <p class="h6 card-text">Toko Setia</p>
                          <p class="card-text total-sales">Terjual 1rb+</p>
                          <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="h6 card-text">Sneakers Sports - Green Couple</p>
                          <p class="card-text product-price">Rp. 300.000</p>
                          <p class="h6 card-text">Toko Setia</p>
                          <p class="card-text total-sales">Terjual 1rb+</p>
                          <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card last-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <p class="h6 card-text">Sneakers Sports - Green Couple</p>
                          <p class="card-text product-price">Rp. 300.000</p>
                          <p class="h6 card-text">Toko Setia</p>
                          <p class="card-text total-sales">Terjual 1rb+</p>
                          <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="konten" class="container my-5">
            <hr>
        </div>
        <div id="konten" class="container">
            <h3>Hoodie</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            <div class="row py-4 px-2">
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - White Edition</p>
                            <p class="card-text product-price">Rp. 150.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 1.5rb+</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-black.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Black Editions</p>
                            <p class="card-text product-price">Rp. 180.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 2rb+</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-Army.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Army Limited Edition</p>
                            <p class="card-text product-price">Rp. 170.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 1rb+</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card last-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-suprame.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Suprame - Red Edition</p>
                            <p class="card-text product-price">Rp. 200.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 1.2rb+</p>
                            <p class="card-text text-right shop-location"> Banyuwangi</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div id="konten" class="container my-5">
            <hr>
        </div>
        <div id="konten" class="container">
            <h3>Trousers</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            <div class="row py-4 px-2">
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/jeans.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Celana Jeans - Premium Docker Edition</p>
                            <p class="card-text product-price">Rp. 170.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 500</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card first-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-black.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Black Editions</p>
                            <p class="card-text product-price">Rp. 180.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 2rb+</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-Army.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Army Limited Edition</p>
                            <p class="card-text product-price">Rp. 170.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 1rb+</p>
                            <p class="card-text text-right shop-location">Banyuwangi</p>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card last-card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/Hoodie-suprame.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Suprame - Red Edition</p>
                            <p class="card-text product-price">Rp. 200.000</p>
                            <p class="h6 card-text">Osingdeles</p>
                            <p class="card-text total-sales">Terjual 1.2rb+</p>
                            <p class="card-text text-right shop-location"> Banyuwangi</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Kategori Produk End --}}

    <div id="konten" class="container my-5">
        <hr>
    </div>
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-primary border-bottom pb-3 border-light logo">D-Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Banyuwangi, Jawa Timur
                        </li><br>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none text-white" href="">085896587587</a>
                        </li><br>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none text-white" href="">d-shop@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none text-white" href="#">Sepatu Olahraga</a></li><br>
                        <li><a class="text-decoration-none text-white" href="#">Hoodie</a></li><br>
                        <li><a class="text-decoration-none text-white" href="#">Topi</a></li><br>
                        {{-- <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li> --}}
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none text-white" href="#">Home</a></li>
                        <li><a class="text-decoration-none text-white" href="#">About Us</a></li>
                        <li><a class="text-decoration-none text-white" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none text-white" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none text-white" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto ml-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-primary text-black">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-right text-light">
                            Copyright &copy; 2022 Company Name
                            | Designed by <a rel="sponsored" href="" target="_blank">D-Shop Develompent</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    </div>
    {{-- Font awesome ions kit --}}
    <script src="https://kit.fontawesome.com/dee340b044.js" crossorigin="anonymous"></script>
    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
