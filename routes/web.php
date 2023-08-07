<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang"
    ]);
});



Route::get('/admin', [LoginController::class, 'index']);
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/hasil', [HasilController::class, 'index']);

Route::get('/daftar', [RegisterController::class, 'index']);
Route::post('/daftar', [DashboardController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/data', DashboardController::class)->middleware('auth');
Route::post('/dashboard/data/{id}/edit', [DashboardController::class, 'edit']);
Route::put('/dashboard/{id}', [DashboardController::class, 'update']);