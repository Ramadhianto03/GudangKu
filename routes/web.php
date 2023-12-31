<?php

use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InventoryController;



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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->middleware('guest');


Route::post('/register', [RegisterController::class, 'store']);

Route::get('/product', [ProductController::class, 'index'])->middleware('auth');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//KONSUMEN
Route::get('/konsumen', [KonsumenController::class, 'index'])->middleware('auth');
Route::get('/konsumen/tambahViewKonsumen', function () {
    return view('tambahViewKonsumen');
});
Route::post('/konsumen/tambah', [KonsumenController::class, 'create'])->middleware('auth');
Route::delete('/konsumen/hapus/{konsumen}',[KonsumenController::class, 'delete']);

// INVENTORY
Route::get('/inventory', [InventoryController::class, 'index'])->middleware('auth');
Route::get('/inventory/tambahViewInventory', function () {
    return view('tambahViewInventory');
});
Route::post('/inventory/tambah', [InventoryController::class, 'create'])->middleware('auth');
Route::delete('/inventory/hapus/{inventory}',[inventoryController::class, 'delete']);



