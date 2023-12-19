<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\summeryController;
use App\Http\Controllers\userController;
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

// Route::get('/', function () {return view('pages.home');});
Route::get('/', [summeryController::class,'saleSummery'])->name('home');
Route::get('/today_summery', [summeryController::class,'today'])->name('summery.today');
Route::get('/yesterday_summery', [summeryController::class,'yesterday'])->name('summery.yesterday');
Route::get('/thismonth_summery', [summeryController::class,'thisMonth'])->name('summery.thismonth');
Route::get('/lastmonth_summery', [summeryController::class,'Lastmonth'])->name('summery.lastmonth');
Route::get('/add_product',[productController::class,"add"])->name('product.add');
Route::post('/add_product',[productController::class,"store"])->name('product.store');
Route::get('/products',[productController::class,"allProduct"])->name('product.all');
Route::get("/product_details/{id}",[productController::class,"show"])->name("product.show");
Route::delete("/product_details/{id}",[productController::class,"destroy"])->name("product.delete");
Route::get("/update/{id}",[productController::class,"updateForm"])->name("product.update");
Route::put("/update/{id}",[productController::class,"update"])->name("product.update");





// Route::get('/q', [userController::class,'userQuery']);

// Route::get('/g', [userController::class,'groupQuery']);


