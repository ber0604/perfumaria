<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PerfumeController;

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
})->name('home');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categoria-create');
Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categoria-store');
Route::get('/categorias/show/{id}', [CategoriaController::class, 'show'])->name('categoria-show');
Route::post('/categorias/update', [CategoriaController::class, 'update'])->name('categoria-update');
Route::get('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categoria-destroy');

Route::get('/perfumes', [PerfumeController::class, 'index'])->name('perfumes');
Route::get('/perfumes/create', [PerfumeController::class, 'create'])->name('perfume-create');
Route::post('/perfumes/store', [PerfumeController::class, 'store'])->name('perfume-store');
Route::get('/perfumes/show/{id}', [PerfumeController::class, 'show'])->name('perfume-show');
Route::post('/perfumes/update', [PerfumeController::class, 'update'])->name('perfume-update');
Route::get('/perfumes/{id}', [PerfumeController::class, 'destroy'])->name('perfume-destroy');

Route::get('/lucro', [PerfumeController::class, 'lucro'])->name('lucro');


