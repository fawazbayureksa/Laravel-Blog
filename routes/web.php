<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Resouece memudah kan untuk membuat CRUD ketika menggunakan route
// route tersebut sudah complete, mulai dari index, create, store, edit, pdate dan destroy
// Route::resource('blog',BlogController::class);
Route::get('/','PostController@index');
Route::get('/article/{post:slug}','PostController@show');
Route::get('/blog', 'PostController@tampil');

//Contoh Route Model Binding
Route::get('categories/{category:slug}','CategoryController@show');
// Route Model Binding
Route::get('authors/{author:username}', function(User $author){
	return view('frontend/sub/article', [
		'title' => "Postingan dari penulis : $author->name",
		'posts' => $author->posts,
	]);
});