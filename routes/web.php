<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [UserController::class, 'lihatkategori']);
Route::get('/kategorilowonganuser/{id}',[UserController::class, 'lowonganbyid']);
Route::get('/lowonganuser/{id}',[UserController::class, 'pilihlowonganbyid']);
Route::post('/pilihlowongan/{id}',[UserController::class, 'uploaddatauser'])->name('tambahdata');

Route::get('/login', [AdminController::class, 'lihatlogin']);
Route::get('/register', [AdminController::class, 'lihatregister']);

Route::get('/admin', function () {
    return view('admin.home');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/lowongan', function () {
//     return view('home');
// });

// Route::get('/formlowongan', function () {
//     return view('lowongan/form');
// });
// Route::get('/', function () {
//     return 'Halaman Root';
// });

// Route::get('/about', function () {
//     return 'Halaman Root';
// });

// Route::get('/blog', function () {
//     return 'Halaman Blog';
// }