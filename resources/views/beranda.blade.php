@extends('layouts.top_bar')

@section('content')
    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5 pt-lg-5">
        <div id="konten" class="container mt-3">
            <h3>Shoes</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($shoes) > 0)
                <div class="row py-4 px-2">
                    @foreach ($shoes as $item)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text">{{ $item[0] }}</p>
                                    <p class="card-text product-price">Rp. {{ $item[1] }}</p>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text name-shop">{{ $item[2] }}<br><span
                                                    class="card-text total-sales">Terjual
                                                    {{ $item[3] }}</span></p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text text-right shop-location mt-4">
                                                {{ $item[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr>
        </div>
        <div id="konten" class="container">
            <h3>Hoodie</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($hoodie) > 0)
                <div class="row py-4 px-2">
                    @foreach ($hoodie as $item1)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item1[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text">{{ $item1[0] }}</p>
                                    <p class="card-text product-price">Rp. {{ $item1[1] }}</p>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text name-shop">{{ $item1[2] }}<br><span
                                                    class="card-text total-sales">Terjual
                                                    {{ $item1[3] }}</span></p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text text-right shop-location mt-4">
                                                {{ $item1[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr>
        </div>
        <div id="konten" class="container">
            <h3>Hat</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($hat) > 0)
                <div class="row py-4 px-2">
                    @foreach ($hat as $item2)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item2[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text">{{ $item2[0] }}</p>
                                    <p class="card-text product-price">Rp. {{ $item2[1] }}</p>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text name-shop">{{ $item2[2] }}<br><span
                                                    class="card-text total-sales">Terjual
                                                    {{ $item2[3] }}</span></p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text text-right shop-location mt-4">
                                                {{ $item2[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            {{-- <div class="row py-4 px-2">
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
            </div> --}}
        </div>
    </section>
    {{-- Kategori Produk End --}}
@endsection
