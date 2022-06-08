@extends('base-admin')

@section('title')
    <title>Obugame | Kelola Promo</title>
@endsection

@section('content')
    {{-- Start Field Kelola Produk --}}
    <section id="field-kelola-produk">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="semi-bold font-25">
                        Kelola promo
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/promoproducts/create" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                        Tambah Promo Baru
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Field Kelola Produk --}}

    {{-- Start List Promo --}}
    <section class="pt-4">
        <div class="container">
            @foreach ($oprinf as $promo)
                <div class="row pb-4">
                    <div class="col-lg-10">
                        <div class="card card-list-produk shadow-card border-none p-4">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mx-auto my-auto">
                                    <img class="rounded-sm float-left card-img-top"
                                        src="{{ asset('img/promo/' . $promo->ImgUrlPromo1) }}">
                                </div>
                                <div class="col-lg-9 my-auto padding-card">
                                    <h4 class="font-20 text-left judul-promo semi-bold">{{ $promo->PromoName }}</h4>
                                    </h4>
                                    <hr class="hr-color">
                                    <p class="font-18 text-atribut medium">
                                        Deskripsi : {{ $promo->PromoDescription }} <br>
                                        Periode : {{ $promo->PromoSDate }} - {{ $promo->PromoEDate }} <br>
                                        Status : {{ $promo->PromoIsActive == 1 ? 'AKTIF' : 'TIDAK AKTIF' }} <br>
                                        Tagline : {{ $promo->PromoSupport }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row d-flex justify-content-center padding-card-2">
                            <div class="col-lg-12">
                                <a href="/promoproducts/{{ $promo->PrID }}/edit"
                                    class="btn btn-block btn-chat py-sm-2 medium mt-5">
                                    Update
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12">
                                <a href="/promoproducts/{{ $promo->PrID }}/show"
                                    class="btn btn-block btn-delete py-sm-2 medium mt-3">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- End List Promo --}}
@endsection
