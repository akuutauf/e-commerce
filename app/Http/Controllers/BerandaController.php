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

}
