@extends('base-admin')

@section('title')
    <title>Obugame | Kelola Produk</title>
@endsection

@section('content')
    {{-- Start Field Kelola Produk --}}
    <section id="field-kelola-produk">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="semi-bold font-25">
                        Kelola produk
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/add-produk" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                        Tambah Produk Baru
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Field Kelola Produk --}}

    {{-- Start List Produk --}}
    <section class="p-4 mb-5">
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="col">
                    <div class="card card-list-produk shadow-card border-none p-3">
                        <div class="row">
                            <div class="col-5">
                                <img class="rounded-sm float-left card-img-top" src="{{ asset('img/snack_02.jpg') }}"
                                    width="200">
                            </div>
                            <div class="col my-auto">
                                <h4 class="font-20 text-left semi-bold">Airly - Chocolate Oat Crackers</h4>
                                <hr class="
=======
                @foreach ($itm1 as $p)
                    <div class="col">
                        <div class="card card-list-produk shadow-card p-3">
                            <div class="row">
                                <div class="col-5">
                                    <img class="rounded-sm float-left card-img-top" src="{{ asset($p->MP_Pic1) }}"
                                        width="200">
                                </div>
                                <div class="col my-auto">
                                    <h4 class="font-20 text-left semi-bold">{{ $p->Itemname }}</h4>
                                    <hr class="
>>>>>>> 72aacd891c6386d9cc4632ae05bfc7551289e53e
                                    hr-color">
                                    <p class="font-18 secondary-color">
                                        Harga : Rp. {{ $p->MP_UnitPrice }} <br>
                                        Stok : {{ $p->MPStockProduct }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-1">
                    <center>
                        <div class="card card-list-produk shadow-card border-none pt-5 pb-5">
                            <div id="icon-edit">
                                <a href="/edit-produk"><i class="fa-solid fa-pen-to-square icon-size icon-edit"></i></a>
                            </div>
                            <hr class="hr-panel mx-auto">
                            <div id="icon-delete">
                                <a href="/delete-produk"><i class="fa-solid fa-trash icon-size icon-delete"></i></a>
                            </div>
                        </div>
                    </center>
                </div>
<<<<<<< HEAD
                <div class="col">
                    <div class="card card-list-produk shadow-card border-none p-3">
                        <div class="row">
                            <div class="col-5">
                                <img class="rounded-sm float-left card-img-top" src="{{ asset('img/snack_02.jpg') }}"
                                    width="200">
                            </div>
                            <div class="col my-auto">
                                <h4 class="font-20 text-left semi-bold">Airly - Chocolate Oat Crackers</h4>
                                <hr class="
=======
                @foreach ($itm1 as $p)
                    <div class="col">
                        <div class="card card-list-produk shadow-card p-3">
                            <div class="row">
                                <div class="col-5">
                                    <img class="rounded-sm float-left card-img-top" src="{{ asset($p->MP_Pic3) }}"
                                        width="200">
                                </div>
                                <div class="col my-auto">
                                    <h4 class="font-20 text-left semi-bold">{{ $p->Itemname }}</h4>
                                    <hr class="
>>>>>>> 72aacd891c6386d9cc4632ae05bfc7551289e53e
                                    hr-color">
                                    <p class="font-18 secondary-color">
                                        Harga : Rp. {{ $p->MP_UnitPrice }} <br>
                                        Stok : {{ $p->MPStockProduct }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-1">
                    <center>
                        <div class="card card-list-produk shadow-card border-none pt-5 pb-5">
                            <div id="icon-edit">
                                <a href="/edit-produk"><i class="fa-solid fa-pen-to-square icon-size icon-edit"></i></a>
                            </div>
                            <hr class="hr-panel mx-auto">
                            <div id="icon-delete">
                                <a href=""><i class="fa-solid fa-trash icon-size icon-delete"></i></a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    {{-- End List Produk --}}
@endsection
