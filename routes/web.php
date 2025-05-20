<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

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

Route::get('/homepage', function () {
    return view('home');
});

// Group route untuk admin
Route::get('/admin', function () {
    return view('admin.template');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/pie', function () {
    return view('charts.pie');
});
