@extends('base-client')

@section('title')
    <title>Obugami | Beranda User</title>
@endsection

@section('content')
    {{-- Kategori Produk Start --}}
    <section id="kategori" class="mt-lg-5 pt-lg-5">
        <div id="konten" class="container mt-3 mb-3">
            <h3 class="medium font-20">Cemilan Goodmood</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($goodmood) > 0)
                <div class="row py-4 px-2">
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
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20 mb-3">Cemilan Santai</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($santai) > 0)
                <div class="row py-4 px-2">
                    @foreach ($santai as $item1)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item1[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text semi-bold">{{ $item1[0] }}</p>
                                    <p class="card-text product-price bold">Rp. {{ $item1[1] }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text semi-bold font-10 text-left">{{ $item1[2] }}<br><span
                                                    class="card-text total-sales regular">Terjual
                                                    {{ $item1[3] }}</span></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-left shop-location mt-4 regular">
                                                {{ $item1[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div id="konten" class="container my-5">
            <hr class="hr-color">
        </div>
        <div id="konten" class="container">
            <h3 class="medium font-20">Mix Kategori</h3>
        </div>
        <div id="konten" class="container bg-white rounded-sm shadow-card">
            @if (count($mix) > 0)
                <div class="row py-4 px-2">
                    @foreach ($mix as $item2)
                        <div class="col d-flex justify-content-center">
                            <div class="card shadow-card" style="width: 15.5rem;">
                                <img class="card-img-top" src="{{ $item2[5] }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="h6 card-text semi-bold">{{ $item2[0] }}</p>
                                    <p class="card-text product-price bold">Rp. {{ $item2[1] }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-text semi-bold font-10 text-left">{{ $item2[2] }}<br><span
                                                    class="card-text total-sales regular">Terjual
                                                    {{ $item2[3] }}</span></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text text-left shop-location mt-4 regular">
                                                {{ $item2[4] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    {{-- Kategori Produk End --}}
@endsection
