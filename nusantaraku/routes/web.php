<?php

use App\Models\Tari;
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
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $tarian = Tari::firstWhere('id', 1);
        $province = $tarian->province;
        $budaya = $tarian->budaya;
        return view("admin.dashboard", [
            'tarian' => $tarian,
            'province' => $province,
            'budaya' => $budaya
        ]);
    });
});
