@extends('app')
@section('content')

    <div class="d-flex justify-content-center">...</div>
            <div class="card" >
        <div class="card-header">
            Form Tambah Buku Tamu
        </div>
        <div class="card-body">
                    <form action="{{url('admin/simpan-data')}}" method="post">
                        @csrf
                        <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nama">
            </div>
                        <div class="mb-3">
                <label for="no_telp" class="form-label">No.Telp</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" aria-describedby="tlp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="kategori">
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan</label>
                <textarea name="keperluan" class="formcontrol"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{url('dashboard')}}">Cancel</a>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
        </div>
    </div>
@endsection