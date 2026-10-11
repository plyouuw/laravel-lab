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
Route::post('/books', [BookController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);

// Zdefiniuj w pliku routes/web.php trasy HTTP:
// Trasy typu GET pod adresem /books/create, wywołującej metodę create kontrolera BookController, zwracającej widok z pliku resources/views/books/create.blade.php.
// Trasy typu POST pod adresem /books, wywołującej metodę store kontrolera BookController.
// Trasy typu GET pod adresem /books, wywołującej metodę index kontrolera BookController, zwracającej widok z pliku resources/views/books/index.blade.php.