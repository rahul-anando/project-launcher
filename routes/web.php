<?php

use App\Http\Controllers\{TransaksiController, LoginController};
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

/* Route::get('/home', function () {
    return view('main');
})->name('home'); */

Route::get('home', [TransaksiController::class, 'home'])->name('home');

/*
Route::resource('transaksi', TransaksiControllers::class); */
Route::get('transaksi', [TransaksiController::class, 'index'])->name('index');

Route::post('store', [TransaksiController::class, 'store'])->name('store');
Route::delete('delete/{transaksi:id}', [TransaksiController::class, 'delete'])->name('delete');
Route::get('edit/{transaksi:id}', [TransaksiController::class, 'edit'])->name('edit');
Route::put('update/{transaksi:id}', [TransaksiController::class, 'update'])->name('update');

Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::middleware('auth')->get('/', function () {
    return "Berhasil Login";
})->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


/* Route::get('/user', function () {
    return view('user');
}); */

Route::get('/emplo', function () {
    return view('petugas');
});


/* Route::resource('trans', 'TransaksiControllers', [
    'only' => ['index']
]);
 */
