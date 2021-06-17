<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplysController;

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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/home', [ApplysController::class, 'store']);
Route::get('/form-ajukan', [ApplysController::class, 'index']);

Route::get('/form-lapor', [HomeController::class, 'lapor']);
Route::get('/form-pengaduan', [HomeController::class, 'pengaduan']);
Route::get('/form-berlangganan', [HomeController::class, 'berlangganan']);


