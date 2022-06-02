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
                'Itemname' => 'Banana Snack (Keripik Pisang Kepok) Varian Jagung Manis',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Banana Snack',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.

                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.

                4 alasan memilih BANANA SNACK
                1. Menggunakan pisang kepok
                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal
                3. Gak pelit bumbu
                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)

                Informasi Produk:
                Berat bersih : 65 g (per bungkus)
                Exp date : 5 bulan
                Izin Edar P-IRT : 214 3510 08 1177 - 26
                Kemasan : Material Metalized / Alumunium Foil
                Diproduksi : Secara Bersih dan Higienis',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CWqiYk-hDOK/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 14000,
                'MP_GroceryPrice' => 14000,
                'MPStatusProduct' => true,
                'MPStockProduct' => 46,
                'MPSKU' => '46',
                'MPProductWeight' => 65,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => 'img/banana-snack/banana_snack_jagung_manis_01.jpg',
                'MP_Pic2' => 'img/banana-snack/banana_snack_jagung_manis_01.jpg',
                'MP_Pic3' => 'img/banana-snack/banana_snack_jagung_manis_02.jpg',
                'MP_Pic4' => 'img/banana-snack/banana_snack_jagung_manis_02.jpg',
                'MP_Pic5' => 'img/banana-snack/banana_snack_jagung_manis_02.jpg',
                'PromoSupport' => '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi',
                'MPProductLink' => 'https://shopee.co.id/Banana-Snack-(Keripik-Pisang-Kepok)-varian-jagung-manis-i.65325206.14530487418?sp_atk=aed2e3b8-f605-4c37-a951-4916bd1f0c69&xptdk=aed2e3b8-f605-4c37-a951-4916bd1f0c69',
            ],
            [
                'Itemcode' => 'ITM1-002',
                'Itemname' => 'Banana Snack (Keripik Pisang Kepok) Varian Pedas Manis',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Banana Snack',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.

                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.

                4 alasan memilih BANANA SNACK
                1. Menggunakan pisang kepok
                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal
                3. Gak pelit bumbu
                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)

                Informasi Produk:
                Berat bersih : 65 g (per bungkus)
                Exp date : 5 bulan
                Izin Edar P-IRT : 214 3510 08 1177 - 26
                Kemasan : Material Metalized / Alumunium Foil
                Diproduksi : Secara Bersih dan Higienis',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CWFEg-dJr99/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 14000,
                'MP_GroceryPrice' => 14000,
                'MPStatusProduct' => true,
                'MPStockProduct' => 50,
                'MPSKU' => '50',
                'MPProductWeight' => 65,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => 'img/banana-snack/banana_snack_pedas_manis_01.jpg',
                'MP_Pic2' => 'img/banana-snack/banana_snack_pedas_manis_01.jpg',
                'MP_Pic3' => 'img/banana-snack/banana_snack_pedas_manis_02.jpg',
                'MP_Pic4' => 'img/banana-snack/banana_snack_pedas_manis_02.jpg',
                'MP_Pic5' => 'img/banana-snack/banana_snack_pedas_manis_02.jpg',
                'PromoSupport' => '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi',
                'MPProductLink' => 'https://shopee.co.id/Banana-Snack-(Keripik-Pisang-Kepok)-Varian-Pedas-Manis-i.65325206.12666317338?sp_atk=f6c9c669-195b-46b7-9c72-05d6212e5756&xptdk=f6c9c669-195b-46b7-9c72-05d6212e5756',
            ],
            [
                'Itemcode' => 'ITM1-003',
                'Itemname' => 'Obugame Banana Snack (Keripik Pisang Kepok) Varian Cokelat',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Banana Snack',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.

                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.

                4 alasan memilih BANANA SNACK
                1. Menggunakan pisang kepok
                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal
                3. Gak pelit bumbu
                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)

                Informasi Produk:
                Berat bersih : 65 g (per bungkus)
                Exp date : 5 bulan
                Izin Edar P-IRT : 214 3510 08 1177 - 26
                Kemasan : Material Metalized / Alumunium Foil
                Diproduksi : Secara Bersih dan Higienis',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CXzi1ZNArjn/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 15000,
                'MP_GroceryPrice' => 15000,
                'MPStatusProduct' => true,
                'MPStockProduct' => 30,
                'MPSKU' => '30',
                'MPProductWeight' => 65,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => 'img/banana-snack/banana_snack_coklat_01.jpg',
                'MP_Pic2' => 'img/banana-snack/banana_snack_coklat_01.jpg',
                'MP_Pic3' => 'img/banana-snack/banana_snack_coklat_01.jpg',
                'MP_Pic4' => 'img/banana-snack/banana_snack_coklat_01.jpg',
                'MP_Pic5' => 'img/banana-snack/banana_snack_coklat_01.jpg',
                'PromoSupport' => '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi',
                'MPProductLink' => 'https://shopee.co.id/Banana-Snack-Varian-Cokelat-i.65325206.14530486516?sp_atk=423e7c69-40bf-48e4-88d8-778fe878d390&xptdk=423e7c69-40bf-48e4-88d8-778fe878d390',
            ],
            [
                'Itemcode' => 'ITM1-004',
                'Itemname' => 'Obugame DRAGON RECO (Rengginang Coklat) 175 gram',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Dragon Rengginang',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'DRAGON RECO (Rengginang Coklat) adalah produk jajanan tradisional rengginang namun tampil kekinian dengan rasa yang khas serta balutan coklat yang bikin anda ketagihan. Produk ini menggunakan bahan-bahan yang berkualitas.

                Tersedia dalam 2 ukuran: 80 gram, 175gram
                Komposisi : beras ketan, buah naga, garam, penyedap, rempah-rempah

                Nore: Harap disimpan di suhu ruang dan kering. Dan nikmati langsung sehabis munkin setelah dibuka, jika masih tersisa bisa disimpan di topel/ tempat kedap udara agar tetap terasa renyah

                Pirt : 515 3510 07 1177-24
                Halal : 07100058960419

                Produk ini cocok menemanimu hari-harimu dan oleh-oleh lo.  Yukk tunggu apalagi sebelum kehabisan.',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CRcgYRBA9zF/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 20000,
                'MP_GroceryPrice' => 20000,
                'MPStatusProduct' => true,
                'MPStockProduct' => 272,
                'MPSKU' => '272',
                'MPProductWeight' => 175,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => "img/rengginang/dragon_reco.jpg",
                'MP_Pic2' => 'img/rengginang/rengginang_all.jpg',
                'MP_Pic3' => 'img/rengginang/dragon_reco.jpg',
                'MP_Pic4' => 'img/rengginang/rengginang_all.jpg',
                'MP_Pic5' => 'img/rengginang/dragon_reco.jpg',
                'PromoSupport' => '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi',
                'MPProductLink' => 'https://shopee.co.id/Obugame-DRAGON-RECO-(Rengginang-Coklat)-175-gram-i.65325206.2716073514?sp_atk=a87e49ff-9685-45a6-be09-e4490a2c46d9&xptdk=a87e49ff-9685-45a6-be09-e4490a2c46d9',
            ],
            [
                'Itemcode' => 'ITM1-005',
                'Itemname' => 'Obugame Rennginang Buah Naga (Varian Salted Egg) 100 gram',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Dragon Rengginang',
                'MP_ProductCategory' => 'Makanan',
                'Etalase' => 'Fruit Chips',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Varian camilan tradisional, Rengginang Buah Naga Salted Egg, dibuat dari bumbu telur asin khas Indonesia. Ini sangat renyah dengan rasa telur asin yang lezat dan kami menjamin Sahabat Obugamenia tidak akan pernah berhenti untuk menyantapnya.

                Komposisi : Beras Ketan, Buah Naga, bubuk Telur Asin, Garam, Bawang Putih, Ketumbar, Penyedap Rasa, Minyak Goreng.
                Grosir : Beli (>=25) Rp17.000
                PIRT : 515 3510 06 1177-23
                Halal : 07100058960419

                Produk ini cocok menemani hari-harimu dan oleh-oleh lo. Yuk segera order sebelum kehabisan!!!!!',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CRYhT3QgzXJ/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 18000,
                'MP_GroceryPrice' => 17000,
                'MPStatusProduct' => true,
                'MPStockProduct' => 10,
                'MPSKU' => '10',
                'MPProductWeight' => 100,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => "img/rengginang/rengginang_salted_egg_01.jpg",
                'MP_Pic2' => 'img/rengginang/rengginang_all.jpg',
                'MP_Pic3' => 'img/rengginang/rengginang_salted_egg_01.jpg',
                'MP_Pic4' => 'img/rengginang/rengginang_all.jpg',
                'MP_Pic5' => 'img/rengginang/rengginang_salted_egg_01.jpg',
                'PromoSupport' => '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi',
                'MPProductLink' => 'https://shopee.co.id/Obugame-Rennginang-Buah-Naga-Varian-Salted-Egg-100-gram-i.65325206.3210396084?sp_atk=456dd973-1e45-423b-b22e-905789169831&xptdk=456dd973-1e45-423b-b22e-905789169831',
            ],
            [
                'Itemcode' => 'ITM1-006',
                'Itemname' => 'Obugame Dragon Drink Varian jahe 20 gram',
                'MPName' => 'Shopee',
                'MP_ProductName' => 'Dragon Drink',
                'MP_ProductCategory' => 'Minuman',
                'Etalase' => 'Dragon Drink',
                'MPKondisi' => 'Baru',
                'MP_ProductDescription' => 'Dragon Drink Varian Jahe terbuat dari buah naga yang khas warna merah alami alami bagi tubuh,  dan Jahe yang memiliki rasa hangat. Tanpa pewarna, pengawet, dan menggunakan gula pasir asli (tanpa pemanis buatan).

                Kamu bisa memilih tingkatan level jahe yang sesuai dengan selera kamu, semakin tinggi level semakin tinggi kadar jahe.
                Komposisi : buah naga, gula pasir, jahe
                Netto : 100 gram
                PIRT : 513 3510 05 1177-23
                Tersedia juga ukuran 20 gram, 100 gram, 250 gram, 500 gram, 1000 gram',
                'UrlVideoProduct' => 'https://www.instagram.com/reel/CRNud8-gnrF/',
                'MP_MinOrder' => 1,
                'MP_UnitPrice' => 2500,
                'MP_GroceryPrice' => 2500,
                'MPStatusProduct' => true,
                'MPStockProduct' => 2,
                'MPSKU' => '2',
                'MPProductWeight' => 100,
                'MP_ProductLength' => 0,
                'MP_ProductWidth' => 0,
                'MP_ProductHeight' => 0,
                'MP_ProdInsurance' => false,
                'MP_Delivery' => 'STANDAR',
                'MP_POProduct' => false,
                'MP_Pic1' => 'img/dragon_drink/dragon_drink_jahe.jpg',
                'MP_Pic2' => 'img/dragon_drink/dragon_drink_jahe.jpg',
                'MP_Pic3' => 'img/dragon_drink/dragon_drink_jahe.jpg',
                'MP_Pic4' => 'img/dragon_drink/dragon_drink_jahe.jpg',
                'MP_Pic5' => 'img/dragon_drink/dragon_drink_jahe.jpg',
                'PromoSupport' => '#minumansehat#minumansegar#minumanbuahnaga#minumanjahe ',
                'MPProductLink' => 'https://shopee.co.id/Obugame-Dragon-Drink-Varian-jahe-20-gram-i.65325206.7943012742?sp_atk=395d91cc-5aaa-416b-b0d6-f099b8f6b8bc&xptdk=395d91cc-5aaa-416b-b0d6-f099b8f6b8bc',
            ],
        ]);
    }
}
