<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Rexx Code - Blog Belajar Ngoding</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card border-0 shadow rounded">
					<div class="card-body">
						<a href="{{route('blog.create')}}" class="btn btn-success btn-md mb-3">Tambah Data</a>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Gambar</th>
									<th>Judul</th>
									<th>Content</th>
									<th>Act</th>
								</tr>
							</thead>
							<tbody>
								@forelse($blogs as $blog)
								<tr>
									
									<td>
										 <img src="{{Storage::url('public/blogs/').$blog->image}}" class="rounded" style="width: 150px">
									</td>
									 <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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
			</div>
		</div>
	</div>
	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="">
		@if(session()->has('success'))
			toaster.success('{{session('success')}}','BERHASIL!');
		@elseif(session()->has('error'))
			toaster.error('{{session('error')}}','GAGAL'); 
		@endif
	</script>
</body>
</html>