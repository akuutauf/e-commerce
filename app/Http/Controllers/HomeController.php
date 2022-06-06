<?php

namespace App\Http\Controllers;
use App\Models\Itm1;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'categories' => Itm1::select('MP_ProductName')->groupBy('MP_ProductName')->get(),
            'products' => Itm1::all()
        ];

        // return dd($data['items']);
        return view('admin.beranda-admin', $data);
        // return view('home');
    }
}
