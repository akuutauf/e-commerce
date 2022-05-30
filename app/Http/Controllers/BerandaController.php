<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // produk sepatu (array dua dimensi)
    public function produkUser()
    {
        $product = array(
            'goodmood' =>
            [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
            ],
            'santai' => [
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
            'mix' => [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
        );
        return view('customer.beranda-customer')->with($product);
    }

    public function produkAdmin()
    {
        $product = array(
            'goodmood' =>
            [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
            ],
            'santai' => [
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
            'mix' => [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
        );
        return view('admin.beranda-admin')->with($product);
    }

    public function produkKategoriClient()
    {
        $product = array(
            'goodmood' =>
            [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
            ],
            'santai' => [
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
            'mix' => [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
        );
        return view('customer.dashboard-toko-customer')->with($product);
    }
    public function produkKategoriAdmin()
    {
        $product = array(
            'goodmood' =>
            [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
            ],
            'santai' => [
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
            'mix' => [
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
                ['Airly - Chocolate Oat Crackers', 100000, 'Obugami', 1000, 'Banyuwangi', asset('img/snack_01.jpg')],
                ['Irvins - Zigzag Salted Egg', 120000, 'Obugami', 1200, 'Banyuwangi', asset('img/snack_02.jpg')],
            ],
        );
        return view('admin.dashboard-toko-admin')->with($product);
    }
}
