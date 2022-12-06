<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
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

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');


Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');

Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');

Route::post('/remove', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');

Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');

Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');



/*

Route::get('/empresa', function(){
    return view('site/empresa');
});

*/

/*Route::any('/any', function(){
    return "Permite todo tipo de http";
});

Route::match(['get', 'post'], '/match', function(){
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: ".$id. "<br>"."A categoria é: ".$cat;
});

Route::get('/sobre', function(){
    return redirect('/empresa');
});


Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

// Redirect por name
Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

*/

/*Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return "dashboard";
    })->name('admin.deshboard');
    
    Route::get('users', function(){
        return "users";
    })->name('admin.users');
    
    Route::get('clientes', function(){
        return "clientes";
    })->name('admin.clientes');
});
*/



// AGRUPAMENTO POR NAME

/*
Route::name('admin.')->group(function(){
    Route::get('admin/dashboard', function(){
        return "dashboard";
    })->name('deshboard');
    
    Route::get('admin/users', function(){
        return "users";
    })->name('users');
    
    Route::get('admin/clientes', function(){
        return "clientes";
    })->name('clientes');
});

*/





