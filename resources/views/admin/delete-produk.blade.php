@extends('base-admin')

@section('title')
    <title>Obugame | Delete Produk</title>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-5 p-lg-5">
        <form action="" class="form-group pt-5 pb-5" method="POST">
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Delete Produk</h3>
                            <p class="secondary-color">Menghapus produk Makanan</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kode-produk" class="medium">Kode Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="kode-produk" name="kode-produk"
                                placeholder="Kode Produk" value="11025" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama-produk" class="medium">Nama Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="nama-produk" name="nama-produk"
                                placeholder="Nama Produk" value="Airly - Chocolate Oat Crackers" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga-produk" class="medium">Harga Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="harga-produk" name="harga-produk"
                                placeholder="Harga Produk" value="100000" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stok-produk" class="medium">Stok Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="stok-produk" name="stok-produk"
                                placeholder="Jumlah Stok" value="1000" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori-produk" class="medium">Kategori Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="kategori-produk"
                                name="kategori-produk" placeholder="Kategori" value="Chococips" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="varian-produk" class="medium">Varian Produk :</label>
                            <select class="form-control form-theme-disable" id="varian-produk" name="varian-produk"
                                disabled>
                                <option value="Default">Pilih Varian</option>
                                <option value="Snack / Camilan" selected>Snack / Camilan</option>
                                <option value="Keripik">Keripik</option>
                                <option value="Rengginang">Rengginang</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="berat-produk" class="medium">Berat Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="berat-produk" name="berat-produk"
                                placeholder="Berat Bersih (gram)" value="250" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deskripsi-produk" class="medium">Berat Produk :</label>
                            <textarea class="form-control theme-form-2 " id="deskripsi-produk" name="deskripsi-produk"
                                placeholder="Deskripsi Singkat Produk Anda" rows="3"
                                disabled>Produk ini merupakan salah satu produk rekomendasi pada toko kami</textarea>

                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <a type="submit" href="/kelola-produk" class="btn btn-delete px-sm-3 py-sm-2 medium mt-3">
                                Hapus
                            </a>
                            <a type="button" href="/kelola-produk" class="btn btn-chat-2 px-sm-3 py-sm-2 medium mt-3">
                                Reset
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- End Container Form --}}
@endsection
