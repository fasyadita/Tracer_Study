<?php
use Illuminate\Support\Facades\Route;
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

// Group all admin routes under the 'admin' prefix with authentication middleware
Route::prefix('admin')->middleware('auth:admin')->group(function () {

    // Route untuk admin template, bisa digunakan untuk menu utama admin
    Route::get('/', function () {
        return view('admin.template');
    })->name('admin.template');

    // Route untuk halaman dashboard admin setelah login berhasil
    Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('generatelulusan',[AdminAuthController::class, 'generatelulusan'])->name('admin.generatelulusan');
    Route::get('generatepengguna',[AdminAuthController::class, 'generatepengguna'])->name('admin.generatepengguna');
    Route::get('tambahform',[AdminAuthController::class, 'tambahform'])->name('admin.tambahform');
    Route::get('rekaplulusan',[AdminAuthController::class, 'rekaplulusan'])->name('admin.rekaplulusan');
});

// Route for displaying the login form (outside the 'admin' middleware group)
Route::get('admin/login', function () {
    return view('admin.login');  // Ensure you have a login view at resources/views/admin/login.blade.php
})->name('admin.login');

// Route to handle admin login (POST)
Route::post('admin/login', [AdminAuthController::class, 'login']);

// Route to display pie chart (Outside the admin group, no middleware required)
Route::get('/pie', function () {
    return view('charts.pie');
});



Route::get('/admin/pengguna/generate', function () {
    return view('admin.generatepengguna');
});

Route::get('/admin/pengguna/tambah-form', function () {
    return view('admin.tambahform');
});

Route::get('/admin/laporan/rekaplulusan', function () {
    return view('admin.rekaplulusan');
});

Route::get('/admin/employers', function() {
    return view('admin.employers');
});

Route::get('/admin/report/survey-kepuasan', function() {
    return view('admin.rekapSurvei');
});
