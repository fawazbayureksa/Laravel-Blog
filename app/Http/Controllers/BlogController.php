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
}
