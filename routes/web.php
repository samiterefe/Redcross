<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [PostController::class, 'perform'])->name('logout.perform');
 });

Route::get('/createPost', [UserController::class, 'CreatePost']);

Route::resources([
    '/posts/createe' => PostController::class,
    '/posts/create'  => PostController::class,
    
]); 
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::get('/read/post/{id}', [NewsController::class, 'read']);
Route::get('/read/post/{id}', [NewsController::class, 'readhome']);
Route::get('/dashboard', [PostController::class, 'index'])->middleware('auth');;
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/newspost', [NewsController::class, 'index'])->name('posts');
Route::get('/', [NewsController::class, 'home'])->name('home');

require __DIR__.'/auth.php';
