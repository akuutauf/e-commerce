<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // produk sepatu
    public function listSepatu()
    {
        $productSepatu = array(
            'Sepatu1' => array(
                'id' => "1",
                'namaSepatu' => "Sneakers Sports - Green Edition Adidas",
                'Harga' => "Rp. 300.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                'fotoProduk' => "asset('img/shoes_01.jpg')",
            ),
            'Sepatu2' => array(
                'id' => "2",
                'namaSepatu' => "Sneakers Sports - Green Docker Edition Adidas",
                'Harga' => "Rp. 300.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                'fotoProduk' => "asset('img/shoes_04.jpg')",
            ),
            'Sepatu3' => array(
                'id' => "3",
                'namaSepatu' => "Sneakers Sports - Featuring Collab Adidas Nike",
                'Harga' => "Rp. 370.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                'fotoProduk' => "asset('img/shoes_03.jpg')",
            ),
            'Sepatu4' => array(
                'id' => "4",
                'namaSepatu' => "Sneakers Sports - Black Edition Adidas",
                'Harga' => "Rp. 355.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                'fotoProduk' => "asset('img/shoes_02.jpg')",
            ),
        );
        return view('beranda')->with($productSepatu);
    }

    // produk hoodie
    public function listHoodie()
    {
        $productHoodie = array(
            'hoodie1' => array(
                'idProduk' => "1",
                'namaProduk' => "Hoodie Polos - White Edition",
                'hargaProduk' => "Rp. 150.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "Terjual 1rb+",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hoodie_01.jpg')",
            ),
            'hoodie2' => array(
                'idProduk' => "2",
                'namaProduk' => "Hoodie Polos - Blue Docker Edition Wake",
                'hargaProduk' => "Rp. 180.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "Terjual 1rb+",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hoodie_02.jpg')",
            ),
            'hoodie3' => array(
                'idProduk' => "3",
                'namaProduk' => "Hoodie Polos - Army Limited Edition",
                'hargaProduk' => "Rp. 170.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "Terjual 1rb+",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hoodie_03.jpg')",
            ),
            'hoodie4' => array(
                'idProduk' => "4",
                'namaProduk' => "Hoodie Suprame - Red Edition",
                'hargaProduk' => "Rp. 200.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "Terjual 1rb",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hoodie_04.jpg')",
            ),
        );
        return view('beranda')->with($productHoodie);
    }
}
