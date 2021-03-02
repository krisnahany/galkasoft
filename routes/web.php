<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'login.index');
Route::view('/dashboard', 'dashboard.index');
Route::view('/laporan', 'laporan.index');

Route::view('/kas-dan-bank', 'kas_bank.index');
Route::view('/kas-dan-bank/edit', 'kas_bank.edit');
Route::view('/kas-dan-bank/peraturan-rekonsiliasi', 'kas_bank.create');
