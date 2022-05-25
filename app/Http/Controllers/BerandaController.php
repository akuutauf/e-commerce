<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function listProduk()
    {
        return view('beranda');
    }
}
