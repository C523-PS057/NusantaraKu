<?php

use App\Http\Controllers\AllAlatMusikController;
use App\Http\Controllers\AllMasakanKhasController;
use App\Http\Controllers\AllPakaianAdatController;
use App\Http\Controllers\AllRumahAdatController;
use App\Http\Controllers\AllTariController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\BudayaMasakanController;
use App\Http\Controllers\BudayaMusikController;
use App\Http\Controllers\BudayaPakaianController;
use App\Http\Controllers\BudayaRumahAdatController;
use App\Http\Controllers\BudayaTariController;
use App\Http\Controllers\MasakanController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\SemuaBudayaController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TariController;
use App\Http\Controllers\UserController;
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
Route::resource('detail-rumah', BudayaRumahAdatController::class);
Route::resource('detail-pakaian', BudayaPakaianController::class);
Route::resource('detail-musik', BudayaMusikController::class);

Route::resource('tari-tradisional', AllTariController::class);
Route::resource('rumah-adat', AllRumahAdatController::class);
Route::resource('pakaian-adat', AllPakaianAdatController::class);
Route::resource('alat-musik', AllAlatMusikController::class);
Route::resource('masakan-khas', AllMasakanKhasController::class);
Route::resource('semua-budaya', SemuaBudayaController::class);

Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');

Route::resource('user-settings', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
