@extends('app')
@section('content')
<div class="card">
      @if (session('status'))
					    <div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
    <div class="card-header">
        Data Buku Tamu  <a href="{{url('admin/form-tambah')}}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="card-body">
    <table class="table" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">No.Telp</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kategori</th>
      <th scope="col">Keperluan</th>
      <th scope="col" style="width: 15%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $value)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->no_telp}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->alamat}}</td>
            <td>{{$value->kategori}}</td>
            <td>{{$value->keperluan}}</td>
            <td>
                <div class="row">
                  <div class="col-4">
                  <a href="{{url('admin/form-edit', $value->id)}}" class="btn btn-warning">Edit</a>
                  </div>
                  <div class="col-4">
                  <form id="hapusForm" action="{{ url('admin/hapus-data') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $value->id }}">
    <button type="button" class="btn btn-danger" onclick="konfirmasiHapus()">Delete</button>
</form>

<script>
    function konfirmasiHapus() {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            document.getElementById('hapusForm').submit();
        }
    }
</script>

                    </form>
                  </div>
                </div>
                
                
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection

@section('script')
    <script>
       let table = new DataTable('#myTable');


        </script>
@endsection