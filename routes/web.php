<?php

use App\Http\Controllers\TransaksiControllers;

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

Route::get('/home', function () {
    return view('main');
});

Route::resource('transaksi', TransaksiControllers::class);

Route::post('store', [TransaksiControllers::class, 'store'])->name('store');
Route::delete('delete/{transaksi:id}', [TransaksiControllers::class, 'delete'])->name('delete');
Route::get('edit/{transaksi:id}', [TransaksiControllers::class, 'edit'])->name('edit');
Route::put('update/{transaksi:id}', [TransaksiControllers::class, 'update'])->name('update');

/*
Route::get('/trans', function () {
    return view('transaksi.transaction');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/emplo', function () {
    return view('employee');
});
 */

/* Route::resource('trans', 'TransaksiControllers', [
    'only' => ['index']
]); */

/* Route::get('/edit', function () {
    return view('transaksi.edit_transaction');
});
 */
