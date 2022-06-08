@extends('base-admin')

@section('title')
    <title>Obugame | Tambah Promo</title>

    {{-- Datedropper Requirements --}}
    <link href="{{ asset('datedropper/datedropper.css') }}" rel="stylesheet" />
    <link href="{{ asset('datedropper/my-style.css') }}" rel="stylesheet" />

    <script src="{{ asset('datedropper/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('datedropper/datedropper.js') }}"></script>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-4 p-lg-5">
        <form action="/promoproducts/" class="form-group pt-5 pb-5" method="POST">
            @csrf
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Add Promo</h3>
                            <p class="secondary-color">Menambahkan Promo Baru pada Toko</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoCode" class="medium">Promo Code :</label>
                            <input type="text" class="form-control form-theme" id="PromoCode" name="PromoCode"
                                placeholder="Kode Promo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoName" class="medium">Promo Name :</label>
                            <input type="text" class="form-control form-theme" id="PromoName" name="PromoName"
                                placeholder="Nama Promo">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSDate" class="medium">Promo Start Date :</label>
                            <input type="date" data-large-mode="true" data-large-default="true" data-theme="my-style"
                                class="form-control form-theme" id="PromoSDate" name="PromoSDate"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoEDate" class="medium">Promo End Date :</label>
                            <input type="date" data-large-mode="true" data-large-default="true" data-theme="my-style"
                                class="form-control form-theme" id="PromoEDate" name="PromoEDate"
                                placeholder="Pilih Tanggal">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo1" class="medium">Gambar Promo 1 :</label>
                            <input type="text" class="form-control form-theme" id="ImgUrlPromo1" name="ImgUrlPromo1"
                                placeholder="Url Image Promo 1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo2" class="medium">Gambar Promo 2 :</label>
                            <input type="text" class="form-control form-theme" id="ImgUrlPromo2" name="ImgUrlPromo2"
                                placeholder="Url Image Promo 2">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="PromoIsActive" class="medium">Status Promo :</label>
                                <select class="form-control form-theme" id="PromoIsActive" name="PromoIsActive">
                                    <option value="">Pilih Status Promo</option>
                                    <option value="1">AKTIF</option>
                                    <option value="0">TIDAK AKTIF</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme" id="PromoSupport" name="PromoSupport"
                                placeholder="Tagline Promo">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoDescription" class="medium">Deskripsi Promo :</label>
                            <textarea class="form-control form-color " id="PromoDescription" name="PromoDescription" placeholder="Deskripsi Promo"
                                rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <input type="submit" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3" value="Simpan"
                                value="Simpan">
                            <a href="/kelola-promo" class="btn btn-chat-2 px-sm-3 py-sm-2 medium mt-3">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- End Container Form --}}

    {{-- Initialize Date Form --}}
    <script>
        $("input[type='date']").dateDropper({});
    </script>
@endsection
