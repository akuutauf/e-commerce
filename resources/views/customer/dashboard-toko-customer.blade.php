@extends('base-customer')

@section('title')
    <title>Obugame | Dashboard Toko Customer</title>
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
                            <a href="https://shopee.co.id/elladeffi" target="_blank"
                                class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                                Chat Penjual
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

    {{-- Start Kategori Produk --}}
    <section class="mt-lg-3">
        <div class="container">
            <div class="row py-4 px-2">
                @foreach ($data as $product)
                    <div class="col-lg-3 d-flex justify-content-center mb-4">
                        <a href="/details_product_customer/{{ $product->DocEntry }}/show" class="card-a">
                            <div class="card shadow-card border-none">
                                <img class="card-img-top" src="{{ $product->MP_Pic1 }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text medium text-left text-card">{{ $product->Itemname }}
                                    </p>
                                    <p class="card-text product-price bold">Rp. {{ intval($product->MP_UnitPrice) }}
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="card-text semi-bold font-10 text-left text-card">
                                                Obugame<br><span class="card-text total-sales regular medium">Stok
                                                    {{ $product->MPStockProduct }}</span></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="card-text text-right shop-location mt-4 font-10 semi-bold">
                                                {{ $product->MPName }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Kategori Produk --}}

    <div id="konten" class="container my-5"></div>
@endsection
