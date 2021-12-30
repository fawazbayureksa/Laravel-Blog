<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Rexx Code - Blog Belajar Ngoding</title>
	<link rel="stylesheet" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card border-0 rounded shadow-md">
					<div class="card-body">
						<form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="h5">Gambar</label>
								<input type="file" name="image" class="form-control mb-3 @error('image') is-invalid @enderror">
								  <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control mb-3 @error('title') is-invalid @enderror"  name="title" placeholder="Masukkan judul ...">
								 <!-- error message untuk content -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
							<div class="form-group mb-3">
								<label>Konten</label>
								<textarea class="form-control  @error('content') is-invalid @enderror" name="content" rows="5"placeholder="Masukkan konten blog ...">{{ old('content') }}</textarea>
								 <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
							<button type="submit" class="btn btn-primary btn-md">Simpan</button>
							<button type="submit" class="btn btn-success btn-md">Refresh</button>
								<a href="{{route('blog.index')}}" class="btn btn-warning btn-md">Kembali</a>
						</form>
					</div>			
				</div>		
			</div>	
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace('content' );
	</script>
</body>
</html>