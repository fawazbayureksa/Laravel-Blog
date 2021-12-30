<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Resouece memudah kan untuk membuat CRUD ketika menggunakan route
// route tersebut sudah complete, mulai dari index, create, store, edit, pdate dan destroy
Route::resource('blog',BlogController::class);
