<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
    	return view('frontend/sub/article', [
		'title' => "Postingan dari kategori : $category->name",
		// load() merupakan fitur dari lazy eager loading dan digunakan di situasi seperti saat menggunakan route model binding
		'posts' => $category->posts->load('category','author'),
		// 'category' => $category->name
	]);
    }
}
