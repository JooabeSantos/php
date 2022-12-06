<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/', [ProdutosController::class, 'index']);
Route::get('/produto/{id}', [SiteController::class, 'details'])->name('site.details');


Route::get('/add', function () {
    return view('site.add');
});
