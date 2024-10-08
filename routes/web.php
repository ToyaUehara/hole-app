<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/holes', [HoleController::class, 'index'])->name('hole.index');   

Route::get('holes/{hole}/posts/create', [PostController::class, 'create'])->name('post.create');

Route::get('/holes/{hole}', [HoleController::class ,'show']);

Route::get('/posts', [PostController::class, 'index'])->name('post.index');   

Route::get('/posts/{post}', [PostController::class ,'show']);

Route::post('/posts', [PostController::class, 'store']);

Route::post('/holes', [HoleController::class, 'store']);

Route::get('/map', function () {
    return view('map');
});

require __DIR__.'/auth.php';


 

