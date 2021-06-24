<?php

use Illuminate\Support\Facades\Route;
use Goutte\Client;


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

//Route::get('/products/{id}/details', 'ProductsController@show');
//Route::get('/products/{id}/domain', 'ProductsController@get_domain');


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('dashboard', 'UsersController@index')->name('dashboard');
Route::get('/profile/{user}/edit','ProfileController@edit')->name('edit_profile');
Route::put('/profile/{user}/edit','ProfileController@update')->name('profile.update');

Route::get('/change-password','ProfileController@change_password')->name('change_password');
Route::post('/update-password','ProfileController@update_password')->name('update_password');
Route::resource('websites', 'WebsitesController');
Route::namespace('Admin')->prefix('admin')->name('admin.')
    ->middleware('admin')
    ->group(function () {
        Route::resource('panel/', 'AdminController');
    });
