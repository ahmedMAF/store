<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashbardController;
use App\Http\Controllers\catogryController;





//dashboar Routes
Route::get('/dashboard', [DashbardController::class , "dashboard"]);
Route::get('/products', [ProductController::class , "indexProduct"]);
Route::get('/createProduct', [ProductController::class , "createPage"]);
Route::post('/createProduct', [ProductController::class , "createProduct"]);
Route::get('/deleteProduct/{id}', [ProductController::class , "deleteProduct"]);
Route::get('/updateProduct{id}', [ProductController::class , "updateProductPage"]);
Route::post('/updateProduct', [ProductController::class , "updateProduct"]);
Route::get('/catogry', [catogryController::class , "indexCatogry"]);
Route::get('/createCatogry', [catogryController::class , "createPage"]);
Route::post('/createCatogry', [catogryController::class , "createCatogry"]);
Route::get('/deleteCatogry/{id}', [catogryController::class , "deleteCatogry"]);
Route::get('/updateCatogry{id}', [catogryController::class , "updateCatogryPage"]);
Route::post('/updateCatogry', [catogryController::class , "updateCatogry"]);

//front page Routes
Route::get('/', function () {
    return view("Home/index");

});


