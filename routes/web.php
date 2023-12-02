<?php

use App\Http\Controllers\BudayaController;
use App\Http\Controllers\BudayaMasakanController;
use App\Http\Controllers\BudayaTariController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MasakanController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\SubBudayaController;
use App\Http\Controllers\TariController;
use App\Models\Tari;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view("admin.dashboard");
    });
    Route::resource('province', ProvinceController::class);
    Route::resource('budaya', BudayaController::class);
    Route::resource('masakan', MasakanController::class);
    Route::resource('musik', MusikController::class);
    Route::resource('pakaian', PakaianController::class);
    Route::resource('rumah', RumahController::class);
    Route::resource('tari', TariController::class);
});
Route::resource('provinsi', ProvinsiController::class);
Route::resource('detail-tari', BudayaTariController::class);
Route::resource('detail-masakan', BudayaMasakanController::class);
Route::post('/comment', [CommentController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
