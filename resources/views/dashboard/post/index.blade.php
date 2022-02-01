
@extends('template')


@section('title','REXX CODE - Dashboard Artikel')


@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="fs-3">Artikel saya</h1>
    </div>
        <div class="table-responsive">
	        <table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{ $post->title }}</td>
	          	<td>{!! $post->category->name !!}</td>
	          	<td>
	          		<a href="{{route('artikel.show',$post->slug)}}" class="btn btn-success btn-md"><i class="fas fa-eye"></i></a>
	          		<a href="" class="btn btn-warning btn-md"><i class="fas fa-edit"></i></a>
	          		<a href="" class="btn btn-danger btn-md"><i class="fas fa-times-circle"></i></a>
	          	</td>
	                         
			</tr>
		    
	        @endforeach
			</tbody>
			</table>
		</div>
@endsection
         