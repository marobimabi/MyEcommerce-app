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

Route::prefix('admin')->name('admin.')->group(function (){
//******************************* ADMIN panel ******************************************//
Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('index');
        Route::prefix('/category')->name('category.')->controller(\App\Http\Controllers\Admin\CategoryController::class)->group(function () {
//******************************* ADMIN Category ******************************************//
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('destroy');

    });
});
