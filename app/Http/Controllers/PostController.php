<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        // Menampilkan data sesuai urutan id 
        // $posts = Post::all();

        //with() digunakan menampilkan data dengan meningkatkan keoptimalan ketika melakukan relasi menggunakan fitur laravel eager loading,diurut sesuai data yang terbaru m
        $posts = Post::with(['author','category'])->latest()->get();

        // "title" => "Semua Artikel"
       // Menampilkan data dari yang terbaru
        // $posts = Post::latest()->get();

    	return view('frontend/sub/article',['posts' => $posts , 'title' => "Semua Artikel"]);
    }

    public function tampil(){
        
        // untuk menampilkan semua data
        // $posts = Post::all();

        // Menampilkan data sesuai jumlah yang diminta
    	$posts = Post::paginate(10);
        return view('blog/index',compact('posts'));

    }
    // Route Model Binding 
    public function show(Post $post)
    {
    	return view('frontend/sub/content',['post' => $post]);
    }

}
