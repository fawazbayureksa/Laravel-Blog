
@extends('template')


@section('title','REXX CODE - Content')


@section('content')
<body style="background: lightgray">
	
		<div class="card border-0 shadow rounded">
			<div class="card-body">
				<a href="{{route('blog.create')}}" class="btn btn-success btn-md mb-3">Tambah Data</a>
				<table class="table table-bordered">
					<thead>
						<tr>
							<!-- Blog Controller -->
							<!-- <th>Gambar</th>
							<th>Judul</th>
							<th>Content</th>
							<th>Act</th> -->
							<!-- Post Controller -->
							<th>Title</th>
							<th>Slug</th>
							<th>Experct</th>
							<th>Body</th>
							<th>Act</th>
						</tr>
					</thead>
					<tbody>
						@forelse($blogs as $blog)
						<tr>
							
							<td class="text-center"> 
								 <img src="{{Storage::url('public/blogs/').$blog->image}}" class="rounded" style="width: 200px">
							</td>
							 <td>{{ $post->title }}</td>
							 <td>{{ $blog->title }}</td>
                            <td>{!! $blog->content !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-primary mb-2">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
						</tr>
						   @empty
                          <div class="alert alert-danger">
                              Data Blog belum Tersedia.
                          </div>
                      @endforelse
					</tbody>
				</table>
				   {{ $blogs->links() }}
			</div>
		</div>

@endsection