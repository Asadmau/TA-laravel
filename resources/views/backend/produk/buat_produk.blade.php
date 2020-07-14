@extends('layout.main')
@section('title', 'Buat produk')
@section('breadcump', 'produk')
@section('page', 'produk / Buat Produk')
@section('konten')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tambah Produk</strong>
            </div>
            <div class="card-body">

            <form action="{{route('produk.store')}}" method="POST">
                    @csrf
                    <div class="px-5">
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label><i>Nama Produk</i></label>
                                <input class="form-control" type="text" name="nama_produk" placeholder="nama Produk">
                            </div>
                            <div class="form-group">
                                <label><i>Harga per unit</i></label>
                                <input class="form-control" type="text" name="harga" placeholder="nama kategori">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label><i>Kategori</i></label>
                                <select name="cat_id" id="" class="form-control">
                                    <option value="sass121scdcdczxqsqq">Komputer</option>
                                    <option value="losqn232nswunxwwwdwd">Buku</option>
                                    <option value="zasawerevvfmkokowdwdk">Kertas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><i>Jumlah unit</i></label>
                                <input class="form-control" type="text" name="jumlah" placeholder="nama kategori">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label><i>Sub Kategori</i></label>
                                <select name="sub_cat_id" id="" class="form-control">
                                    <option value="sass121scdcdczxqsqq">test 1</option>
                                    <option value="losqn232nswunxwwwdwd">test 2</option>
                                    <option value="zasawerevvfmkokowdwdk">test 3</option>
                                </select>
                            </div>
                            <div>
                                <div class="form-group">
                                    <input class="form-control" type="checkbox" name="ditampilkan"> <i class="text-muted"><strong>is Featured</strong></i>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="checkbox" name="status"> <i class="text-muted"><strong>is Publish</strong></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label><i>Deskripsi produk</i></label>
                                <textarea class="form-control" type="text" name="deskripsi_produk" placeholder="nama kategori"></textarea>
                            </div>
                            <div>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="img_produk"> <i class="text-muted"><strong>Foto produk</strong></i>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="img_icon"> <i class="text-muted"><strong>Icon produk</strong></i>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection