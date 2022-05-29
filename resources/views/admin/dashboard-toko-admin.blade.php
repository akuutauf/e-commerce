@extends('base-admin')

@section('title')
    <title>Obugami | Dashboard Toko Admin</title>
@endsection

@section('content')
    {{-- Start Profile Toko --}}
    <section id="profile-toko">
        <div class="container card-profile rounded-sm shadow-card py-5 bg-white">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col d-flex justify-content-center my-auto">
                            <img src="{{ asset('img/pp_cakehsop_fix.jpg') }}" width="250"
                                class="img-thumbnail image-toko rounded-circle border-none">
                        </div>
                        <div class="col py-5 my-auto">
                            <h3 class="semi-bold">Obugami</h3>
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
                            <a href="" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
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
                    <p class="secondary-color pr-5">Obugami menyediakan berbagai jenis cemilan yang enak dalam menemani
                        keseharian Anda. </p>
                    <p class="secondary-color pr-5">Selamat berbelanja di toko kami!</p>
                    <p class="medium color-theme pr-5">Melayani : 08:00 - 20:00</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Profile Toko --}}

    {{-- start dropdown --}}
    <div class="container">
        <div id="kategori" class="container mt-5 mb-3">
            <h3 class="medium font-20">Kategori Produk</h3>
        </div>
        <div class="btn-group ml-3">
            <button type="button" class="btn  drop text-left " data-toggle="dropdown" aria-expanded="false">
                <div class="row">
                    <div class="col-11 my-auto">
                        Cari Kategori
                    </div>
                    <div class="col-1 my-auto">
                        <div class="dropdown-toggle"></div>
                    </div>
                </div>
            </button>
            <div class="dropdown-menu dropdown-menu-right down">
                <button class="dropdown-item" type="button">Snack</button>
                <button class="dropdown-item" type="button">Kue</button>
                <button class="dropdown-item" type="button">Cokiess</button>
            </div>
        </div>
    </div>
    {{-- end dropdown --}}

    {{-- start produk --}}
    <div class="container">
        @if (count($goodmood) > 0)
            <div class="row py-4 px-2 mt-2">
                @foreach ($goodmood as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-card" style="width: 15.5rem;">
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
        @if (count($goodmood) > 0)
            <div class="row py-2 px-2 mt-2">
                @foreach ($goodmood as $item)
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-card" style="width: 15.5rem;">
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
