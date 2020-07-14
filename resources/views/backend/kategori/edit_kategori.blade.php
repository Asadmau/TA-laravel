@extends('layout.main')
@section('title', 'Buat Kategori')
@section('breadcump', 'Kategori')
@section('page', 'Kategori / Edit Kategori')
@section('konten')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Edit Kategori</strong>
            </div>
            <div class="card-body text-center">

            <form action="{{route('kategori.update', $kategori->kodeKategori)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="px-5">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="nama kategori"
                            value="{{$kategori->namaKategori}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="ket">{{$kategori->ketKategori}}
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection