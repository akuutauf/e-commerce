@extends('base-admin')

@section('title')
    <title>Obugame | Detail Produk</title>
@endsection

@section('content')
    {{-- Start Section Konten Produk --}}
    <section class="mt-5 pt-5">
        <div class="container pb-5 border-sm shadow-sm">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3 shadow-card border-none">
                        <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}" alt="Card image cap"
                            id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!-F-Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                                data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 4">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 5">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 6">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 7">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 8">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="{{ asset($itm1->MP_Pic1) }}"
                                                        alt="Product Image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
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
                                    <h4 class="medium font-25">Deskripsi :</h4>
                                    <p class="secondary-color regular font-18 text-justify">
                                        {{ $itm1->MP_ProductDescription }}</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-md-start mb-3">
                                <div class="col-lg-3 mt-2">
                                    <a type="submit" target="_blank" href="{{ $itm1->MPProductLink }}"
                                        class="btn btn-shopee px-sm-3 py-sm-2 medium">
                                        Order Shopee
                                    </a>
                                </div>
                                <div class="col-lg-9 mt-2">
                                    <a type="button" href="#" class="btn btn-tokopedia px-sm-3 py-sm-2 medium">
                                        Order Tokopedia
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Konten Produk --}}
@endsection
