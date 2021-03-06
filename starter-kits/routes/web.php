<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Models\Post;
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
    $data = [
        'gretting' => 'Selamat Datang di Starter Kits ^_^',
    ];
    return view('home', $data);
});

Route::get('/blog', [BlogController::class,'index']);
Route::get('/post/{slug}', [PostController::class,'show']);

Route::resource('posts', PostController::class);

Route::get('/about', function () {
    $data = [
        'name' => 'Cecep',
        'image' => '/images/cto.jpg',
    ];
    return view('about', $data);
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
