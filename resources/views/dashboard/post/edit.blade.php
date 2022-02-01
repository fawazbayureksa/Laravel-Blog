@extends('template')

@section('title','REXX CODE - Dashboard Ubah Artikel')

@section('content')
	<div class="card border-0 rounded shadow-md">
		<div class="card-body">
				<form method="POST" action="{{route('artikel.update',$post->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control mb-3" value="{{ old('title', $post->title) }}" name="title" placeholder="Masukkan judul ...">
					</div>					
					<div class="form-group">
						<label>Kategori</label>
						<input type="text" class="form-control mb-3" value="{{ old('kategori', $post->category->name) }}" name="kategori" placeholder="Masukkan Kategori ...">
					</div>
					<div class="form-group mb-3">
						<label>Body</label>
						<textarea class="form-control  @error('body') is-invalid @enderror" name="body" rows="5"placeholder="Masukkan Body blog ...">{{ old('body', $post->body) }}</textarea>
						 <!-- error message untuk content -->
                        @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
					</div>
					<button type="submit" class="btn btn-primary btn-md">Update</button>
					<button type="submit" class="btn btn-success btn-md">Refresh</button>
						<a href="{{route('artikel.index')}}" class="btn btn-warning btn-md">Kembali</a>
				</form>
		</div>
	</div>	
@endsection