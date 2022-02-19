@extends('template')

@section('title','REXX CODE - Edit Artikel')

@section('content')
	<div class="card border-0 rounded shadow-md">
		<div class="card-body">
		
				<form method="POST" action="{{route('artikel.update',$post->slug)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control mb-3" value="{{ old('title', $post->title) }}" name="title" placeholder="Masukkan judul ...">
					</div>
					<div class="form-group">
						<label>Slug</label>
						<input type="text" class="form-control mb-3" value="{{old('slug',$post->slug)}}"  name="slug" placeholder="Masukkan slug ...">
					</div>
					<div class="form-group">
						<label>Excerpt</label>
						<textarea class="form-control mb-3"  name="excerpt">{{old('excerpt',$post->excerpt)}}</textarea>
					</div>
					<div class="form-group">
						<label for="">Kategori</label>
						<select name="kategori" id="" class="form-control mb-3">
							<option value="{{$post->category->id}}">{{$post->category->name}}</option>
							@foreach ($cat as $key)
								<option value="{{$key->id}}">{{$key->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group mb-3">
						<label>Body</label>
						<textarea class="form-control  @error('body') is-invalid @enderror" id="editor" name="body" rows="5">{{ old('body', $post->body) }}</textarea>
						 <!-- error message untuk content -->
                        @error('body')
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