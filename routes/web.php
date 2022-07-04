<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PembeliControllers;

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
Route::resource('transaksi', TransaksiControllers::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/trans', function () {
    return view('transaction');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/emplo', function () {
    return view('employee');
});
