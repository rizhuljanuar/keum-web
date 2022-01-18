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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [\App\Http\Controllers\SuratMasukController::class, 'index']);
Route::post('/surat-masuk-keum', [\App\Http\Controllers\SuratMasukController::class, 'getList']);
Route::post('/surat-masuk-keum/pdf', [\App\Http\Controllers\SuratMasukController::class, 'pdf']);
