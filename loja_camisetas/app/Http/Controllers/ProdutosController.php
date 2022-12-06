<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('site.home', compact('produtos'));
    }

    public function details ($id){

        $produto = Produto::where('id', $id)->first();
        
        return view('site.details', compact('produto'));
       
    }

    
}