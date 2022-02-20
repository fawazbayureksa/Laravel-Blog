<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DbpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampilkan data post yang user id nya or penulisnya sama dengan user id yang yang lagi login
        $post = Post::where('user_id',auth()->user()->id)->get();
        return view('dashboard.post.index',['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();
        return view('dashboard.post.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->kategori,
            'user_id' => $request->userid,
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);
        return redirect()->route('artikel.index')->with('success','Artiekl berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::where('slug',$id)->first();
        return view('dashboard.post.detail',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cat = Category::all();
        $post = Post::where('slug',$id)->first();
        return view('dashboard.post.edit',['cat' => $cat,'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post = Post::where('slug',$id)->first();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->category_id = $request->kategori;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('artikel.index')->with('success','Artikel berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('slug',$id)->first();

        $post->delete();

        return redirect()->route('artikel.index')->with('success','Data berhasil dihapus');
    }
}
