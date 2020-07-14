<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();
        return view('backend.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.buat_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $randomid = mt_rand(100000,999999); 
        $data = new Kategori();
        $data->kodeKategori = $randomid; 
        $data->namaKategori = $request->nama; 
        $data->ketKategori = $request->ket; 
        $data->save();
        return redirect()->route('kategori.index')->with('Pesan', 'Berhasil menambahkan kategori '.$request->nama);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::where('kodeKategori',$id)->first();
        return view('backend.kategori.edit_kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kategori)
    {
        $data = Kategori::where('kodeKategori',$kategori)->first();
        $data->namaKategori = $request->nama; 
        $data->ketKategori = $request->ket;
        $data->save();
        return redirect()->route('kategori.index')->with('Pesan', 'Berhasil edit kategori '.$request->nama);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Kategori::find($id);
        // $data->delete();
        Kategori::destroy($id);
        return redirect()->back()->with('Pesan', 'Berhasil Hapus '.$id);
    }
    public function rest_api_update(Request $request, $id)
    {
        $int = 0;
        $publish = Kategori::where('id',$id)->first();
        if ($request->status = 0) {
            $int = 1;
        }
        $publish->status = $int;
        $publish->updated_user_id = \Auth::user()->id;
        $publish->save();
        return response()->json(["pesan" => 'Sukses']);
    }
}
