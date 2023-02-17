<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Models\Mahasiswa;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create'])->middleware('is_admin');
Route::post('/store', [MahasiswaController::class, 'store'])->middleware('is_admin');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->middleware('is_admin');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->middleware('is_admin');
Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->middleware('is_admin');