@extends('base-admin')

@section('title')
    <title>Obugame | Edit Produk</title>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-5 p-lg-5">
        <form action="/productsitm/{{ $itm1->DocEntry }}" class="form-group pt-5 pb-5" method="POST">
            @csrf
            @method('put')
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
                            <input type="text" class="form-control form-theme" id="Itemcode" name="Itemcode"
                                placeholder="Kode Item" value="{{ $itm1->Itemcode }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemname" class="medium">Item Name :</label>
                            <input type="text" class="form-control form-theme" id="Itemname" name="Itemname"
                                placeholder="Nama Produk" value="{{ $itm1->Itemname }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPName" class="medium">MP Name :</label>
                            <input type="text" class="form-control form-theme" id="MPName" name="MPName"
                                placeholder="Nama Marketplace" value="{{ $itm1->MPName }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductName" class="medium">MP Product Name :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductName" name="MP_ProductName"
                                placeholder="Nama Produk di Marketplace" value="{{ $itm1->MP_ProductName }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductCategory" class="medium">MP Product Category :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductCategory"
                                name="MP_ProductCategory" placeholder="Nama Kategori Produk"
                                value="{{ $itm1->MP_ProductCategory }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Etalase" class="medium">MP Etalase :</label>
                            <input type="text" class="form-control form-theme" id="Etalase" name="Etalase"
                                placeholder="Nama Etalase di Marketplace" value="{{ $itm1->Etalase }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPKondisi" class="medium">Kondisi Produk :</label>
                            <input type="text" class="form-control form-theme" id="MPKondisi" name="MPKondisi"
                                placeholder="Contoh Baru" value="{{ $itm1->MPKondisi }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="UrlVideoProduct" class="medium">Video Product :</label>
                            <input type="text" class="form-control form-theme" id="UrlVideoProduct" name="UrlVideoProduct"
                                placeholder="Url Video Product" value="{{ $itm1->UrlVideoProduct }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_MinOrder" class="medium">MP Min Order :</label>
                            <input type="text" class="form-control form-theme" id="MP_MinOrder" name="MP_MinOrder"
                                placeholder="Minimal Order" value="{{ $itm1->MP_MinOrder }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_UnitPrice" class="medium">MP Unit Price :</label>
                            <input type="text" class="form-control form-theme" id="MP_UnitPrice" name="MP_UnitPrice"
                                placeholder="Harga Produk Per Unit" value="{{ $itm1->MP_UnitPrice }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_GroceryPrice" class="medium">MP Grocery Price :</label>
                            <input type="text" class="form-control form-theme" id="MP_GroceryPrice" name="MP_GroceryPrice"
                                placeholder="Harga Grosir" value="{{ $itm1->MP_GroceryPrice }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPStockProduct" class="medium">MP Stock Produk :</label>
                            <input type="text" class="form-control form-theme" id="MPStockProduct" name="MPStockProduct"
                                placeholder="Jumlah Stock Produk di Market Place" value="{{ $itm1->MPStockProduct }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductWeight" class="medium">Product Weight :</label>
                            <input type="text" class="form-control form-theme" id="MPProductWeight" name="MPProductWeight"
                                placeholder="Berat Produk" value="{{ $itm1->MPProductWeight }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductLength" class="medium">Product Length :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductLength" name="MP_ProductLength"
                                placeholder="Panjang Produk" value="{{ $itm1->MP_ProductLength }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductWidth" class="medium">Product Width :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductWidth" name="MP_ProductWidth"
                                placeholder="Lebar Produk" value="{{ $itm1->MP_ProductWidth }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductHeight" class="medium">Product Height :</label>
                            <input type="text" class="form-control form-theme" id="MP_ProductHeight" name="MP_ProductHeight"
                                placeholder="Tinggi Produk" value="{{ $itm1->MP_ProductHeight }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic1" class="medium">IMG Product :</label>
                            <input type="text" class="form-control form-theme" id="MP_Pic1" name="MP_Pic1"
                                placeholder="Gambar Produk 1" value="{{ $itm1->MP_Pic1 }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductLink" class="medium">MP Product Link :</label>
                            <input type="text" class="form-control form-theme" id="MPProductLink" name="MPProductLink"
                                placeholder="Link Produk Pada Marketplace" value="{{ $itm1->MPProductLink }}">
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MPStatusProduct" class="medium">Status Product :</label>
                                <select class="form-control form-theme" id="MPStatusProduct" name="MPStatusProduct">
                                    <option value="1" {{ $itm1->MPStatusProduct == 1 ? 'selected' : '' }}>YES</option>
                                    <option value="0" {{ $itm1->MPStatusProduct == 0 ? 'selected' : '' }}>NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="varian-produk" class="medium">PO Product :</label>
                                <select class="form-control form-theme" id="varian-produk" name="varian-produk">
                                    <option value="Default" selected>{{ $itm1->MP_POProduct == 1 ? 'YES' : 'NO' }}
                                    </option>
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
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
                                <input type="text" class="form-control form-theme" id="MPSKU" name="MPSKU"
                                    placeholder="Stock Keeping Unit" value="{{ $itm1->MPSKU }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MP_Delivery" class="medium">MP Delivery :</label>
                                <select class="form-control form-theme" id="MP_Delivery" name="MP_Delivery">
                                    <option value="Default" selected>{{ $itm1->MP_Delivery }}</option>
                                    <option value="STANDARD / Camilan">STANDAR</option>
                                    <option value="CUSTOM">CUSTOM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme" id="PromoSupport" name="PromoSupport"
                                placeholder="#BananaSnack #BananaSnackRenyah" value="{{ $itm1->PromoSupport }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductDescription" class="medium">Product Description :</label>
                            <textarea class="form-control form-color " id="MP_ProductDescription" name="MP_ProductDescription"
                                placeholder="Deskripsi Produk" rows="3">{{ $itm1->MP_ProductDescription }}</textarea>

                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <button type="submit" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3">
                                Simpan
                            </button>
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
