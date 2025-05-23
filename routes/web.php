<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AdminAuthController;

/*
|----------------------------------------------------------------------  
| Web Routes  
|----------------------------------------------------------------------  
|
| Here is where you can register web routes for your application.  
| These routes are loaded by the RouteServiceProvider and all of them  
| will be assigned to the "web" middleware group. Make something great!  
|
*/

Route::get('/', function () {
    return view('home');
});

// Group all admin routes under the 'admin' prefix
Route::prefix('admin')->middleware('auth:admin')->group(function () {

    // Route untuk menangani proses login admin (POST)
    Route::post('login', [AdminAuthController::class, 'login']);

    // Route untuk admin template, bisa digunakan untuk menu utama admin
    Route::get('/', function () {
        return view('admin.template');
    })->name('admin.template');

    // Route untuk halaman dashboard admin setelah login berhasil
    Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
});

// Route untuk menampilkan pie chart (Outside the admin group, no middleware required)
Route::get('/pie', function () {
    return view('charts.pie');
});

