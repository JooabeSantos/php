<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\eventController;
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

Route::get('/', [eventController::class, 'index']);

Route::get('/listaevents', [eventController::class, 'index']);
Route::get('/listaevent/{id}', [eventController::class, 'show']);

