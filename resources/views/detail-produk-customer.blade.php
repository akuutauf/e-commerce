@extends('base-customer')

@section('title')
    <title>Obugame | Detail Produk Customer</title>
@endsection

@section('content')
    {{-- Start Section Konten Produk --}}
    <section class="mt-4 p-lg-5">
        <div class="container pb-5 border-sm shadow-sm">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div id="itemsProduct" class="card-element carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li id="carousel-navigator" class="rounded" data-target="#itemsProduct" data-slide-to="0"
                                class="active"></li>
                            <li id="carousel-navigator" class="rounded" data-target="#itemsProduct" data-slide-to="1"></li>
                            <li id="carousel-navigator" class="rounded" data-target="#itemsProduct" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 card-img" src="{{ asset($itm1->MP_Pic1) }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 card-img" src="{{ asset($itm1->MP_Pic2) }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 card-img" src="{{ asset($itm1->MP_Pic3) }}" alt="Third slide">
                            </div>
                        </div>
                        {{-- Arrow Position --}}
                        <a class="carousel-control-prev" href="#itemsProduct" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#itemsProduct" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-4 p-lg-4">
                    <div class="card shadow-card border-none">
                        <div class="card-body">
                            <h1 class="h3 semi-bold text-lef mt-2">{{ $itm1->Itemname }}</h1>
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Harga :</h4>
                                    <h3 class="semi-bold color-theme">{{ intval($itm1->MP_UnitPrice) }}</h3>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Stok :</h4>
                                    <h3 class="semi-bold total-sales">{{ $itm1->MPStockProduct }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Produk :</h4>
                                    <h3 class="secondary-color regular font-23">{{ $itm1->MP_ProductName }}</h3>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Etalase :</h4>
                                    <h3 class="secondary-color regular font-23">{{ $itm1->Etalase }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Berat Bersih :</h4>
                                    <h3 class="secondary-color regular font-23">{{ intval($itm1->MPProductWeight) }} gram
                                    </h3>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Kondisi Produk :</h4>
                                    <h3 class="secondary-color regular font-23">{{ $itm1->MPKondisi }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Status Produk :</h4>
                                    <h3 class="secondary-color regular font-23">
                                        {{ $itm1->MPStatusProduct ? 'Tersedia' : 'Habis' }}</h3>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <h4 class="medium font-25">Pre Order :</h4>
                                    <h3 class="secondary-color regular font-23">
                                        {{ $itm1->MP_PoProduct ? 'Iya' : 'Tidak' }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-4">
                                    <h4 class="medium font-20">Deskripsi :</h4>
                                    <p class="secondary-color regular font-15 text-justify">
                                        {{ $itm1->MP_ProductDescription }}</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-md-start mb-3">
                                {{-- condition button --}}
                                @if ($itm1->MPName == 'Shopee')
                                    <div class="col-lg-3 mt-2">
                                        <a type="button" target="_blank" href="{{ $itm1->MPProductLink }}"
                                            class="btn btn-shopee px-sm-3 py-sm-2 medium">
                                            Order Shopee
                                        </a>
                                    </div>
                                    <div class="col-lg-9 mt-2">
                                        <a type="button" href="{{ $itm1->UrlVideoProduct }}" target="_blank"
                                            class="btn btn-chat-2 px-sm-3 py-sm-2 medium">
                                            Video Product
                                        </a>
                                    </div>
                                @elseif ($itm1->MPName == 'Tokopedia')
                                    <div class="col-lg-4 mt-2">
                                        <a type="button" href="{{ $itm1->MPProductLink }}"
                                            class="
                                            btn btn-tokopedia px-sm-3 py-sm-2 medium">
                                            Order Tokopedia
                                        </a>
                                    </div>
                                    <div class="col-lg-8 mt-2">
                                        <a type="button" href="{{ $itm1->UrlVideoProduct }}" target="_blank"
                                            class="btn btn-chat-2 px-sm-3 py-sm-2 medium">
                                            Video Product
                                        </a>
                                    </div>
                                @else
                                    <div class="col-lg-12 mt-2">
                                        <button type="button" href="#"
                                            class="
                                            btn btn-not-available px-sm-3 py-sm-2 medium"
                                            disabled>
                                            Belum Tersedia </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Konten Produk --}}
@endsection
