
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
        <a href="{{route('artikel.create')}}" class="btn btn-primary btn-md"><i class="fas fa-user-edit"></i> Menulis</a>
    </div>
        <div class="table-responsive">
	        <table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th width="80px">Aksi</th>
					</tr>
				</thead>
			<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{ $post->title }}</td>
	          	<td>{!! $post->category->name !!}</td>
	          	<td>
	          		<!-- disini bisa menggunakan slug karena di Post Models sudah di tambahkan getroutekeyname -->
	          		<a href="{{route('artikel.show',$post->slug)}}" class="btn btn-success btn-md mb-2"><i class="fas fa-eye"></i></a>
	          		<a href="{{route('artikel.edit',$post->slug)}}" class="btn btn-warning btn-md mb-2"><i class="fas fa-edit"></i></a>
	          		<form action="{{route('artikel.destroy',$post->slug)}}" method="post">
	          			@csrf
	          			@method('DELETE')
	          			<button type="submit" class="btn btn-danger btn-md"><i class="fas fa-trash"></i></button>
	          		</form>
	          	</td>
	                         
			</tr>
		    
	        @endforeach
			</tbody>
			</table>
		</div>
@endsection
         