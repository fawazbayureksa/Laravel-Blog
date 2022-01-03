<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
    	$posts = Post::all();

    	return view('frontend/sub/article',compact('posts'));

    }

    // Route Model Binding 
    public function show(Post $post)
    {

    	return view('frontend/sub/content',['post' => $post]);
    }


}
