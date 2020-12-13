<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\birlestirme;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjeController;
use App\Http\Controllers\SliderController;
use App\Models\product;
use APP\Models\User;
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

/*Route::get('/', function () {
    //return view('welcome');
    return view('layouts/master');
});*/
/*Route::get('/newpage', function () {
    return view('newpage');
});*/
Route::get('/', [ProjeController::class, 'index']);

/*Route::get('/newpage','HomeController@showVisible');*/
/*Route::get('/newpage',[HomeController::class,'showVisible']);

Route::get('/urunler',[HomeController::class,'urunler']);
Route::get('/user_products',[HomeController::class,'user_product']);
Route::get('/create-product',[ProductController::class,'create'])->name('product.create');
Route::post('/save-product',[ProductController::class,'store'])->name('product.save');
Route::get('/show-product',[ProductController::class,'index']);*/

Route::get('/export-products', [ProductController::class, 'export'])->name('product.export');

Route::get('/show-sliders', [SliderController::class, 'index'])->name('slider.index');
Route::get('/delete-slider/{id}', [SliderController::class, 'destroy'])
    ->name('delete.slider')->where(array('id' => '[0-9]+'));

Route::get('/upload-categories', [CategoryController::class, 'upload'])->name('category.upload');
Route::post('/import-categories', [CategoryController::class, 'import'])->name('category.import');
