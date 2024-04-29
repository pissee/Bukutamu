@extends('app')
@section('content')

    <div class="d-flex justify-content-center">...</div>
            <div class="card" >
        <div class="card-header">
            Form Edit Buku Tamu
        </div>
        <div class="card-body">
                    <form action="{{url('admin/update-data')}}" method="post">
                        @csrf
                        <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{$data->name}}">
            </div>
                        <div class="mb-3">
                <label for="no_telp" class="form-label">No.Telp</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" aria-describedby="no_telp" value="{{$data->no_telp}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="{{$data->email}}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="{{$data->alamat}}">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="kategori" value="{{$data->kategori}}">
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan</label>
                <input type="text" class="form-control" name="keperluan" id="keperluan" aria-describedby="keperluan" value="{{$data->keperluan}}">
            </div>

            <input type="hidden" value="{{$data->id}}" name="id">
            
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