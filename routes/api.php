<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/lihatlowongan',[AdminController::class, 'lihatlowongan']);
Route::get('/editlowongan/{id}',[AdminController::class, 'editlowongan']);
Route::put('/proseseditlowongan/{id}',[AdminController::class, 'proseseditlowongan']);
Route::post('/uploadlowongan',[AdminController::class, 'uploadlowongan']);
Route::get('/lihatuser',[AdminController::class, 'lihatuserlowongan']);
Route::get('/detailuser/{id}',[AdminController::class, 'detailuserlowongan']);
Route::get('/editstatus/{id}',[AdminController::class, 'editstatus']);
Route::put('/prosesstatus/{id}',[AdminController::class, 'prosesstatus']);
Route::post('/pilihlowongan/{id}',[UserController::class, 'uploaddatauser']);
Route::get('/lowonganuser/{id}',[UserController::class, 'lowonganbyid']);
Route::get('/kategorilowonganuser/{id}',[UserController::class, 'lowonganbyid']);
Route::get('/kategoriuser',[UserController::class, 'lihatkategori']);
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
// Rute untuk menampilkan halaman registrasi
Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('register');

// Rute untuk memproses registrasi
Route::post('/register', [AdminController::class, 'register']);