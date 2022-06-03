@extends('base-admin')

@section('title')
    <title>Obugame | Delete Produk</title>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section id="edit-card" class="mt-5 p-lg-5">
        <form action="/productsitm/{{ $itm1->DocEntry }}" class="form-group pt-5 pb-5" method="POST">
            <div class="container container-form">
                <div class="row">
                    <div class="col">
                        <div class="text-center pt-5">
                            <h3 class="semi-bold">Delete Produk</h3>
                            <p class="secondary-color">Menghapus Informasi Data Produk</p>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemcode" class="medium">Item Code :</label>
                            <input type="text" class="form-control form-theme-disable" id="Itemcode" name="Itemcode"
                                placeholder="Kode Item" value="{{ $itm1->Itemcode }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Itemname" class="medium">Item Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="Itemname" name="Itemname"
                                placeholder="Nama Produk" value="{{ $itm1->Itemname }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPName" class="medium">MP Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPName" name="MPName"
                                placeholder="Nama Marketplace" value="{{ $itm1->MPName }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductName" class="medium">MP Product Name :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductName"
                                name="MP_ProductName" placeholder="Nama Produk di Marketplace"
                                value="{{ $itm1->MP_ProductName }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductCategory" class="medium">MP Product Category :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductCategory"
                                name="MP_ProductCategory" placeholder="Nama Kategori Produk"
                                value="{{ $itm1->MP_ProductCategory }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Etalase" class="medium">MP Etalase :</label>
                            <input type="text" class="form-control form-theme-disable" id="Etalase" name="Etalase"
                                placeholder="Nama Etalase di Marketplace" value="{{ $itm1->Etalase }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPKondisi" class="medium">Kondisi Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPKondisi" name="MPKondisi"
                                placeholder="Contoh Baru" value="{{ $itm1->MPKondisi }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_MinOrder" class="medium">MP Min Order :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_MinOrder" name="MP_MinOrder"
                                placeholder="Minimal Order" value="{{ $itm1->MP_MinOrder }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_UnitPrice" class="medium">MP Unit Price :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_UnitPrice" name="MP_UnitPrice"
                                placeholder="Harga Produk Per Unit" value="{{ $itm1->MP_UnitPrice }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_GroceryPrice" class="medium">MP Grocery Price :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_GroceryPrice"
                                name="MP_GroceryPrice" placeholder="Harga Grosir" value="{{ $itm1->MP_GroceryPrice }}"
                                disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPStockProduct" class="medium">MP Stock Produk :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPStockProduct"
                                name="MPStockProduct" placeholder="Jumlah Stock Produk di Market Place"
                                value="{{ $itm1->MPStockProduct }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MPSKU" class="medium">MPSKU :</label>
                                <input type="text" class="form-control form-theme-disable" id="MPSKU" name="MPSKU"
                                    placeholder="Stock Keeping Unit" value="{{ $itm1->MPSKU }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductWeight" class="medium">Product Weight :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPProductWeight"
                                name="MPProductWeight" placeholder="Berat Produk" value="{{ $itm1->MPProductWeight }}"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductLength" class="medium">Product Length :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductLength"
                                name="MP_ProductLength" placeholder="Panjang Produk"
                                value="{{ $itm1->MP_ProductLength }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductWidth" class="medium">Product Width :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductWidth"
                                name="MP_ProductWidth" placeholder="Lebar Produk" value="{{ $itm1->MP_ProductWidth }}"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductHeight" class="medium">Product Height :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_ProductHeight"
                                name="MP_ProductHeight" placeholder="Tinggi Produk" value="{{ $itm1->MP_ProductHeight }}"
                                disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="UrlVideoProduct" class="medium">Video Product :</label>
                            <input type="text" class="form-control form-theme-disable" id="UrlVideoProduct"
                                name="UrlVideoProduct" placeholder="Url Video Product"
                                value="{{ $itm1->UrlVideoProduct }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MPProductLink" class="medium">MP Product Link :</label>
                            <input type="text" class="form-control form-theme-disable" id="MPProductLink"
                                name="MPProductLink" placeholder="Link Produk Pada Marketplace"
                                value="{{ $itm1->MPProductLink }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic1" class="medium">IMG Product 1 :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic1" name="MP_Pic1"
                                placeholder="Gambar Produk 1" value="{{ $itm1->MP_Pic1 }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic2" class="medium">IMG Product 2 :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic2" name="MP_Pic2"
                                placeholder="Gambar Produk 2" value="{{ $itm1->MP_Pic2 }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic3" class="medium">IMG Product 3 :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic3" name="MP_Pic3"
                                placeholder="Gambar Produk 3" value="{{ $itm1->MP_Pic3 }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic4" class="medium">IMG Product 4 :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic4" name="MP_Pic4"
                                placeholder="Gambar Produk 4" value="{{ $itm1->MP_Pic4 }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_Pic5" class="medium">IMG Product 5 :</label>
                            <input type="text" class="form-control form-theme-disable" id="MP_Pic5" name="MP_Pic5"
                                placeholder="Gambar Produk 5" value="{{ $itm1->MP_Pic5 }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="PromoSupport" class="medium">Promo Support :</label>
                            <input type="text" class="form-control form-theme-disable" id="PromoSupport"
                                name="PromoSupport" placeholder="#BananaSnack #BananaSnackRenyah"
                                value="{{ $itm1->PromoSupport }}" disabled>
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
                                    <option value="Default" selected>{{ $itm1->MPStatusProduct == 1 ? 'YES' : 'NO' }}
                                    </option>
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MP_POProduct" class="medium">PO Product :</label>
                                <select class="form-control form-theme-disable" id="MP_POProduct" name="MP_POProduct"
                                    disabled>
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
                                <label for="MP_ProdInsurance" class="medium">Asuransi :</label>
                                <select class="form-control form-theme-disable" id="MP_ProdInsurance"
                                    name="MP_ProdInsurance" disabled>
                                    <option value="Default" selected>{{ $itm1->MP_ProdInsurance == 1 ? 'YES' : 'NO' }}
                                    </option>
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="MP_Delivery" class="medium">MP Delivery :</label>
                                <select class="form-control form-theme-disable" id="MP_Delivery" name="MP_Delivery"
                                    disabled>
                                    <option value="Default" selected>
                                        {{ $itm1->MP_Delivery == 'STANDAR' ? 'STANDAR' : 'CUSTOM' }}
                                    </option>
                                    <option value="STANDAR">STANDAR</option>
                                    <option value="CUSTOM">CUSTOM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="MP_ProductDescription" class="medium">Product Description :</label>
                            <textarea class="form-control form-theme-2 " id="MP_ProductDescription" name="MP_ProductDescription"
                                placeholder="Deskripsi Produk" rows="3"
                                disabled>{{ $itm1->MP_ProductDescription }}</textarea>

                        </div>
                    </div>
                </div>
                <div class="row ml-4 mr-4 pb-5">
                    <div class="col-md-12">
                        <div class="mt-2">
                            <form action="/productsitm/{{ $itm1->DocEntry }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-chat px-sm-3 py-sm-2 medium mt-3" value="Delete">

                            </form>
                            <a href="/kelola-produk" class="btn btn-chat-2 px-sm-3 py-sm-2 medium mt-3">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- End Container Form --}}
@endsection
