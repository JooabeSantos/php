<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    //
    public function index(){
        //return "index";

        $produtos = Produto::paginate(3);
      
        return view('site.home', compact(''));
    }
    public function show($id){
        
    }
}
