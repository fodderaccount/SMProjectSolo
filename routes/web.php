<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blueprint;
use Illuminate\Support\Facades\Scheme;


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

});