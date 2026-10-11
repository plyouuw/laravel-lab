<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('strona_glowna');
})->name('strona_glowna');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/witaj', function () {
    return "Witaj w aplikacji!";
})->name('witaj');

use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index']);

Route::get('/users/{user_id}', function ($user_id) {
    return view('user_profile', ['user_id' => $user_id]);
})->name('user.show');

Route::get('/photo/{city?}/{street?}', function ($city = null, $street = 'main') {
    return view('photo_info', [
        'city' => $city,
        'street' => $street
    ]);
})->name('photo.show');

Route::get('/wymiary/{wysokosc?}/{szerokosc?}/{glebokosc?}', function ($wysokosc = null, $szerokosc = null, $glebokosc = null) {
    return view('wymiary', [
        'wysokosc' => $wysokosc,
        'szerokosc' => $szerokosc,
        'glebokosc' => $glebokosc
    ]);
})->name('wymiary');

use App\Http\Controllers\BookController;
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'delete'])->name('books.delete');

Route::post('/admin/login', [BookController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [BookController::class, 'adminLogout'])->name('admin.logout');