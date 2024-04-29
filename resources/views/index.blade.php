<!doctype html>
<html lang="en">
  <head>
  	<title>Halaman Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="frontend/css/second.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">					

				<h2 class="heading-section">Aplikasi Buku Tamu</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{url('/frontend/images/unpad.png')}});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Welcome</h3>
			      		</div>		
			      	</div>
					@if (session('status'))
					    <div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
							<form action="{{url('simpan-bukutamu')}}" method="post" class="signin-form">
							@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" name="name" class="form-control" placeholder="Silahkan Isi Nama Anda" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">No.Telp</label>
		              <input type="text" name="no_telp" class="form-control" placeholder="Silahkan Isi Nomor Telp Anda" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label" for="password">Email</label>
		              <input type="email" name="email" class="form-control" placeholder="Silahkan Isi Email Anda" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label" for="password">Alamat</label>
						<input type="alamat" name="alamat" class="form-control" placeholder="Silahkan Isi Alamat Anda" required>
		            </div>
					<div class="form-group mb-3">
		            	<label class="label" for="password">Kategori</label>
		              <input type="text" name="kategori" class="form-control" placeholder="Silahkan Isi Kategori Anda" required>
		            </div>
					<div class="form-group mb-3">
					<label class="label" for="password">Keperluan</label>
		              <textarea name="keperluan" class="form-control" placeholder="Silahkan Isi Alamat Anda" cols="3" ></textarea>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
		            </div>

						<div class="mt-5">
							<a href="{{url('dashboard')}}">Dashboard</a>
						</div>
		       
		          </form>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('/frontend/js/popper.js')}}"></script>
  <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/frontend/js/main.js')}}"></script>

	</body>
</html>

