@extends('layout.main')
@section('title', 'Buat Kategori')
@section('breadcump', 'Kategori')
@section('page', 'Kategori / Buat Kategori')
@section('konten')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tambah Kategori</strong>
            </div>
            <div class="card-body text-center">

            <form action="{{route('kategori.store')}}" method="POST">
                    @csrf
                    <div class="px-5">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="nama kategori">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="ket"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection