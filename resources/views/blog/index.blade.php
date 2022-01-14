
@extends('template')


@section('title','REXX CODE - Content')


@section('content')
<body style="background: lightgray">
	
		<div class="card border-0 shadow rounded">
			<div class="card-body">
				<div style="text-align: right">
					<a href="#" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<!-- Blog Controller -->
							<!-- <th>Gambar</th>
							<th>Judul</th>
							<th>Content</th>
							<th>Act</th> -->
							<!-- Post Controller -->
							<th>No</th>
							<th>Title</th>
							<th>Slug</th>
							<th>Experct</th>
							<th>Body</th>
							<th>Act</th>
						</tr>
					</thead>
					<tbody>
						@forelse($posts as $post)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{ $post->title }}</td>
							<td>{{ $post->slug }}</td>
                            <td>{!! $post->excerpt !!}</td>
                            <td>{!! $post->body !!}</td>
                         
						</tr>
						   @empty
                          <div class="alert alert-danger">
                              Data Blog belum Tersedia.
                          </div>
                      @endforelse
					</tbody>
				</table>
			</div>
		</div>

@endsection
				 