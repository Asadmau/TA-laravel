@extends('layout.main')
@section('title', 'Sub Kategori')
@section('breadcump', 'Kategori')
@section('page', 'Sub Kategori / List Data')
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
                        <a href="{{url('subkat/create')}}" class="btn btn-info btn-sm rounded">Tambah Sub Kategori</a>
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
                                                    style="width: 337px;">Nama Sub</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 148px;">Kode Sub</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 117px;">Keterangan</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 117px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subkategori as $item)
                                            <tr>
												<th scope="row">{{$loop->iteration}}</th>
												<td>{{$item->namaSubKategori}}</td>
												<td>{{$item->kodeSubKategori}}</td>
												<td>{{$item->ketSubKategori}}</td>
												<td>
													<form action="{{route('subkat.destroy',$item->kodeKategori)}}" method="POST">
														@method("DELETE")
														@csrf
														<button type="submit" value="DELETE"
															class="btn btn-danger">delete</button>
											
													</form>
													<a href="{{route('subkat.edit', $item->kodeKategori)}}"
														class="btn btn-info btn-sm" data-method="DELETE">edit</a>
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
