<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Scheme;
use Illuminate\Support\Facades\Blueprint;
use App\Http\Controllers\CategoryController;


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');



Route::group(['prefix'=>'categories'], function(){
    Route::get('/', [CategoryController::class, 'Catindex'])->name('categories.index');
    Route::get('add/', [CategoryController::class, 'getAddCategory']);
    Route::post('add/', [CategoryController::class, 'postAddCategory'])->name('categories.add');
    Route::get('edit/{id}',[CategoryController::class,'getEditCategory']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCategory'])->name('categories.edit');
    Route::get('delete/{id}',[CategoryController::class,'deleteCategory']);
});

Route::group(['prefix'=>'products'], function(){
    Route::get('/', [ProductController::class, 'prodindex'])->name('products.index');
    Route::get('add/', [ProductController::class, 'getAddProduct']);
    Route::post('add/', [ProductController::class, 'postAddProduct'])->name('products.add');
    Route::get('edit/{id}', [ProductController::class, 'getEditProduct']);
    Route::post('edit/{id}', [ProductController::class, 'postEditProduct'])->name('products.edit');
    Route::get('delete/{id}', [ProductController::class, 'deleteProduct']);
});