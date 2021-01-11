<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;
use App\Models\Vendedor;
use App\Models\Cliente;
use App\Models\Produto;

class EncomendasController extends Controller
{
    //
    public function index(){
        $encomenda= Encomenda::all();
        return view('encomendas.index',[
            'encomenda'=>$encomenda
        ]);
    }


    public function show(Request $request){
        $id_encomenda = $request->id_encomenda;
        $encomenda=Encomenda::where('id_encomenda',$id_encomenda)->with(['produtos','clientes','vendedores'])->first();
        return view('encomendas.show',[
            'encomenda'=>$encomenda
        ]);
    }


    public function create(){
        $vendedor=Vendedor::all();
        $cliente=Cliente::all();
        $produto=Produto::all();
        return view('encomendas.create',[
            'vendedor'=>$vendedor,
            'cliente'=>$cliente,
            'produto'=>$produto
        ]);
    }


    public function store(Request $request){
        $novaEncomenda=$request->validate([
            'id_vendedor'=>['required','numeric'],
            'id_cliente'=>['required','numeric'],
            'id_produto'=>['required','numeric'],
            'data'=>['nullable','date'],
            'observacoes'=>['nullable','min:3','max:255']
        ]);
        $produto=$request->id_produto;
        $encomenda=Encomenda::create($novaEncomenda);
        $encomenda->produtos()->attach($produto);
        return redirect()->route('encomendas.show',[
            'id_encomenda'=>$encomenda->id_encomenda
        ]);
    }

    public function edit(Request $request){
        $id_encomenda = $request->id_encomenda;
        $encomenda=Encomenda::where('id_encomenda',$id_encomenda)->with(['produtos','clientes','vendedores'])->first();
        $vendedor=Vendedor::all();
        $cliente=Cliente::all();
        $produto=Produto::all();
        $produtosEncomendas=[];
        foreach($encomenda->produtos as $produto){
            $produtosEncomendas[]=$produto->id_produto;
        }
        return view('encomendas.edit',[
            'encomenda'=>$encomenda,
            'vendedor'=>$vendedor,
            'cliente'=>$cliente,
            'produto'=>$produto,
            'produtosEncomendas'=>$produtosEncomendas
        ]);
    }

    public function update(Request $request){
        $id_encomenda = $request->id_encomenda;
        $encomenda=Encomenda::where('id_encomenda',$id_encomenda)->with(['produtos','clientes','vendedores'])->first();
        $editEncomenda=$request->validate([
            'id_vendedor'=>['required','numeric'],
            'id_cliente'=>['required','numeric'],
            'id_produto'=>['required','numeric'],
            'data'=>['nullable','date'],
            'observacoes'=>['nullable','min:3','max:255']
        ]);
        $produto=$request->id_produto;
        $editarEncomenda=$encomenda->update($editEncomenda);
        $encomenda->produtos()->sync($produto);
        return redirect()->route('encomendas.show',[
            'id_encomenda'=>$encomenda->id_encomenda
        ]);
    }

    public function deleted(Request $request){
        $id_encomenda = $request->id_encomenda;
        $encomenda=Encomenda::where('id_encomenda',$id_encomenda)->with(['produtos','clientes','vendedores'])->first();
        if(is_null($encomenda)){
            return redirect()->route('encomendas.index')->with('msg','Não existe esta encomenda');
        }
        else{
            return view('encomendas.delete',['encomenda'=>$encomenda]);
        }
    }

    public function destroy(Request $request){
        $id_encomenda = $request->id_encomenda;
        $encomenda=Encomenda::where('id_encomenda',$id_encomenda)->with(['produtos','clientes','vendedores'])->first();
        if(is_null($encomenda)){
            return redirect()->route('encomendas.index')->with('msg','A encomenda não existe');
        }
        else{
            $encomenda->delete();
            return redirect()->route('encomendas.index');
        }
    }
}
