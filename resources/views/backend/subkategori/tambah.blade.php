@extends('layout.main')
@section('title', 'Sub Kategori')
@section('breadcump', 'Kategori')
@section('page', 'Sub Kategori / Tambah Data')
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

			<div class="col-10 col-md-12">
				<div class="card">
					<div class="card-header">
						<strong class="card-title">Tambah Subkategori</strong>
					</div>
					<div class="card-body">

						<div class=" col-md-6">
							<form action="{{route('subkat.store')}}" method="POST">
								@csrf
								<div class="form-group">
									<label for="namasub">Nama Subkategori</label>
									<input type="text" class="form-control" id="namasub" name="namasub">
								</div>
								<div class="form-group">
									<label for="kodekat">Kategori</label>
									<select name="kategori" id="kategori" class="form-control"></select>
								</div>
								<div class="form-group">
									<label for="ketsub">Keterangan</label>
									<textarea type="text" class="form-control" id="ketsub" name="ketsub"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<script type="module">
	const data = @json($kategori);
	const html = [];
	html.push(`<option>--Pilih Sub Kategori--`);
    for (const iterator of data) {//begin for loop
        html.push(`<option value='${iterator.kodeKategori}'>${iterator.namaKategori}`);
    }
    document.getElementById("kategori").innerHTML = html.join("");
</script>
@endsection
