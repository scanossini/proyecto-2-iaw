<?php

use App\Http\Controllers\DonantesController;
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

Route::view('/spa', 'spa')->middleware('auth');

Route::get('logout', 'LoginController@logout');

Route::get('/readme', function () {
    return view('appReadme');
});

Route::get('/API','DonantesController@list');

Route::get('/API/{donante}','DonantesController@get');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::resource('/donantes', 'DonantesController')
->middleware('auth');

Route::get('/donantes/create', 'DonantesController@create')->name('createDonante')
->middleware('auth');

Route::post('/donantes/create', 'DonantesController@saveDonante')->name('saveDonante')
->middleware('auth');

Route::put('/donantes/{donante}', 'DonantesController@update')->name('updateDonante')
->middleware('auth');

Route::get('/donantes/{donante}/contactos', 'DonantesController@getContactos')->name('getContactos')
->middleware('auth');

Route::get('/donantes/{donante}/contactos/create', 'ContactoController@create')->name('createContacto')
->middleware('auth');

Route::post('/donantes/{donante}/contactos/create', 'ContactoController@saveContacto')->name('saveContacto')
->middleware('auth');

Route::get('/donantes/{donante}/contactos/{contacto}', 'ContactoController@edit')->name('editContacto')
->middleware('auth');

Route::put('/donantes/{donante}/contactos/{contacto}', 'ContactoController@update')->name('updateContacto')
->middleware('auth');

Route::delete('/donantes/{donante}/contactos/{contacto}', 'ContactoController@destroy')->name('destroyContacto')
->middleware('auth');