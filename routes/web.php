<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->name('dashboard');

Route::get('kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.lihat');

Route::get('kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('kendaraan/new', [KendaraanController::class, 'new'])->name('kendaraan.new');
Route::get('kendaraan/{m_kendaraan:id_kendaraan}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('kendaraan/{m_kendaraan}', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::delete('kendaraan/{m_kendaraan}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::view('about', 'about')->name('about');

//     Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

//     Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
//     Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
// });
