<?php

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
// Do something in root
Route::get('/', function () {
    return view('welcome');
});

// call view in root
Route::get('/home', function () {
    return view('welcome');
});
// call controller in root
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
//
Route::get('/test',[\App\Http\Controllers\HomeController::class,'test'])->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//******************************* ADMIN panel ******************************************//
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin');

//******************************* ADMIN Category ******************************************//
Route::get('/admin/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
Route::get('/admin/category/store',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_store');

