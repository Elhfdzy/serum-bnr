<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

});

Route::get('/konsultasi', [KonsultasiController::class, 'create'])->name('konsultasi.form');
Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');
Route::get('/sponsor', [SponsorController::class, 'create'])->name('sponsor.form');
Route::post('/sponsor', [SponsorController::class, 'store'])->name('sponsor.store');

Route::get('/l-konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
Route::get('/l-sponsor', [SponsorController::class, 'index'])->name('sponsor.index');