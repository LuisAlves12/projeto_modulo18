<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //
    public function index(){
        $produto= Produto::all();
        return view('produtos.index',[
            'produto'=>$produto
        ]);
    }
    public function show(Request $request){
        $id_produto = $request->id_produtos;
        $produto=Produto::where('id_produto',$id_produto)->with('encomendas')->first();
        return view('produtos.show',[
            'produtos'=>$produto
        ]);
    }
}
