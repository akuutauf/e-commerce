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
                '{{assets("img/shoes_01.jpg")}}',
            ),
            'Sepatu2' => array(
                'id' => "2",
                'namaSepatu' => "Sneakers Sports - Green Docker Edition Adidas",
                'Harga' => "Rp. 300.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                '{{assets("img/shoes_04.jpg")}}',
            ),
            'Sepatu3' => array(
                'id' => "3",
                'namaSepatu' => "Sneakers Sports - Featuring Collab Adidas Nike",
                'Harga' => "Rp. 370.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                '{{assets("img/shoes_03.jpg")}}',
            ),
            'Sepatu4' => array(
                'id' => "4",
                'namaSepatu' => "Sneakers Sports - Black Edition Adidas",
                'Harga' => "Rp. 355.000",
                'namaToko' => "Fashion Store",
                'terjual' => "Terjual 1rb+",
                'lokasi' => "Banyuwangi",
                '{{assets("img/shoes_02.jpg")}}',
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
                'hargaProduk' => "150.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "img/shoes_01.jpg",
            ),
            'hoodie2' => array(
                'idProduk' => "2",
                'namaProduk' => "Sneakers Sports - Green Docker Edition Adidas",
                'hargaProduk' => "370.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "img/shoes_04.jpg",
            ),
            'hoodie3' => array(
                'idProduk' => "3",
                'namaProduk' => "Sneakers Sports - Green Docker Edition Adidas",
                'hargaProduk' => "350.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "img/shoes_03.jpg",
            ),
            'hoodie4' => array(
                'idProduk' => "4",
                'namaProduk' => "Sneakers Sports - Black Edition Adidas",
                'hargaProduk' => "355.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "img/shoes_02.jpg",
            ),
        );
        return view('beranda')->with($productHoodie);
    }
}
