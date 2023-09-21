<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sekolahController;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route ::get('/sekolahs', [sekolahController::class, 'index']) ->name('sekolahs.index');

Route ::get('/sekolahs/tambah', [sekolahController::class, 'tambah']) ->name('sekolahs.tambah');

Route ::post('/sekolahs', [sekolahController::class, 'simpan']) ->name('sekolahs.simpan');

Route ::get('/sekolahs/{id}/edit', [sekolahcontroller::class, 'edit']) ->name('sekolahs.edit');

Route ::put('/sekolahs/{id}', [sekolahcontroller::class, 'update']) ->name('sekolahs.update');

Route::delete('/sekolahs/{id}', [sekolahcontroller::class, 'destroy'])->name('sekolahs.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
