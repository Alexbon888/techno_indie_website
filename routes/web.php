<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Guest
Route::get('/', [PemesananController::class, 'showStatistic'])->name('guest');

// Admin
Route::get('admin', function () {
    return view('auth_page.login_admin');
});

Route::get('dashboard', function () {
    return view('access_point.admin.dashboard');
});

Route::get('daftar_pemesanan', function () {
    return view('access_point.admin.daftar_pemesanan.index');
});

Route::get('tahap_pengerjaan', function () {
    return view('access_point.admin.tahap_pengerjaan.index');
});

Route::get('pemesanan_selesai', function () {
    return view('access_point.admin.pemesanan_selesai.index');
});

Route::get('riwayat_pemesanan', function () {
    return view('access_point.admin.riwayat_pemesanan.index');
});

Route::get('daftar_pemesanan', [PemesananController::class, 'daftar_pemesanan'])->name('daftar_pemesanan.index');
Route::get('daftar_pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('daftar_pemesanan.edit');
Route::get('daftar_pemesanan/{id}', [PemesananController::class, 'show'])->name('daftar_pemesanan.show');
Route::put('daftar_pemesanan/{id}', [PemesananController::class, 'update'])->name('daftar_pemesanan.update');
Route::patch('daftar_pemesanan/{id}/reject', [PemesananController::class, 'reject'])->name('daftar_pemesanan.reject');
Route::patch('move-to-progress/{id}', [PemesananController::class, 'moveToProgress'])->name('move_to_progress');
Route::get('tahap_pengerjaan', [PemesananController::class, 'tahap_pengerjaan'])->name('tahap_pengerjaan.index');
Route::patch('move-to-done/{id}', [PemesananController::class, 'moveToDone'])->name('move_to_done');
Route::get('pemesanan_selesai', [PemesananController::class, 'pemesanan_selesai'])->name('pemesanan_selesai.index');
Route::get('riwayat_pemesanan', [PemesananController::class, 'riwayat_pemesanan'])->name('riwayat_pemesanan.index');
Route::delete('riwayat_pemesanan/{id}', [PemesananController::class, 'destroy'])->name('riwayat_pemesanan.destroy');

// User
Route::middleware(['auth'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('history', [PemesananController::class, 'history'])->name('history.index');
    Route::get('history/{id}', [PemesananController::class, 'show_history'])->name('history.show');
    Route::get('order', [PemesananController::class, 'create'])->name('order.create');
    Route::get('verify', [VerifikasiController::class, 'create'])->name('verify.create');
    Route::get('verify/{order_id}/detail', [VerifikasiController::class, 'show'])->name('verify.show');
    Route::get('user', [PemesananController::class, 'userStatistics'])->name('user');
    Route::resource('pemesanan', App\Http\Controllers\PemesananController::class);
    Route::resource('verifikasi', App\Http\Controllers\VerifikasiController::class);
    Route::post('pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');        
});

// Authentication
Route::get('sesi', [AuthController::class, 'index'])->name('auth');
Route::post('sesi', [AuthController::class, 'login']);
Route::get('login', function () {
    return redirect()->route('auth');
})->name('login');
Route::get('reg', [AuthController::class, 'create'])->name('registrasi');
Route::post('reg', [AuthController::class, 'register']);
Route::get('verify/{verify_key}', [AuthController::class, 'verify']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Calendar
Route::get('calendar', [PemesananController::class, 'calendar'])->name('calendar');
Route::get('calendar/events', [PemesananController::class, 'getCalendarEvents'])->name('calendar.events');

?>