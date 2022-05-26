<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function listProduk()
    {
        return view('beranda');
    }

    public function listSepatu(){
        $product = array(
            'Sepatu1' =>array(
                'id'=>"1",
                'namaSepatu'=> "Sneakers Sports - Green Edition Adidas",
                'Harga'=> "Rp. 300.000",
                'namaToko'=>"Fashion Store",
                'terjual'=>"Terjual 1rb+",
                'lokasi'=>"Banyuwangi",
                '{{assets("img/shoes_01.jpg")}}',
            ),
            'Sepatu2' =>array(
                'id'=>"2",
                'namaSepatu'=> "Sneakers Sports - Green Docker Edition Adidas",
                'Harga'=> "Rp. 300.000",
                'namaToko'=>"Fashion Store",
                'terjual'=>"Terjual 1rb+",
                'lokasi'=>"Banyuwangi",
                '{{assets("img/shoes_04.jpg")}}',
            ),
            'Sepatu3' =>array(
                'id'=>"3",
                'namaSepatu'=> "Sneakers Sports - Featuring Collab Adidas Nike",
                'Harga'=> "Rp. 370.000",
                'namaToko'=>"Fashion Store",
                'terjual'=>"Terjual 1rb+",
                'lokasi'=>"Banyuwangi",
                '{{assets("img/shoes_03.jpg")}}',
            ),
            'Sepatu4' =>array(
                'id'=>"4",
                'namaSepatu'=> "Sneakers Sports - Black Edition Adidas",
                'Harga'=> "Rp. 355.000",
                'namaToko'=>"Fashion Store",
                'terjual'=>"Terjual 1rb+",
                'lokasi'=>"Banyuwangi",
                '{{assets("img/shoes_02.jpg")}}',
            ),
            );
            return view('beranda')->with($product);
    }
}
