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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/calculate', [App\Http\Controllers\Calculate_Controller::class, 'calculate']);
Route::get('/cashview', [App\Http\Controllers\Calculate_Controller::class, 'cashview']);

Route::get('/home', [App\Http\Controllers\Calculate_Controller::class, 'index']);

Route::post('/phoneAddress', [App\Http\Controllers\Contacts_Controller::class, 'phoneAddress']);
Route::get('/phoneview', [App\Http\Controllers\Contacts_Controller::class, 'phoneview']);

Route::get('phonedetail/{contacts_id}', [App\Http\Controllers\Contacts_Controller::class, 'phonedetail']);
Route::post('phoneupdate', [App\Http\Controllers\Contacts_Controller::class, 'phoneupdate']);

Route::get('deletecontacts/{contacts_id}', [App\Http\Controllers\Contacts_Controller::class, 'delete_contacts']);


Route::get('compareview', [App\Http\Controllers\Shop_Controller::class, 'compareview']);
Route::post('compare', [App\Http\Controllers\Shop_Controller::class, 'compare']);
