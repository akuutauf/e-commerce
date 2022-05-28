<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // produk sepatu (array dua dimensi)
    public function produk()
    {
        $product = array(
            'goodmood' =>
            [
                ['Sneakers Sports - Green Edition Adidas', 300000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Sneakers Sports - Green Docker Edition Adidas', 300000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Sneakers Sports - Featuring Collab Adidas Nike', 370000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Sneakers Sports - Black Edition Adidas', 355000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
            ],
            'santai' => [
                ['Hoodie Polos - White Edition', 150000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Hoodie Polos - Blue Docker Edition Wake', 180000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Hoodie Polos - Army Limited Edition', 170000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Hoodie Supreme - Red Edition', 200000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
            'mix' => [
                ['Breakout hat - Black Edition Fashionstore', 100000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Teenager Hat - White Edition Fashionstore', 100000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Underground Hat - Black Edition', 80000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Custom Your Own Hat - Fashionstore', 120000, 'Fashion Store', 1000, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
        );
        return view('clients.beranda-client')->with($product);
    }
}
