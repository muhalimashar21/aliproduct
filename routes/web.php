<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\UploadController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', ProjectController::class);
Route::resource('numbers', NumberController::class);
Route::resource('products', ProductController::class);
Route::resource('productdetails', ProductDetailController::class);
Route::resource('home', ProjectController::class);


Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
Route::get('upload', [ProductController::class, 'upload'])->name('upload');
Route::post('upload/proses', [ProductController::class,'proses_upload'])->name('proses_upload');

Route::get('upload', [UploadController::class, 'upload'])->name('upload');
Route::post('upload/proses', [UploadController::class,'proses_upload'])->name('proses_upload');
Route::post('upload/hapus', [UploadController::class,'destroy'])->name('destroy');

// Route::put('/numbers/{id}/update', 'NumberController@update');


