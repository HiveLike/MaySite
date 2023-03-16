<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
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

Route::controller(IndexController::class)->group(function (){
    Route::get('/','home')->name('home');
    Route::get('/signup','signup')->name('signup');
    Route::get('/signin','signin')->name('signin');
    Route::get('/admin','admin')->name('admin');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function (){
   Route::post('signup','signup')->name('signup');
   Route::post('signin','signin')->name('signin');

   Route::get('logout','logout')->name('logout');
});

Route::controller(ProductController::class)->prefix('/product')->as('product.')->group(function (){
    Route::middleware(['auth', AdminMiddleware::class])->group(function (){
        Route::get ('/{product:id}/editForm','editForm')->name('editForm');
        Route::post ('/{product:id}/edit','edit')->name('edit');

        Route::get ('/createForm','createForm')->name('createForm');
        Route::post ('/create','create')->name('create');

        Route::get ('/{product:id}/delete','delete')->name('delete');
    });

});
