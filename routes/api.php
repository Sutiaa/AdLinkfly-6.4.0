<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('product', 'App\Http\Controllers\ApiController@product_index');
Route::post('product/add', 'App\Http\Controllers\ApiController@product_store');
Route::get('product/{id}', 'App\Http\Controllers\ApiController@product_by_id');
Route::patch('product/{id}', 'App\Http\Controllers\ApiController@product_update');
Route::delete('product/{id}', 'App\Http\Controllers\ApiController@product_delete');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoryproduct', 'App\Http\Controllers\ApiController@categoryproduct_index');
Route::post('categoryproduct/add', 'App\Http\Controllers\ApiController@categoryproduct_store');
Route::get('categoryproduct/{id}', 'App\Http\Controllers\ApiController@categoryproduct_by_id');
Route::patch('categoryproduct/{id}', 'App\Http\Controllers\ApiController@categoryproduct_update');
Route::delete('categoryproduct/{id}', 'App\Http\Controllers\ApiController@categoryproduct_delete');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product_form', 'App\Http\Controllers\ApiController@create_product');
Route::post('product_update/{id}', 'App\Http\Controllers\ApiController@product_update');
