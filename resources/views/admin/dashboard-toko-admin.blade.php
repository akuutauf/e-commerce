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

    <div id="konten" class="container my-5"></div>
@endsection
