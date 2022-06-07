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
                            <a href="/kelola-promo" class="btn btn-chat-2 px-sm-3 py-sm-2 medium mt-3">
                                Kelola Promo
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

    {{-- Start Livewire --}}
    <livewire:category-index></livewire:category-index>
    {{-- End Livewire --}}

    <div id="konten" class="container my-5"></div>
@endsection
