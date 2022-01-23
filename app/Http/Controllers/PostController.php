<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\user;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        // Menampilkan data sesuai urutan id 
        // $posts = Post::all();

        //with() digunakan menampilkan data dengan meningkatkan keoptimalan ketika melakukan relasi menggunakan fitur laravel eager loading,diurut sesuai data yang terbaru , tapi karena di models sudah di relasikan  maka di controller tidak perlu di relasikan lagi dengan with()
        // $posts = Post::with(['author','category'])->latest()->get();

        $posts = Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString();

        // deklarasi title
        $title = '';

        if (request('category')) {
            // jika ada pencarian category , cari slug yang mirip dengan request category
            $category = Category::firstWhere('slug' , request('category'));
            $title = 'All Article in '.$category->name;
        }

        else if(request('author')) {

            $author = User::firstWhere('username',request('author'));
            $title = 'All Article by '. $author->name;
        }
        else{

            $title = 'All Article';
        }

        $active = 'beranda';
 
        // $posts = Post::with(['author','category'])->paginate(9);

        // "title" => "Semua Artikel"
       // Menampilkan data dari yang terbaru
        // $posts = Post::latest()->get();

        // Fungsi Cari
        
        
        // dd(request('search'));
    	return view('frontend/sub/article',[
            'posts' => $posts,
            'title' => $title,
            'active' => $active]
        );
    }

    public function tampil(){
        
        // untuk menampilkan semua data
        // $posts = Post::all();

        // Menampilkan data sesuai jumlah yang diminta
    	// $posts = Post::paginate(10);
        $posts = Post::with(['category','author'])->paginate(5);

        return view('blog/index',['posts' => $posts , 'active' => 'user']);

    }
    // Route Model Binding 
    public function show(Post $post)
    {
    	return view('frontend/sub/content',['post' => $post, 'active' => 'beranda']);
    }

}
