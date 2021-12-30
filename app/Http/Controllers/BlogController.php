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

    	$image = $requset->file('image');
    	$image->storeAs('public/blogs',$image->hashName());
    	$blog = Blog::create([
    		'image' => $image->hashName(),
    		'title' => $request->title(),
    		'content' => $request->content
    	]);

    	return redirect()->route('blog.index')->with(['success'=>'Data berhasil ditambahkan']);
    }
}
