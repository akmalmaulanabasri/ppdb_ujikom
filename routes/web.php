<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [AuthController::class, 'register'])->name('dashboard.register');
Route::post('/register', [AuthController::class, 'store'])->name('dashboard.register.store');
Route::get('/pdf/view/{id}', [PdfController::class, 'pdfView'])->name('dashboard.pdf.view');
Route::get('/pdf/download/{id}', [PdfController::class, 'pdf'])->name('dashboard.pdf.print');
Route::get('/pdf/save/{id}', [PdfController::class, 'download'])->name('dashboard.pdf.download');
Route::get('/pdf/{file}', [PdfController::class, 'file'])->name('pdf');
route::get('redirect-after-download/{id}', [PdfController::class, 'download'])->name('rad');

route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->middleware('auth')->name('logout');
route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
route::post('/login', [AuthController::class, 'loginAuth'])->middleware('guest')->name('login.auth');

route::get('/student/dashboard', [StudentController::class, 'index'])->middleware('auth', 'Role:calon_siswa')->name('calon_siswa.dashboard');
route::get('/student/payment', [StudentController::class, 'payment'])->middleware('auth', 'Role:calon_siswa')->name('calon_siswa.payment');
route::post('/student/payment', [StudentController::class, 'payment_upload'])->middleware('auth', 'Role:calon_siswa')->name('calon_siswa.payment.upload');

route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'Role:admin')->name('admin.dashboard');
route::get('/admin/calon-siswa', [AdminController::class, 'calon_siswa'])->middleware('auth', 'Role:admin')->name('admin.calon_siswa');
route::get('/admin/calon-siswa/{user_id}', [AdminController::class, 'approvePayment'])->middleware('auth', 'Role:admin')->name('admin.transaksi.approve');
route::get('/admin/calon-siswa/approve/{user_id}', [AdminController::class, 'declinePayment'])->middleware('auth', 'Role:admin')->name('admin.transaksi.decline');



Route::get('/smp', function () {
        $p = Http::get('https://akmalweb.my.id/api/daftar_smp.php');
    dd($p->json());
});

Route::get('/buat-admin', function(){
    User::create([
        'name' => 'Admin',
        'email' => 'admin',
        'user_id' => 'admin',
        'password' => bcrypt('admin'),
        'role' => 'admin',
    ]);
});