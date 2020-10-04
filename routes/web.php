<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store');
/*
Route::post('/contacts/store', function () {
    return "<h1>Contacts store</h1>";
});
*/
Route::get('/contacts/create', function () {
    return "<h1>Contacts create</h1>";
});
Route::get('/contacts', function () {
    return "<h1>Contacts</h1>";
});
Route::get('/', function () {
    return view('welcome');
});
