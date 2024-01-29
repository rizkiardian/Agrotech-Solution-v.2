<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DeteksiHamaController;
use App\Http\Controllers\PerencanaanController;
use App\Http\Controllers\KelolaTanamanController;

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

Route::get('/', [MenuController::class, 'index'])->name('beranda');
Route::get('/chatbot', [MenuController::class, 'chatbot'])->name('chatbot');
Route::get('/login', [AutentikasiController::class, 'login'])->name('login');
Route::post('/login_proses', [AutentikasiController::class, 'login_proses']);
Route::get('/register', [AutentikasiController::class, 'register'])->name('register');
Route::post('/register_proses', [AutentikasiController::class, 'register_proses']);

Route::get('/forgot-password', [AutentikasiController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [AutentikasiController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AutentikasiController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AutentikasiController::class, 'reset'])->name('password.update');

Route::get('/tambah-tanaman', [KelolaTanamanController::class, 'tambah'])->name('tanaman.tambah');
Route::get('/tambah-tanaman/detail-tahapan', [KelolaTanamanController::class, 'cobatahapan'])->name('tanaman.tambah_detatil_tahapannnnn');
// Route::post('/tambahtanamanproses', [KelolaTanamanController::class, 'tambah_proses']);

Route::get('/tambah-tahapan', [KelolaTanamanController::class, 'tambah_tahapan'])->name('tanaman.tambah_tahapan');
Route::post('/tambah-tahapan-proses', [KelolaTanamanController::class, 'tahapan_proses']);
Route::get('/tambah-detail_tahapan', [KelolaTanamanController::class, 'tambah_detail_tahapan'])->name('tanaman.tambah_detail_tahapan');
Route::post('/tambah-detail_tahapan-proses', [KelolaTanamanController::class, 'detail_tahapan_proses']);

Route::get('/perhitungan-pupuk', [PerencanaanController::class, 'index'])->name('perhitungan_pupuk');
Route::post('/hasil-pupuk', [PerencanaanController::class, 'hasil_pupuk']);

Route::get('/tanaman', [TanamanController::class, 'index'])->name('tanaman');
Route::get('/tanaman/budidaya', [TanamanController::class, 'budidaya'])->name('budidaya');
Route::get('/tanaman/tahapan', [TanamanController::class, 'tahapan'])->name('tahapan');

Route::get('/deteksi-hama', [DeteksiHamaController::class, 'index'])->name('deteksi_hama');
Route::get('/hasil-deteksi', [DeteksiHamaController::class, 'hasil'])->name('hasil_deteksi');

Route::get('/dashboard-user', [UserController::class, 'index'])->name('user.dashboard');
