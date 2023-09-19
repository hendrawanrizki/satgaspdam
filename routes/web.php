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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Mochammad Rizki Hendrawan',
        'email' => 'rizkihendrawan789@gmail.com',
        'address' => 'Mojosari',
        "image" => "RIZKI.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});

// Route::get('/', function () {
//     return 'Halaman Root';
// });

// Route::get('/about', function () {
//     return 'Halaman Root';
// });

// Route::get('/blog', function () {
//     return 'Halaman Blog';
// });
