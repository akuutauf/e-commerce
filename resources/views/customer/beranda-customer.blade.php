@extends('base-customer')

@section('title')
    <title>Obugame | Beranda Customer</title>
@endsection

@section('carrousel')
    {{-- Start Carrousel --}}
    <div class="container-fluid carrousel carrousel-color mt-5">
        <div id="carrousel-arrow" class="carousel slide bg-white pt-4" data-ride="carousel">
            <div class="carousel-inner mb-5">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5 mb-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last text-center pb-4">
                                <img class="img-fluid rounded border-none" src="{{ asset('img/obugame_logo_02.jpg') }}"
                                    alt="Nama Promo">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h4 color-theme semi-bold">Selamat Datang di Obugame
                                        <h3 class="h3 font-18 text-left medium">Kami menyediakan berbagai jenis cemilan
                                            Banana Snack,
                                            Dragon Rengginang dan Dragon Drink untuk menemani suasana hatimu 😊
                                        </h3>
                                        <p class="text-left font-18 regular">
                                            Jangan lewatkan promo menarik dari kami Yah, Selamat Berbelanja!
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5 mb-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last text-center pb-4">
                                <img class="img-fluid rounded border-none" width="80%"
                                    src="{{ asset('img/promo/promo_banana_snack_01.jpg') }}" alt="Nama Promo">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h4 color-theme semi-bold">PROMO BIG DISKON 22%
                                        Tahun
                                        Baru
                                        <h3 class="h3 font-18 text-left medium">Catat tanggalnya yuk, Periode promo
                                            berlaku pada tanggal : 31 Desember 2022 - 2 Januari 2023
                                        </h3>
                                        <p class="text-left font-18 regular">
                                            Promo berlaku untuk 10 Pembeli Pertama di Shopee Yuk buruan order sebelum
                                            kehabisan
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev carrousel-color carrousel-btn" style="width: 8%" type="button"
                data-target="#carrousel-arrow" data-slide="prev">
                <i class="fas fa-chevron-left font-30" style="color: #9772fb"></i>
            </a>
            <a class="carousel-control-next carrousel-color carrousel-btn" style="width: 8%" type="button"
                data-target="#carrousel-arrow" data-slide="next">
                <i class="fas fa-chevron-right font-30" style="color: #9772fb"></i>
            </a>
        </div>
    </div>
    {{-- End Carrousel --}}
@endsection

@section('content')
    {{-- Kategori Produk Start --}}
    <section class="mt-lg-5">
        @foreach ($categories as $item)
            <div class="container mt-5 mb-3">
                <h3 class="medium font-23 text-left">{{ $item->MP_ProductName }}</h3>
            </div>
            <div class="container bg-white rounded-sm shadow-card border-none">
                <div class="row py-4 px-2">
                    @foreach ($products as $value)
                        @if ($item->MP_ProductName == $value->MP_ProductName)
                            <div class="col-lg-3 d-flex justify-content-center">
                                <a href="/details_product_customer/{{ $value->DocEntry }}/show" class="card-a">
                                    <div class="card shadow-card border-none">
                                        <img class="card-img-top" src="{{ $value->MP_Pic1 }}" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="h6 card-text medium text-left text-card">{{ $value->Itemname }}</p>
                                            <p class="card-text product-price bold">Rp. {{ intval($value->MP_UnitPrice) }}
                                            </p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="card-text semi-bold font-10 text-left text-card">
                                                        Obugame<br><span class="card-text total-sales regular medium">Stok
                                                            {{ $value->MPStockProduct }}</span></p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-text text-right shop-location mt-4 font-10 semi-bold">
                                                        {{ $value->MPName }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="container mt-5 pt-1 mb-4">
                <hr class="hr-color">
            </div>
        @endforeach
        <div id="konten" class="container my-5"></div>
    </section>
    {{-- Kategori Produk End --}}
@endsection
