<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UserController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('user', UserController::class);
});


Route::get('/', [PengunjungController::class, 'index']);
Route::get('/tentang', [PengunjungController::class, 'tentang']);
Route::get('/layanan', [PengunjungController::class, 'layanan']);
Route::get('/dokter', [PengunjungController::class, 'dokter']);
Route::get('/kontak', [PengunjungController::class, 'kontak']);



Route::get('/admin', [AdminController::class, 'index']);
