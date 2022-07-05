<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/addProduct', function () {return view('create');});
Route::post('/create',[ProductsController::class,'create'])->name('create');
Route::get('/view/{id}',[ProductsController::class,'view'])->name('view');
Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('edit');
Route::put('update-product/{id}', [ProductsController::class, 'update'])->name('update');
Route::post('/delete/{id}',[ProductsController::class,'delete'])->name('delete');
