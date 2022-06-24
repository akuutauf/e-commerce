@extends('base-admin')

@section('title')
    <title>Obugame | Edit Promo</title>

    {{-- Date dropper Requirements --}}
    <script src="{{ asset('js/datedropper-javascript.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-4 p-lg-5">
        <form action="/promoproducts/{{ $oprinf->PrID }}" class="form-group pt-5 pb-5" method="POST">
            @csrf
            @method('put')
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Update Promo</h3>
                            <p class="secondary-color">Mengubah Informasi Promo pada Toko</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoCode" class="medium">Promo Code :</label>
                            <input type="text" class="form-control form-theme" id="PromoCode" name="PromoCode"
                                placeholder="PRM-BS001" value="{{ $oprinf->PromoCode }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoName" class="medium">Promo Name :</label>
                            <input type="text" class="form-control form-theme" id="PromoName" name="PromoName"
                                placeholder="PROMO BIG DISKON 22% - Tahun Baru" value="{{ $oprinf->PromoName }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSDate" class="medium">Promo Start Date :</label>
                            <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                class="form-control form-theme" id="PromoSDate" name="PromoSDate" placeholder="2022-10-01"
                                value="{{ $oprinf->PromoSDate }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoEDate" class="medium">Promo End Date :</label>
                            <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                class="form-control form-theme" id="PromoEDate" name="PromoEDate" placeholder="2022-10-01"
                                value="{{ $oprinf->PromoEDate }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo1" class="medium">Gambar Promo 1 :</label>
                            <input type="text" class="form-control form-theme" id="ImgUrlPromo1" name="ImgUrlPromo1"
                                placeholder="img/promo/promo_banana_snack_01.jpg" value="{{ $oprinf->ImgUrlPromo1 }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo2" class="medium">Gambar Promo 2 :</label>
                            <input type="text" class="form-control form-theme" id="ImgUrlPromo2" name="ImgUrlPromo2"
                                placeholder="img/promo/promo_banana_snack_02.jpg" value="{{ $oprinf->ImgUrlPromo2 }}">
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
                                    <option value="1" {{ $oprinf->PromoIsActive == 1 ? 'selected' : '' }}>AKTIF
                                    </option>
                                    <option value="0" {{ $oprinf->PromoIsActive == 0 ? 'selected' : '' }}>TIDAK
                                        AKTIF
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme" id="PromoSupport" name="PromoSupport"
                                placeholder="#bananasnackpromo#bananasnacknewyearpromo#bigdiskon"
                                value="{{ $oprinf->PromoSupport }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoDescription" class="medium">Deskripsi Promo :</label>
                            <textarea class="form-control form-color " id="PromoDescription" name="PromoDescription"
                                placeholder="Deskripsi Promo" rows="3">{{ $oprinf->PromoDescription }}</textarea>
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
        dateDropper({
            selector: '#date-input',
            expandedDefault: true,
            expandable: true,
            overlay: true,
            showArrowsOnHover: true,
            autoFill: false
        });
    </script>
@endsection
