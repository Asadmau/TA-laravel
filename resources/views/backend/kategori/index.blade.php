@extends('layout.main')
@section('title', 'Kategori')
@section('breadcump', 'Kategori')
@section('page', 'Kategori / List Data')
@section('konten')
<div class="content mt-3">
    @if (session('Pesan'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> {{ session('Pesan') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif


    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <strong class="card-title">Tabel Kategori</strong>
                        <a href="{{url('kategori/create')}}" class="btn btn-primary btn-sm rounded">Tambah Kategori</a>
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
                                                    style="width: 202px;">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 337px;">Nama Kategori</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 148px;">Hapus</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 117px;">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$loop->iteration}}</td>
                                                <td>{{$item->namaKategori}}</td>
                                                <td>
                                                    <form action="{{route('kategori.destroy', $item->kodeKategori)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{route('kategori.edit', $item->kodeKategori)}}"
                                                        class="btn btn-success btn-sm rounded">
                                                        <i class="fa fa-share-square"></i>
                                                    </a>
                                                </td>
                                                {{-- <td>
                                                    @if ($item->status == 1)

                                                    <button type="button" onclick="publishDoc('{{$item->id}}',{{ $item->status}})" class="btn btn-danger btn-sm rounded">
                                                        Batal</button>
                                                    @else
                                                    <button type="button" onclick="publishDoc('{{$item->id}}',{{ $item->status}})" class="btn btn-success btn-sm rounded">
                                                        Ya</button>

                                                    @endif
                                                </td> --}}
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