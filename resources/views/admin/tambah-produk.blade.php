@extends('base-admin')

@section('title')
    <title>Obugame | Tambah Produk</title>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-5 p-lg-5">
        <form action="" class="form-group pt-5 pb-5" method="POST">
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Add Produk</h3>
                            <p class="secondary-color">Menambahkan produk Makanan Baru</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemcode" class="medium">Itemcode :</label>
                            <input type="text" class="form-control form-theme" id="Itemcode" name="Itemcode"
                                placeholder="Itemcode">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemname" class="medium">Itemname :</label>
                            <input type="text" class="form-control form-theme" id="Itemname" name="Itemname"
                                placeholder="Itemname">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPName" class="medium">MPName :</label>
                            <input type="text" class="form-control form-theme" id="MPName" name="MPName"
                                placeholder="Nama Marketplace">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductName" class="medium">MP ProductName :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductName" name="MP_ProductName"
                                placeholder="Nama Produk di Marketplace">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga-produk" class="medium">Harga Produk :</label>
                            <input type="text" class="form-control form-theme" id="harga-produk" name="harga-produk"
                                placeholder="Harga Produk">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stok-produk" class="medium">Stok Produk :</label>
                            <input type="text" class="form-control form-theme" id="stok-produk" name="stok-produk"
                                placeholder="Jumlah Stok">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori-produk" class="medium">Kategori Produk :</label>
                            <input type="text" class="form-control form-theme" id="kategori-produk" name="kategori-produk"
                                placeholder="Kategori">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="varian-produk" class="medium">Varian Produk :</label>
                                <select class="form-control form-theme" id="varian-produk" name="varian-produk">
                                    <option value="Default" selected>Pilih Varian</option>
                                    <option value="Snack / Camilan">Snack / Camilan</option>
                                    <option value="Keripik">Keripik</option>
                                    <option value="Rengginang">Rengginang</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="berat-produk" class="medium">Berat Produk :</label>
                            <input type="text" class="form-control form-theme" id="berat-produk" name="berat-produk"
                                placeholder="Berat Bersih (gram)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deskripsi-produk" class="medium">Berat Produk :</label>
                            <textarea class="form-control form-color " id="deskripsi-produk" name="deskripsi-produk"
                                placeholder="Deskripsi Singkat Produk Anda" rows="3"></textarea>

                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <a type="submit" href="/kelola-produk" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                                Simpan
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
