<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'kode_produk' => 'ZSE02',
                'kode_toko' => 'OB01',
                'image_produk' => '{{asset("img/snack_03.jpg")}}',
                'nama_produk' => 'Irvins - Zigzag Salted Egg',
                'harga_produk' => 100000,
                'kategori_produk' => 'Chocochips',
                'deskripsi_produk' => 'Zigzag salted egg is a snack that is made from salted egg and a variety of other ingredients. It is a popular snack in Indonesia and Malaysia.',
                'varian_produk' => 'Snack / Camilan',
                'stok_produk' => 100,
                'berat_produk' => "500",
                'created_at' => now(),
            ],
        ]);
    }
}
