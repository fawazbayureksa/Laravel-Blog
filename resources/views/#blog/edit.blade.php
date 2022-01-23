@extends('template')

@section('title','REXX CODE - Edit Content')

@section('content')
	<div class="card border-0 rounded shadow-md">
		<div class="card-body">
				<form method="POST" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label class="h5">Gambar</label>
						<input type="file" name="image" class="form-control mb-3">
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
@endsection