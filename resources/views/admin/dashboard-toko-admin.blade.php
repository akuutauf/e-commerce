@extends('base-admin')

@section('title')
    <title>Obugame | Dashboard Toko Admin</title>
@endsection

@section('content')
    {{-- Start Profile Toko --}}
    <section id="profile-toko">
        <div class="container card-profile rounded-sm shadow-card border-none py-5 bg-white">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col d-flex justify-content-center my-auto">
                            <img src="{{ asset('img/obugame_logo_02.jpg') }}" width="250"
                                class="img-thumbnail image-toko rounded-circle shadow">
                        </div>
                        <div class="col py-5 my-auto">
                            <h3 class="semi-bold">Obugame</h3>
                            <div class="row">
                                <div class="col-4 my-auto">
                                    <button class="btn-online medium text-white">
                                        Online
                                    </button>
                                </div>
                                <div class="col my-auto">
                                    <h6 class="secondary-color font-10 nama-kota">Banyuwangi <i
                                            class="fa-solid fa-location-dot color-theme"></i></h6>
                                </div>
                            </div>
                            <a href="/kelola-produk" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                                Kelola Produk
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1 mx-auto">
                    <hr class="vertical">
                </div>
                <div class="col my-auto">
                    <h3 class="medium">Tentang toko</h3>
                    <p class="secondary-color pr-5">Obugame adalah suatu UMKM
                        yang bergerak dibidang produk kuliner. Kami menyediakan produk olahan hasil pertanian seperti Snack,
                        Makanan dan Minuman Instan.</p>
                    <p class="secondary-color pr-5">Selamat berbelanja di Toko Obugame!</p>
                    <p class="medium color-theme pr-5">Melayani : 08:00 - 16:00</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Profile Toko --}}

    {{-- Start dropdown --}}
    <div class="container">
        <div id="kategori" class="container mt-5 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="kategori-form" class="medium font-18 text-left">Kategori Produk</label>
                    <select class="form-control form-theme" id="kategori-form" name="kategori-form">
                        <option value="" selected>Semua Produk</option>
                        <option value="Banana Snack">Banana Snack</option>
                        <option value="Dragon Rengginang">Dragon Rengginang</option>
                        <option value="Dragon Drink">Dragon Drink</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    {{-- End dropdown --}}

    {{-- start produk --}}
    <div class="container">
        @if (count($banana_snack) > 0)
            <div class="row py-4 px-2 mt-2">
                @foreach ($banana_snack as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-card border-none" style="width: 15.5rem;">
                            <img class="card-img-top" src="{{ $item[5] }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="h6 card-text semi-bold">{{ $item[0] }}</p>
                                <p class="card-text product-price bold">Rp. {{ $item[1] }}</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text semi-bold font-10 text-left">{{ $item[2] }}<br><span
                                                class="card-text total-sales regular">Terjual
                                                {{ $item[3] }}</span></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-text text-left shop-location mt-4 regular">
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

    <div class="container">
        @if (count($dragon_rengginang) > 0)
            <div class="row py-2 px-2 mt-2">
                @foreach ($dragon_rengginang as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-card border-none" style="width: 15.5rem;">
                            <img class="card-img-top" src="{{ $item[5] }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="h6 card-text semi-bold">{{ $item[0] }}</p>
                                <p class="card-text product-price bold">Rp. {{ $item[1] }}</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text semi-bold font-10 text-left">{{ $item[2] }}<br><span
                                                class="card-text total-sales regular">Terjual
                                                {{ $item[3] }}</span></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-text text-left shop-location mt-4 regular">
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
    {{-- end produk --}}


    <div id="konten" class="container my-5"></div>
@endsection
