@extends('layouts.top_bar')

@section('content')
    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5 pt-lg-5">
        <div id="konten" class="container mt-3">
            <h3>Shoes</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            <div class="row py-4 px-2">
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Sneakers Sports - Green Edition Adidas</p>
                            <p class="card-text product-price">Rp. 300.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_04.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Sneakers Sports - Green Docker Edition Adidas</p>
                            <p class="card-text product-price">Rp. 370.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_03.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Sneakers Sports - Featuring Collab Adidas Nike</p>
                            <p class="card-text product-price">Rp. 350.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/shoes_02.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Sneakers Sports - Black Edition Adidas</p>
                            <p class="card-text product-price">Rp. 355.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
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
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hoodie_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - White Edition</p>
                            <p class="card-text product-price">Rp. 150.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hoodie_02.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Blue Docker Edition Wake</p>
                            <p class="card-text product-price">Rp. 180.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hoodie_03.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Polos - Army Limited Edition</p>
                            <p class="card-text product-price">Rp. 170.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hoodie_04.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Hoodie Suprame - Red Edition</p>
                            <p class="card-text product-price">Rp. 200.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="konten" class="container my-5">
            <hr>
        </div>
        <div id="konten" class="container">
            <h3>Hat</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            <div class="row py-4 px-2">
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hat_01.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Breakout hat - Black Edition Fashionstore</p>
                            <p class="card-text product-price">Rp. 100.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hat_02.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Teenager Hat - White Edition Fashionstore</p>
                            <p class="card-text product-price">Rp. 100.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hat_03.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Underground Hat - Black Edition</p>
                            <p class="card-text product-price">Rp. 80.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-card" style="width: 15.5rem;">
                        <img class="card-img-top" src="{{ asset('img/hat_04.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="h6 card-text">Custom Your Own Hat - Fashionstore</p>
                            <p class="card-text product-price">Rp. 120.000</p>
                            <div class="row">
                                <div class="col">
                                    <p class="h6 card-text">FashionStore<br><span class="card-text total-sales">Terjual
                                            1rb+</span></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-right shop-location">Banyuwangi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Kategori Produk End --}}
@endsection
