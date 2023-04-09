<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\HomeController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/faq', function () {
    return view('faq');
})->name("faq");
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/checkout', function () {
    return view('pesan.check-out');
})->name('checkout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('pesan/{id}', [App\Http\Controllers\PesananController::class, 'index'])
    ->name('pesan.index');
Route::post('pesan/{id}', [App\Http\Controllers\PesananController::class, 'pesan'])
    ->name('pesan.pesan');
Route::get('checkout', [App\Http\Controllers\PesananController::class, 'check_out']);
Route::delete('checkout/{id}', [App\Http\Controllers\PesananController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesananController::class, 'konfirmasi'])
    ->name('konfirmasi');


Route::get('/tambah', function () {
    return view('tambah');
})->middleware(['auth', 'verified'])->name('dashboard')->name('tambah');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history');
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail'])->name('detail');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/dashboard/search',[App\Http\Controllers\DashboardController::class, 'search']);

require __DIR__ . '/auth.php';
