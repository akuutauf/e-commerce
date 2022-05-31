<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductObugami extends Controller
{
    //

    public function admin(){
        return Product::all();
        return view('admin.kelola-produk');
    }
}
