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

// Route::get('/blog', 'PostController@tampil');

// halaman login hanya bisa di akses oleh yang belum login 
// name('login') untuk mengatasi login not found jika mengakses dashboard tanpa login
Route::get('/login', 'LoginController@index')->middleware('guest')->name('login');

Route::post('/login', 'LoginController@authenticate');

Route::post('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store');

Route::get('/dashboard','DashboardController@index')->middleware('auth');


// ---- tidak digunakan karena sudah di handle oleh fitur scopefilter di Models/Post

//Contoh Route Model Binding
// Route::get('categories/{category:slug}','CategoryController@show');
// // Route Model Binding
// Route::get('authors/{author:username}', function(User $author){
// 	return view('frontend/sub/article', [
// 		'title' => "Postingan dari penulis : $author->name",
// 		// load() merupakan fitur dari lazy eager loading dan digunakan di situasi seperti saat menggunakan route model binding
// 		'posts' => $author->posts->load('category','author'),
// 	]);
// });

// ----

Route::get('/categories','CategoryController@index');

