<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::view('/', 'home')->middleware('auth');

Route::view('home', 'home')->middleware('auth');

Route::get('logout', 'LoginController@logout');

Route::get('/readme', function () {
    return view('appReadme');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::put('/donantes/{donante}', 'DonantesController@update')->name('updateDonante');
/*Route::put('/donantes/{donante}', 'DonantesController@updateEditor')->name('updateDonanteEditor');*/

Route::resource('/donantes', 'DonantesController');


Route::get('/donantes/create', 'DonantesController@create')->name('createDonante');

Route::post('/donantes/create', 'DonantesController@saveDonante')->name('saveDonante');

