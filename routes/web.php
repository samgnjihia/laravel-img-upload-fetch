<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreImageController;

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
Route::get('/store_image', [StoreImageController::class, 'index']);
Route::post('store_image/insert_image', [StoreImageController::class, 'insert_image']);
Route::get('store_image/fetch_image/{id}', [StoreImageController::class, 'fetch_image']);

