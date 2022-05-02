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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\dienkeController::class, 'index']);
//Route::get('/dien-ke', function () {
//    return "Hello vi-magento. Đây là route đầu tiên.";
//});
Route::get('/dien-ke', [\App\Http\Controllers\dienkeController::class, 'calculateElectric']);
Route::get('/kiemtra', [\App\Http\Controllers\dienkeController::class, 'kiemtra']);
Route::get('/hoa-don', [\App\Http\Controllers\dienkeController::class, 'getHoadon']);

Route::get('/view-giadien', [\App\Http\Controllers\dienkeController::class, 'viewgiadien']);
Route::get('/add-giadien', [\App\Http\Controllers\dienkeController::class, 'themgiadien']);
Route::get('/getgiadien', [\App\Http\Controllers\dienkeController::class, 'getgiadien']);

Route::get('/blockgiadien', [\App\Http\Controllers\dienkeController::class, 'blockgiadien']);
Route::get('/getlog', [\App\Http\Controllers\dienkeController::class, 'getlog']);

