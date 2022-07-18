<?php

use App\Http\Controllers\{TransaksiController, LoginController, MembershipController, PetugasController};
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


//Transaksi
Route::post('store', [TransaksiController::class, 'store'])->name('store');
Route::delete('delete/{transaksi:id}', [TransaksiController::class, 'delete'])->name('delete');
Route::get('edit/{transaksi:id}', [TransaksiController::class, 'edit'])->name('edit');
Route::put('update/{transaksi:id}', [TransaksiController::class, 'update'])->name('update');

//Member
Route::get('/member.create', [MembershipController::class, 'tambah']);
Route::post('add', [MembershipController::class, 'add'])->name('add');
Route::delete('hapus/{member:id}', [MembershipController::class, 'hapus'])->name('hapus');
Route::get('ubah/{member:id}', [MembershipController::class, 'ubah'])->name('ubah');
Route::put('updated/{member:id}', [MembershipController::class, 'updated'])->name('updated');

//Petugas
Route::get('/petugas.create', [PetugasController::class, 'baru']);
Route::post('storea', [PetugasController::class, 'storea'])->name('storea');
Route::delete('apus/{petugas:id}', [PetugasController::class, 'apus'])->name('apus');
Route::get('edits/{petugas:id}', [PetugasController::class, 'edits'])->name('edits');
Route::put('updates/{petugas:id}', [PetugasController::class, 'updates'])->name('updates');


//Login
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::middleware('auth')->get('/', function () {
    return "Berhasil Login";
})->name('home');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/* Login Multilevel
Route::middleware(['auth', 'Ceklevel:admin'])->group(function () { */
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('index');
    Route::get('member', [MembershipController::class, 'member'])->name('member');
    Route::get('petugas', [PetugasController::class, 'petugas'])->name('petugas');
/* });
Route::middleware(['auth', 'Ceklevel:user'])->group(function () {
});
  */

// Route::get('/member', function () {
//     return view('member.membership');
// });

// Route::get('/emplo', function () {
//     return view('petugas');
// });



/* Route::resource('trans', 'TransaksiControllers', [
    'only' => ['index']
]);
 */
