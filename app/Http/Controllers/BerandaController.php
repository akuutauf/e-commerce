<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // produk sepatu (array dua dimensi)
    public function produkSepatu()
    {
        $product = array(
            'shoes' =>
            [
                ['Sneakers Sports - Green Edition Adidas', 300000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/shoes_01.jpg')],
                ['Sneakers Sports - Green Docker Edition Adidas', 300000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/shoes_04.jpg')],
                ['Sneakers Sports - Featuring Collab Adidas Nike', 370000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/shoes_03.jpg')],
                ['Sneakers Sports - Black Edition Adidas', 355000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/shoes_02.jpg')],
            ],
            'hoodie' => [
                ['Hoodie Polos - White Edition', 150000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_01.jpg')],
                ['Hoodie Polos - Blue Docker Edition Wake', 180000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_02.jpg')],
                ['Hoodie Polos - Army Limited Edition', 170000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_03.jpg')],
                ['Hoodie Supreme - Red Edition', 200000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_04.jpg')],
            ],
            'hat' => [
                ['Breakout hat - Black Edition Fashionstore', 100000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hat_01.jpg')],
                ['Teenager Hat - White Edition Fashionstore', 100000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hat_02.jpg')],
                ['Underground Hat - Black Edition', 80000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hat_03.jpg')],
                ['Custom Your Own Hat - Fashionstore', 120000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hat_04.jpg')],
            ],
        );
        return view('beranda')->with($product);
    }

    // // produk Hoodie (array dua dimensi)
    // public function produkHoodie()
    // {
    //     $product = array(
    //         'items' => [
    //             ['Hoodie Polos - White Edition', 150000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_01.jpg')],
    //             ['Hoodie Polos - Blue Docker Edition Wake', 180000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_02.jpg')],
    //             ['Hoodie Polos - Army Limited Edition', 170000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_03.jpg')],
    //             ['Hoodie Supreme - Red Edition', 200000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/hoodie_04.jpg')],
    //         ]
    //     );
    //     return view('beranda')->with($product);
    // }

    // produk sepatu (array multi dimensi)
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

    // produk hoodie (array muti dimensi)
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

    // produk topi (array multi dimensi)
    public function listTopi()
    {
        $productTopi = array(
            'topi1' => array(
                'idProduk' => "1",
                'namaProduk' => "Breakout hat - Black Edition Fashionstore",
                'hargaProduk' => "100.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hat_01.jpg')",
            ),
            'topi2' => array(
                'idProduk' => "2",
                'namaProduk' => "Teenager Hat - White Edition Fashionstore",
                'hargaProduk' => "100.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hat_02.jpg')",
            ),
            'topi3' => array(
                'idProduk' => "3",
                'namaProduk' => "Underground Hat - Black Edition",
                'hargaProduk' => "80.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hat_03.jpg')",
            ),
            'topi4' => array(
                'idProduk' => "4",
                'namaProduk' => "Custom Your Own Hat - Fashionstore",
                'hargaProduk' => "120.000",
                'namaToko' => "FashionStore",
                'totalPenjualan' => "1000",
                'lokasiToko' => "Banyuwangi",
                'fotoProduk' => "asset('img/hat_04.jpg')",
            ),

        );
        return view('beranda')->with($productTopi);
    }
}
