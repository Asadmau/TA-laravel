<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Subkategori;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subkategori = Subkategori::all();
        return view('backend/subkategori/index', compact('subkategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = \App\Kategori::all('kodeKategori','namaKategori');
        return view('backend/subkategori/tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = 'sub_cat';
        $random = Str::random(10);
        $id_Sub = $sub . $random;

        $subKategori = new Subkategori();
        $subKategori->kodeKategori = $request->kategori;
        $subKategori->kodeSubKategori = $id_Sub;
        $subKategori->namaSubKategori = $request->namasub;
        $subKategori->ketSubKategori = $request->ketsub;
        $subKategori->save();
        return redirect()->route('subkat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function show(Subkategori $subkategori)
    {
        //
        // $cari = $subkategori->cari;

        // // mengambil data dari table pegawai sesuai pencarian data
        // $dbbarang = Subkategori::table('subkategori')
        //     ->where('name', 'like', "%" . $cari . "%")
        //     ->paginate();
        // return view('backend/subkategori/index', compact('dbbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkategori $subkategori, $id)
    {
        //
        $dbbarang = Subkategori::findOrFail($id);
        return view('subkategori.edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkategori $subkategori, $id)
    {
        //
        // $status = 0;
        // if ($request->status) {
        //     # code...
        //     $status = 1;
        // }

        $dbbarang = Subkategori::find($id);
        $dbbarang->namasub = $request->namasub;
        $dbbarang->kodekat = $request->kodekat;
        $dbbarang->ketsub = $request->ketsub;
        // $dbbarang->status = $status;
        // $dbbarang->add_date = 'asadadaskdlkaslk';
        $dbbarang->updated_date = $request->updated_date;
        // $dbbarang->updated_flag = 0;

        //eksekusi
        $dbbarang->save();
        return redirect()->route('crud.index');

        // return view('crud.index', compact('dbbarang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($subkategori)
    {
        //
        Subkategori::destroy($subkategori);
        return redirect()->back()->with('subkategori', 'hapus sukses');
    }
}
