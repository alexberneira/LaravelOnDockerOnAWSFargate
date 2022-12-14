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

Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

Route::get('/user', [\App\Http\Controllers\InsertUsers::class, 'insert']);

Route::get('/readexcel', [\App\Http\Controllers\ReadDataUsersFromFile::class, 'ReadDatafromexcel']);

Route::get('/api', [\App\Http\Controllers\ApiCreateUser::class,'GetApiData']);

