<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::all();
        return view('backend.produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk.buat_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tampil = 0;
        $status = 0;
        if ($request->status) {
            # code...
            $status = 1;
        } elseif($request->ditampilkan){
            $tampil = 1;
        }
        $random = Str::random(20);
        $id = 'prdk_'.$random;
        $data =new Produk();
        $data->id = $id;
        $data->cat_id = $request->cat_id;
        $data->sub_cat_id = $request->sub_cat_id;
        $data->nama_produk = $request->nama_produk;
        $data->deskripsi_produk = $request->deskripsi_produk;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->ditampilkan = $tampil;
        $data->status = $status;
        $data->add_user_id = \Auth::user()->id;
        $data->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->back();
    }
}
