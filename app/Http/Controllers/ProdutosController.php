<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Encomenda;

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

    public function create(){
        $encomenda=Encomenda::all();
        return view('produtos.create',[
            'encomenda'=>$encomenda
        ]);
    }

    public function store(Request $request){
        $novoProduto=$request->validate([
            'designacao'=>['required','min:5','max:100'],
            'stock'=>['nullable','numeric','min:1'],
            'preco'=>['nullable','numeric','min:1'],
            'observacoes'=>['nullable','min:5','max:255']
        ]);
        $produto=Produto::create($novoProduto);
        return redirect()->route('produtos.show',[
            'id_produtos'=>$produto->id_produto
        ]);

    }

    public function edit(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        return view('produtos.edit',[
            'produtos'=>$produto
        ]);
    }

    public function update(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        $editProduto=$request->validate([
            'designacao'=>['required','min:5','max:100'],
            'stock'=>['nullable','numeric','min:1'],
            'preco'=>['nullable','numeric','min:1'],
            'observacoes'=>['nullable','min:5','max:255']
        ]);
        $editarProduto=$produto->update($editProduto);
        return redirect()->route('produtos.show',[
            'id_produtos'=>$produto->id_produto
        ]);
    }

    public function deleted(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        if(is_null($produto)){
            return redirect()->route('produtos.index')->with('msg','Não existe este produto');
        }
        else{
            return view('produtos.delete',['produtos'=>$produto]);
        }
    }

    public function destroy(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        if(is_null($produto)){
            return redirect()->route('produtos.index')->with('msg','Não existe este produto');
        }
        else{
            $produto->delete();
            return view('produtos.delete',['produtos'=>$produto]);
        }
    }


}
