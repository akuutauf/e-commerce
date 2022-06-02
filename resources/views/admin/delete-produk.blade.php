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
                            <h3 class="semi-bold">Update Produk</h3>
                            <p class="secondary-color">Mengubah Informasi Data Produk</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemcode" class="medium">Item Code :</label>
                            <input type="text" class="form-control form-theme-disable" id="Itemcode" name="Itemcode"
                                placeholder="Kode Item" value="Itemcode" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemname" class="medium">Item Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="Itemname" name="Itemname"
                                placeholder="Nama Produk" value="Itemname" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPName" class="medium">MP Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPName" name="MPName"
                                placeholder="Nama Marketplace" value="MPName" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductName" class="medium">MP Product Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductName"
                                name="MP_ProductName" placeholder="Nama Produk di Marketplace" value="MP_ProductName"
                                disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductCategory" class="medium">MP Product Category :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductCategory"
                                name="MP_ProductCategory" placeholder="Nama Kategori Produk" value="MP_ProductCategory"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Etalase" class="medium">MP Etalase :</label>
                            <input type="text" class="form-control form-theme-disable" id="Etalase" name="Etalase"
                                placeholder="Nama Etalase di Marketplace" value="Etalase" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPKondisi" class="medium">Kondisi Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPKondisi" name="MPKondisi"
                                placeholder="Contoh Baru" value="MPKondisi" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="UrlVideoProduct" class="medium">Video Product :</label>
                            <input type="text" class="form-control form-theme-disable" id="UrlVideoProduct"
                                name="UrlVideoProduct" placeholder="Url Video Product" value="UrlVideoProduct" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_MinOrder" class="medium">MP Min Order :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_MinOrder" name="MP_MinOrder"
                                placeholder="Minimal Order" value="MP_MinOrder" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_UnitPrice" class="medium">MP Unit Price :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_UnitPrice" name="MP_UnitPrice"
                                placeholder="Harga Produk Per Unit" value="MP_UnitPrice" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_GroceryPrice" class="medium">MP Grocery Price :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_GroceryPrice"
                                name="MP_GroceryPrice" placeholder="Harga Grosir" value="MP_GroceryPrice" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPStockProduct" class="medium">MP Stock Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPStockProduct"
                                name="MPStockProduct" placeholder="Jumlah Stock Produk di Market Place"
                                value="MPStockProduct" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductWeight" class="medium">Product Weight :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPProductWeight"
                                name="MPProductWeight" placeholder="Berat Produk" value="MPProductWeight" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductLength" class="medium">Product Length :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductLength"
                                name="MP_ProductLength" placeholder="Panjang Produk" value="MP_ProductLength" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductWidth" class="medium">Product Width :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductWidth"
                                name="MP_ProductWidth" placeholder="Lebar Produk" value="MP_ProductWidth" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductHeight" class="medium">Product Height :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductHeight"
                                name="MP_ProductHeight" placeholder="Tinggi Produk" value="MP_ProductHeight" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic1" class="medium">IMG Product :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic1" name="MP_Pic1"
                                placeholder="Gambar Produk 1" value="MP_Pic1" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductLink" class="medium">MP Product Link :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPProductLink"
                                name="MPProductLink" placeholder="Link Produk Pada Marketplace" value="MPProductLink"
                                disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MPStatusProduct" class="medium">Status Product :</label>
                                <select class="form-control form-theme-disable" id="MPStatusProduct" name="MPStatusProduct"
                                    disabled>
                                    <option value="Default" selected>MPStatusProduct(YES)</option>
                                    <option value="Snack / Camilan">YES</option>
                                    <option value="Keripik">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="varian-produk" class="medium">PO Product :</label>
                                <select class="form-control form-theme-disable" id="varian-produk" name="varian-produk"
                                    disabled>
                                    <option value="Default" selected>MP_POProduct(NO)</option>
                                    <option value="Snack / Camilan">YES</option>
                                    <option value="Keripik">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MPSKU" class="medium">MPSKU :</label>
                                <input type="text" class="form-control form-theme-disable" id="MPSKU" name="MPSKU"
                                    placeholder="Stock Keeping Unit" value="MPSKU" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MP_Delivery" class="medium">MP Delivery :</label>
                                <select class="form-control form-theme-disable" id="MP_Delivery" name="MP_Delivery"
                                    disabled>
                                    <option value="Default" selected>MP_Delivery(STANDAR)</option>
                                    <option value="Snack / Camilan">STANDAR</option>
                                    <option value="Keripik">CUSTOM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme-disable" id="PromoSupport"
                                name="PromoSupport" placeholder="#BananaSnack #BananaSnackRenyah" value="PromoSupport"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductDescription" class="medium">Product Description :</label>
                            <textarea class="form-control theme-form-2" id="MP_ProductDescription" name="MP_ProductDescription"
                                placeholder="Deskripsi Produk" rows="3" disabled>MP_ProductDescription</textarea>

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
