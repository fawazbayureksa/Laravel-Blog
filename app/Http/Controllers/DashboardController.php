<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class DashboardController extends Controller
{
    public function index()
    {
        // untuk menampilkan semua data
        // $posts = Post::all();

        // Menampilkan data sesuai jumlah yang diminta
        // $posts = Post::paginate(10);
        $posts = Post::with(['category','author'])->paginate(5);

        return view('blog/index',['posts' => $posts , 'active' => 'user']);
    }
}
