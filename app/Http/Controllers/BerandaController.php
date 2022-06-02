<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // produk sepatu (array dua dimensi)
    public function produkUser()
    {
        $product = array(
            'banana_snack' =>
            [
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
            ],
            'dragon_rengginang' => [
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
            ],
            'dragon_drink' => [
                ['Dragon Drink - Varian Original', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_original.jpg')],
                ['Dragon Drink - Spesial Varian Jahe', 15000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahe.jpg')],
                ['Dragon Drink - Varian Jahe Merah', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahemerah.jpg')],
                ['Semua Variasi Dragon Drin (Original, Spesial Jahe, dan Jahe Merah)k', 40000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_all.jpg')],
            ],
        );
        return view('customer.beranda-customer')->with($product);
    }

    public function produkAdmin()
    {
        $product = array(
            'banana_snack' =>
            [
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
            ],
            'dragon_rengginang' => [
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
            ],
            'dragon_drink' => [
                ['Dragon Drink - Varian Original', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_original.jpg')],
                ['Dragon Drink - Spesial Varian Jahe', 15000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahe.jpg')],
                ['Dragon Drink - Varian Jahe Merah', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahemerah.jpg')],
                ['Semua Variasi Dragon Drin (Original, Spesial Jahe, dan Jahe Merah)k', 40000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_all.jpg')],
            ],
        );
        return view('admin.beranda-admin')->with($product);
    }

    public function produkKategoriClient()
    {
        $product = array(
            'banana_snack' =>
            [
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
            ],
            'dragon_rengginang' => [
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
            ],
            'dragon_drink' => [
                ['Dragon Drink - Varian Original', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_original.jpg')],
                ['Dragon Drink - Spesial Varian Jahe', 15000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahe.jpg')],
                ['Dragon Drink - Varian Jahe Merah', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahemerah.jpg')],
                ['Semua Variasi Dragon Drin (Original, Spesial Jahe, dan Jahe Merah)k', 40000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_all.jpg')],
            ],
        );
        return view('customer.dashboard-toko-customer')->with($product);
    }
    public function produkKategoriAdmin()
    {
        $product = array(
            'banana_snack' =>
            [
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Jagung Manis)', 50000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_jagung_manis_02.jpg')],
                ['Banana Snack - Keripik Pisang Kepok (Rasa Pedas Manis)', 55000, 'Obugame', 1000, 'Banyuwangi', asset('img/banana-snack/banana_snack_pedas_manis_02.jpg')],
            ],
            'dragon_rengginang' => [
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
                ['Rengginang Buah Naga - Salted Egg', 45000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/rengginang_salted_egg_01.jpg')],
                ['Rengginang Buah Naga - Dragon Reco', 48000, 'Obugame', 1200, 'Banyuwangi', asset('img/rengginang/dragon_reco.jpg')],
            ],
            'dragon_drink' => [
                ['Dragon Drink - Varian Original', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_original.jpg')],
                ['Dragon Drink - Spesial Varian Jahe', 15000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahe.jpg')],
                ['Dragon Drink - Varian Jahe Merah', 15000, 'Obugame', 1000, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_jahemerah.jpg')],
                ['Semua Variasi Dragon Drink (Original, Spesial Jahe, dan Jahe Merah)', 40000, 'Obugame', 1200, 'Banyuwangi', asset('img/dragon_drink/dragon_drink_all.jpg')],
            ],
        );
        return view('admin.dashboard-toko-admin')->with($product);
    }
}
