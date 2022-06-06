@extends('base-admin')
@section('title')
    <title>Obugame | Search Produk Admin</title>
@endsection

@section('content')
    {{-- Start Kategori Produk --}}
    <section class="mt-lg-5 pt-5" id="search-box">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <h3 class="medium font-23 text-left">Hasil Pencarian Anda : {{ $search }}</h3>
                </div>
            </div>
            <div class="row p-3">
                @if ($datas->isEmpty())
                    <div class="container p-4">
                        <div class="row p-4">
                            <div class="col-lg-12">
                                <center>
                                    <img src="{{ asset('ilustrator/nothing.svg') }}" class="" width="58%">
                                </center>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12">
                                <h4 class="text-center color-theme font-22 semi-bold">Oops Barang yang kamu cari tidak ada
                                </h4>
                                <p class="text-center secondary-color font-20 regular">Yuk coba kata kunci lain, yang
                                    berkaitan
                                    dengan produk</p>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($datas as $product)
                        <div class="col-lg-3 d-flex justify-content-center mb-4">
                            <a href="/details_product/{{ $product->DocEntry }}/show" class="card-a">
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
                @endif
            </div>
        </div>
    </section>
    {{-- End Kategori Produk --}}
@endsection
