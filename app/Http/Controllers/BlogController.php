<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    //Perintah menampilkan data 
    public function index(){
    	$blogs = Blog::latest()->paginate(10);
    	return view('blog/index',compact('blogs'));
    }

    // link mengarah halaman tambah data
    public function create(){
    	return view('blog/create');
    }

    public function store(Request $request){
    	// muntuk memvalidasi data inputan jika validasi terpenuhi maka selanjutnya ke proses  
    	$this->validate($request,[
    		'image' => 'required|image|mimes:png,jpg,jpeg',
    		'title' => 'required',
    		'content' => 'required'
    	]);

    	// Proses upload gambar

    	$image = $request->file('image');
    	$image->storeAs('public/blogs',$image->hashName());
    	$blog = Blog::create([
    		'image' => $image->hashName(),
    		'title' => $request->title,
    		'content' => $request->content
    	]);

    	return redirect()->route('blog.index')->with(['success'=>'Data berhasil ditambahkan']);
    }

    public function edit(Blog $blog)
    {

    	return view('blog.edit',compact('blog'));
    }

    public function update(Request $request,Blog $blog)
    {
    	// Validasi data inputan
    	$this->validate($request, [
    		'title' => 'required',
    		'content' => 'required'
    	]);

    	$blog = Blog::find($blog->id);

    	if ($request->file('image') == "") {
    		# code...
    		// jika gambar tidak diganti
    		$blog->update([
    			'title' => $request->title,
    			'content' => $request->content
    		]);
    	}
    		// Jika gambar diganti
    	else
    	{
    		// Hapus dulu gambar lama
    		Storage::disk('local')->delete('public/blogs/'.$blog->image);

    		// upload gambar baru
    		$image->storeAs('public/blogs',$image->hashName());
    		$blog = Blog::create([
    		'image' => $image->hashName(),
    		'title' => $request->title,
    		'content' => $request->content
    	]);

    	}

    	return redirect()->route('blog.index')->with(['success'=>'Data berhasil diubah']);
    } 
}
