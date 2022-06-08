@extends('base-admin')

@section('title')
    <title>Obugame | Delete Promo</title>

    {{-- Datedropper Requirements --}}
    <script src="{{ asset('js/datedropper-javascript.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-4 p-lg-5">
        <form action="/productsitm/" class="form-group pt-5 pb-5" method="POST">
            @csrf
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Delete Promo</h3>
                            <p class="secondary-color">Menshapus Data Promo pada Toko</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoCode" class="medium">Promo Code :</label>
                            <input type="text" class="form-control form-theme-disable" id="PromoCode" name="PromoCode"
                                placeholder="PRM-BS001" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoName" class="medium">Promo Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="PromoName" name="PromoName"
                                placeholder="PROMO BIG DISKON 22% - Tahun Baru" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSDate" class="medium">Promo Start Date :</label>
                            <input type="date" data-dd-opt-custom-class="dd-theme-bootstrap" data-datedropper
                                class="form-control form-theme-disable" id="PromoSDate" name="PromoSDate"
                                placeholder="2022-10-01" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoEDate" class="medium">Promo End Date :</label>
                            <input type="date" data-large-mode="true" data-large-default="true"
                                class="form-control form-theme-disable" id="PromoEDate" name="PromoEDate"
                                placeholder="2022-10-01" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo1" class="medium">Gambar Promo 1 :</label>
                            <input type="text" class="form-control form-theme-disable" id="ImgUrlPromo1" name="ImgUrlPromo1"
                                placeholder="img/promo/promo_banana_snack_01.jpg" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ImgUrlPromo2" class="medium">Gambar Promo 2 :</label>
                            <input type="text" class="form-control form-theme-disable" id="ImgUrlPromo2" name="ImgUrlPromo2"
                                placeholder="img/promo/promo_banana_snack_02.jpg" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="PromoIsActive" class="medium">Status Promo :</label>
                                <select class="form-control form-theme-disable" id="PromoIsActive" name="PromoIsActive"
                                    disabled>
                                    <option value="">Pilih Status Promo</option>
                                    <option value="1" selected>AKTIF</option>
                                    <option value="0">TIDAK AKTIF</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme-disable" id="PromoSupport" name="PromoSupport"
                                placeholder="#bananasnackpromo#bananasnacknewyearpromo#bigdiskon" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoDescription" class="medium">Deskripsi Promo :</label>
                            <textarea class="form-control form-theme-2" id="PromoDescription" name="PromoDescription" placeholder="Deskripsi Promo"
                                rows="3" disabled>Promo Berlaku Untuk 10 Pembeli Pertama di Shopee</textarea>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <input type="submit" class="btn btn-delete px-sm-3 py-sm-2 medium mt-3" value="Simpan"
                                value="Hapus">
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
            selector: 'input[type="date"]',
        });
    </script>
@endsection
