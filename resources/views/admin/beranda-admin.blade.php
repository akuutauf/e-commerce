@extends('base-admin')

@section('title')
    <title>Obugame | Beranda Admin</title>
@endsection

@section('carrousel')
    {{-- Start Carrousel --}}
    <div class="container-fluid carrousel carrousel-color mt-5">
        <div id="carrousel-arrow" class="carousel slide bg-white pt-4" data-ride="carousel">
            <div class="carousel-inner mb-5">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5 mb-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" width="80%" src="{{ asset('img/carrousel_01.png') }}" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1 color-theme semi-bold">Obugame <span
                                            class="medium color-theme-2">E-Commerce</span></h1>
                                    <h3 class="h3 font-20 text-justify medium">Selamat Datang! Obugame adalah suatu UMKM
                                        yang bergerak dibidang produk kuliner dan kami menjual produk secara online.
                                    </h3>
                                    <p>
                                        Kami menyediakan produk olahan hasil pertanian lainnya seperti Snack, Makanan dan
                                        Minuman Instan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5 mb-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" width="80%" src="{{ asset('img/carrousel_04.png') }}" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1 color-theme semi-bold">Obugame <span
                                            class="medium color-theme-2">E-Commerce</span></h1>
                                    <h3 class="h3 font-20 text-justify medium">Selamat Datang di website Obugame. Kami
                                        menyediakan
                                        berbagai produk Snack dan Beverage.</h3>
                                    <p>
                                        Kami Menyedikan berbagai produk camilan, yang enak disajikan bersama keluarga.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5 mb-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" width="80%" src="{{ asset('img/carrousel_03.png') }}" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1 color-theme semi-bold">Obugame <span
                                            class="medium color-theme-2">E-Commerce</span></h1>
                                    <h3 class="h3 font-20 text-justify medium">Kami memudahkan Anda untuk melakukan
                                        pemesanan pada produk kami.</h3>
                                    <p>
                                        Obugame buka di setiap hari Senin - Jumat di jam 08:00 - 16:00 WIB.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev carrousel-color carrousel-btn" style="width: 10%" type="button"
                data-target="#carrousel-arrow" data-slide="prev">
                <i class="fas fa-chevron-left font-30" style="color: #9772fb"></i>
            </a>
            <a class="carousel-control-next carrousel-color carrousel-btn" style="width: 10%" type="button"
                data-target="#carrousel-arrow" data-slide="next">
                <i class="fas fa-chevron-right font-30" style="color: #9772fb"></i>
            </a>
        </div>
    </div>
    {{-- End Carrousel --}}
@endsection

@section('content')

    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5">
        <div id="konten" class="container mt-3 mb-3">
            <h3 class="medium font-20">Banana Snack</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card border-none">
            @if (count($banana_snack) > 0)
                <div class="row py-4 px-2">
                    @foreach ($banana_snack as $item)
                        <div class="col d-flex justify-content-center">
                            <a href="/detail-produk" class="card-a">
                                <div class="card shadow-card border-none" style="width: 15.5rem;" href="">
                                    <img class="card-img-top" src="{{ $item[5] }}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="h6 card-text semi-bold text-card">{{ $item[0] }}</p>
                                        <p class="card-text product-price bold">Rp. {{ $item[1] }}</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text semi-bold font-10 text-left text-card">
                                                    {{ $item[2] }}<br><span
                                                        class="card-text total-sales regular medium">Stok
                                                        {{ $item[3] }}</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text text-left shop-location mt-4 medium">
                                                    {{ $item[4] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20 mb-3">Dragon Rengginang</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card border-none">
            @if (count($dragon_rengginang) > 0)
                <div class="row py-4 px-2">
                    @foreach ($dragon_rengginang as $item1)
                        <div class="col d-flex justify-content-center">
                            <a href="/detail-produk" class="card-a">
                                <div class="card shadow-card border-none" style="width: 15.5rem;" href="">
                                    <img class="card-img-top" src="{{ $item1[5] }}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="h6 card-text semi-bold text-card">{{ $item1[0] }}</p>
                                        <p class="card-text product-price bold">Rp. {{ $item1[1] }}</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text semi-bold font-10 text-left text-card">
                                                    {{ $item1[2] }}<br><span
                                                        class="card-text total-sales regular medium">Stok
                                                        {{ $item1[3] }}</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text text-left shop-location mt-4 medium">
                                                    {{ $item1[4] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20">Dragon Drink</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card border-none">
            @if (count($dragon_drink) > 0)
                <div class="row py-4 px-2">
                    @foreach ($dragon_drink as $item2)
                        <div class="col d-flex justify-content-center">
                            <a href="/detail-produk" class="card-a">
                                <div class="card shadow-card border-none" style="width: 15.5rem;" href="">
                                    <img class="card-img-top" src="{{ $item2[5] }}" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="h6 card-text semi-bold text-card">{{ $item2[0] }}</p>
                                        <p class="card-text product-price bold">Rp. {{ $item2[1] }}</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-text semi-bold font-10 text-left text-card">
                                                    {{ $item2[2] }}<br><span
                                                        class="card-text total-sales regular medium">Stok
                                                        {{ $item2[3] }}</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="card-text text-left shop-location mt-4 medium">
                                                    {{ $item[4] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5"></div>
    </section>
    {{-- Kategori Produk End --}}
@endsection
