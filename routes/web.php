<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TokoController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Produk
    Route::get('/halaman-produk',[ProdukController::class, 'index'])->name('produk.show');
    Route::get('/halaman-produk/add',[ProdukController::class, 'add'])->name('produk.add');
    Route::post('/halaman-produk/store',[ProdukController::class, 'store'])->name('produk.store');
    Route::get('/halaman-produk/edit/{id}',[ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/halaman-produk/update/{id}',[ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/halaman-produk/delete/{id}',[ProdukController::class, 'delete'])->name('produk.delete');

    // Toko
    Route::get('/halaman-toko',[TokoController::class, 'index'])->name('toko.show');
    Route::get('/halaman-toko/add',[TokoController::class, 'add'])->name('toko.add');
    Route::post('/halaman-toko/store',[TokoController::class, 'store'])->name('toko.store');
    Route::get('/halaman-toko/edit/{id}',[TokoController::class, 'edit'])->name('toko.edit');
    Route::put('/halaman-toko/update/{id}',[TokoController::class, 'update'])->name('toko.update');
    Route::delete('/halaman-toko/delete/{id}',[TokoController::class, 'delete'])->name('toko.delete');
});

require __DIR__.'/auth.php';
