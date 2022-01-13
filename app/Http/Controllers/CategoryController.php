<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
    	return view('frontend/sub/category', [
		'title' => $category->name,
		'posts' => $category->posts,
		'category' => $category->name
	]);
    }
}
