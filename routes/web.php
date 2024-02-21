<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //kendaraan
    Route::get('/kendaraan/crud', [KendaraanController::class, 'index'])->name('kendaraan.crud');
    Route::put('/kendaraan/update{$id}',[KendaraanController::class, 'update'])->name('kendaraan.update');
    Route::post('/kendaraan/store',[KendaraanController::class, 'store'])->name('kendaraan.store');
    Route::delete('/kendaraan/delete{id}',[KendaraanController::class,'destroy'])->name('kendaraan.destroy');
    Route::get('/kendaraan/edit{id}',[KendaraanController::class,'edit'])->name('kendaraan.edit');
    Route::get('/kendaraan/create',[KendaraanController::class, 'create'])->name('kendaraan.create');
});

require __DIR__ . '/auth.php';
