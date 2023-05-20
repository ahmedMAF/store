<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashbardController;
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

Route::get('/', [DashbardController::class , "dashboard"]);
Route::get('/products', [ProductController::class , "indexProduct"]);
Route::get('/createProduct', [ProductController::class , "createPage"]);
Route::post('/createProduct', [ProductController::class , "createProduct"]);
