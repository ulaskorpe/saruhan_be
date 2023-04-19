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
Route::get('/example', function () {
    Return  view('hello');
});
Route::get('/',[\App\Http\Controllers\HomeController::class,'home'])->name('home');


Route::group(['middleware'=>\App\Http\Middleware\checkUser::class,'prefix'=>'users'],function (){

});


Route::group(['prefix'=>'admin' ],function (){
    Route::get('/login',[\App\Http\Controllers\AdminController::class,'login'])->name('admin.login');
    Route::post('/login',[\App\Http\Controllers\AdminController::class,'loginPost'])->name('admin.login-post');
    Route::group(['middleware'=>\App\Http\Middleware\checkAdmin::class],function (){
        Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
        Route::post('/logout',[\App\Http\Controllers\AdminController::class,'logout'])->name('logout');

    });

});

