
@extends('template')


@section('title','REXX CODE - Dashboard Artikel')


@section('content')
@if(session()->has('success'))
	<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
		<strong>{{session('success')}}</strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
	</div>
@endif
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="fs-3">Artikel saya</h1>
		<h3><a href="{{route('artikel.create')}}" class="btn btn-primary btn-md"><i class="fas fa-plus"></i> Menulis Baru</a></h3>
    </div>
        <div class="table-responsive">
	        <table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th width="10rem">Aksi</th>
					</tr>
				</thead>
			<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{ $post->title }}</td>
	          	<td>{!! $post->category->name !!}</td>
	          	<td>
	          		<a href="{{route('artikel.show',$post->slug)}}" class="btn btn-success btn-md mb-2"><i class="fas fa-eye"></i></a>
	          		<a href="{{route('artikel.edit',$post->slug)}}" class="btn btn-warning btn-md mb-2"><i class="fas fa-edit"></i></a>
	          		{{-- <a href="{{route('artikel.destroy',$post->slug)}}" class="btn btn-danger btn-md"><i class="fas fa-times-circle"></i></a> --}}

					  <form action="{{route ('artikel.destroy',$post->slug)}}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-md"><i class="fas fa-times-circle"></i></button>
					</form>
	          	</td>
	                         
			</tr>
	        @endforeach
			</tbody>
			</table>
		</div>
		
@endsection
         