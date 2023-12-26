<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::resource('/profile', App\Http\Controllers\ProfileController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user', 'admin'])->group(function () {
    Route::resource('/product', App\Http\Controllers\ProductController::class);
    Route::get('admin', function () {
        return 'admin page';
    });
});

Route::middleware(['auth', 'user', 'admin'])->group(function () {
    Route::resource('/categoryproduct', App\Http\Controllers\CategoryProductController::class);
    Route::get('admin', function () {
        return 'admin page';
    });
});


// Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
// Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
// Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
// Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
// Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
// Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
// Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.delete');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', 'HomeController@index');
// Route::get('/produk', 'App\Http\Controllers\ProdukController@index');

// Route::resource('produk', ProdukController::class, ['except' => ['create', 'update', 'delete', 'show']]);

// Route::get('/profile', function () {
//     $nama = "Sutia";
//     return view('profile', ['nama' => $nama]); //compact('nama'));
// });
