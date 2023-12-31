<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\User\DashboardController as UserDashboard;

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
    return redirect(route('login'));
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function() {

    // Dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // User dashboard
    Route::prefix("user/dashboard")->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function() {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');

        Route::get('penitipan', [PenitipanController::class, 'index'])->name('penitipan.lihat');
        Route::get('penitipan/titipkan', [PenitipanController::class, 'create'])->name('penitipan.create');
        Route::post('penitipan/new', [PenitipanController::class, 'new'])->name('penitipan.new');
        Route::patch('penitipan/{id_titip}', [PenitipanController::class, 'tarik'])->name('penitipan.tarik');

        Route::get('penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.lihat');
        Route::patch('penyewaan/{id_kendaraan}', [PenyewaanController::class, 'sewa'])->name('penyewaan.sewa');
    });

    // Admin dashboard
    Route::prefix("admin/dashboard")->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function() {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        Route::get('kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.lihat');
        Route::get('kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('kendaraan/new', [KendaraanController::class, 'new'])->name('kendaraan.new');
        Route::get('kendaraan/{m_kendaraan:id_kendaraan}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::put('kendaraan/{m_kendaraan}', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::delete('kendaraan/{m_kendaraan}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
