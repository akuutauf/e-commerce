<?php

namespace App\Http\Controllers;
use App\Models\Oprinf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oprinf= Oprinf::all();
        return view('admin.kelola-promo', compact(['oprinf']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-promo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Oprinf::create($request->except(['_token']));
        return redirect('/kelola-promo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oprinf= Oprinf::find($id);
        return view('admin.delete-promo')->with('oprinf', $oprinf);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oprinf = Oprinf::find($id);
        return view('admin.edit-promo')->with('oprinf', $oprinf);
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
        $oprinf = Oprinf::find($id);
        $oprinf->update($request->except(['_token']));
        return redirect('/kelola-promo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oprinf = Oprinf::find($id);
        $oprinf->delete();
        return redirect('/kelola-promo');
    }
}
