<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\authorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    //author controller
    Route::get('/author/create',[authorController::class,'create'])->name('author.create');
    Route::post('/author/store', [authorController::class, 'store'])->name('author.store');

    // Profile Controller
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Category Controller
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories', [CategoryController::class, 'getAllCategories'])->name('categories.index');

    // Book Controller
    Route::get('/books/create',[BookController::class,'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

    // Post Controller
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/create/{book_id}', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
});

Route::get('/', [BookController::class, 'list'])->name('books.list');
Route::get('/books/show-posts/{book_id}', [BookController::class, 'showPosts'])->name('books.show_posts');
Route::post('/books/filter', [BookController::class, 'filtrarLibros'])->name('books.filter');

Route::get('/dashboard', function () {
    return view('books.list');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__ . '/auth.php';
