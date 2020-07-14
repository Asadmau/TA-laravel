@extends('layout.main')
@section('title', 'Produk')
@section('breadcump', 'Produk')
@section('page', 'Produk / List Produk')
@section('konten')
<div class="content mt-3">


    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong class="card-title">Data Table</strong>
                        <a href="{{url('produk/create')}}" class="btn btn-primary btn-sm rounded">Tambah Produk</a>
                    </div>
                    <div class="card-body">
                        <div id="bootstrap-data-table_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="bootstrap-data-table"
                                        class="table table-striped table-bordered dataTable no-footer" role="grid"
                                        aria-describedby="bootstrap-data-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0"
                                                    aria-controls="bootstrap-data-table" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 202px;">No.</th>
                                                <th class="sorting_asc" tabindex="0"
                                                    aria-controls="bootstrap-data-table" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 202px;">Nama produk</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 337px;">Jumlah Produk</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 148px;">Harga per unit</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 117px;">Hapus</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 117px;">Publish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr class="odd">
                                                <td class="sorting_1">{{$loop->iteration}}</td>

                                                <td>{{$item->nama_produk}}</td>
                                                <td>{{$item->jumlah}}</td>
                                                <td>{{$item->harga}}</td>
                                                <td>
                                                    <form action="{{route('produk.destroy', $item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    @if ($item->status == 1)

                                                    <button type="button"
                                                        onclick="publishDoc('{{$item->id}}',{{ $item->status}})"
                                                        class="btn btn-danger btn-sm rounded">
                                                        Batal</button>
                                                    @else
                                                    <button type="button"
                                                        onclick="publishDoc('{{$item->id}}',{{ $item->status}})"
                                                        class="btn btn-success btn-sm rounded">
                                                        Ya</button>

                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection