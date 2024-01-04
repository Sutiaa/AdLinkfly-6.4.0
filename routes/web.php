<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/product_vue', function () {
    return view('product_page');
});

Route::get('/{pathMatch}', function () {
    return view('product_page');
})->where('pathMatch', ".*");



// Route::get('/user', [UserController::class, 'index']); // Perubahan: Menggunakan UserController dan method index
// Route::get('/product', [ProductController::class, 'index']); // Perubahan: Menggunakan ProdukController dan method index
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/users', 'App\Http\Controllers\UserCtcontroller');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('role:user');


// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('category/create', [App\Http\Controllers\CategoryProductController::class, 'create']);
// Route::post('category/create', [App\Http\Controllers\CategoryProductController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('role:user');

Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

// // Route::resource('/user', App\Http\Controllers\UserController);


// Route::middleware(['auth', 'user', 'admin'])->group(function () {
//     Route::resource('/product', 'App\Http\Controllers\ProductController');
// });

// // Route::get('/produk', 'App\Http\Controllers\ProdukController@index');

// // Route::resource('produk', ProdukController::class, ['except' => ['create', 'update', 'delete', 'show']]);

// Route::get('/profile', function () {
//     $nama = "Sutia";
//     return view('profile', ['nama' => $nama]); //compact('nama'));
// });

// Route::resource('/profile', App\Http\Controllers\ProfileController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware(['auth', 'user', 'admin'])->group(function () {
//     Route::resource('/product', App\Http\Controllers\ProductController::class);
//     Route::get('admin', function () {
//         return 'admin page';
//     });
// });

Route::middleware(['auth', 'user', 'admin'])->group(function () {
    Route::resource('/categoryproduct', App\Http\Controllers\CategoryProductController::class);
    Route::get('admin', function () {
        return 'admin page';
    });
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// // Route::get('/dashboard', function () {
// //     return Inertia::render('Dashboard');
// // })->middleware(['auth', 'verified'])->name('dashboard');

// // Route::middleware('auth')->group(function () {
// //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// // });



// //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// //Route::get('/home', 'HomeController@index');
// // Route::get('/produk', 'App\Http\Controllers\ProdukController@index');

// // Route::resource('produk', ProdukController::class, ['except' => ['create', 'update', 'delete', 'show']]);

// // Route::get('/profile', function () {
// //     $nama = "Sutia";
// //     return view('profile', ['nama' => $nama]); //compact('nama'));
// // });