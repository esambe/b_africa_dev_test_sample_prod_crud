<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [MainController::class, 'index'])->name('profile');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

Route::post('/dashboard/add-product', [ProductsController::class, 'store'])->name('save');
Route::post('/dashboard/update-product/{id}', [ProductsController::class, 'update'])->name('update.prod');
Route::get('/dashboard/delete-product/{id}', [ProductsController::class, 'destroy'])->name('delete.prod');
