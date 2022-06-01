<?php

namespace Database\Seeders;
use App\Models\Itm1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Itm1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Itm1::insert([
            [
                'Itemcode' => 'ITM1-001',
                'Itemname' => 'Banana Snack - Kripik Pisang Kepok (Rasa Jagung Manis)',
                'MPName' => 'Shoope',
                'MP_ProductName' => 'Banana Snack ',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Kripik pisang kepok dengan rasa jagung manis',
                'UrlVideoProduct' => '',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 50000,
                'MP_GroceryPrice' =>0,
                'MPStatusProduct' => true,
                'MPStockProduct' => 200,
                'MPSKU' => '',
                'MPProductWeight' => 500,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => '',
                'MP_POProduct' => true,
                'MP_Pic1' => "img/banana-snack/banana_snack_jagung_manis_01.jpg",
                'MP_Pic2' => 'asset("img/banana-snack/banana_snack_jagung_manis_01.jpg")',
                'MP_Pic3' => 'img/banana-snack/banana_snack_jagung_manis_02.jpg',
                'MP_Pic4' => 'asset("img/banana-snack/banana_snack_jagung_manis_01.jpg")',
                'MP_Pic5' => 'asset("img/banana-snack/banana_snack_jagung_manis_02.jpg")',
                'PromoSupport' => '#Snack #BananaSnack #BananaSnackJagungManis',
                'MPProductLink' => '',
            ],
        ]);
    }
}
