<?php

namespace App\Http\Controllers;

use App\Models\Itm1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsItm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan produk dan memperoleh id nya dari halaman kelola produk
        $itm1 = Itm1::all();
        return view('admin.kelola-produk', compact(['itm1']));
        return view('admin.beranda-admin', compact(['itm1']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->except('_token'));
        Itm1::create($request->except(['_token','MP_ProdInsurance']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data id dan menampilkannya pada halaman edit
        $itm1 = Itm1::find($id);
        return view('admin.edit-produk')->with('itm1', $itm1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
