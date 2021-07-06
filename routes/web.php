<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModePageController;
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

Route::get('/beginer', [UserController::class,'beginerModePage']);
Route::get('/nomal', [UserController::class, 'nomalModePage']);
Route::get('/sport', [UserController::class, 'sportModePage']);

Route::get('/mode', [ModePageController::class, 'plyometric']);


