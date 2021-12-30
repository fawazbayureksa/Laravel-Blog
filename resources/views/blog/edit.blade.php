<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>RexxCode - Blog Belajar Ngoding</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">

</head>
<body style="background: lightgray">

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0 rounded shadow-md">
				<div class="card-body">
						<form method="POST" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label class="h5">Gambar</label>
								<input type="file" name="image" class="form-control">
								<img src="{{Storage::url('public/blogs/').$blog->image}}" width="150" alt="" class="rounded mb-3">
							</div>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control mb-3" value="{{ old('title', $blog->title) }}" name="title" placeholder="Masukkan judul ...">
							</div>
							<div class="form-group mb-3">
								<label>Konten</label>
								<textarea class="form-control  @error('content') is-invalid @enderror" name="content" rows="5"placeholder="Masukkan konten blog ...">{{ old('content', $blog->content) }}</textarea>
								 <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
							<button type="submit" class="btn btn-primary btn-md">Update</button>
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