<?php

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

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::post('subscriber', [App\Http\Controllers\SubscriberController::class, 'store'])->name('subscriber.store');
    Auth::routes();

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['as'=>'admin.','prefix'=>'admin',/*'namespace'=>'Admin',*/'middleware'=>['auth','admin']], function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('tag', App\Http\Controllers\Admin\TagController::class);
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', App\Http\Controllers\Admin\PostController::class);
    Route::get('pending/post', [App\Http\Controllers\Admin\PostController::class,'pending'])->name('post.pending');
    Route::put('/post/{id}/approve', [App\Http\Controllers\Admin\PostController::class,'approval'])->name('post.approve');
    });


    Route::group(['as'=>'author.','prefix'=>'author',/*'namespace'=>'Author',*/'middleware'=>['auth','author']], function(){
    Route::get('dashboard', [App\Http\Controllers\Author\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('post', App\Http\Controllers\Author\PostController::class);
    });


