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
            'data'=>['nullable','date'],
            'observacoes'=>['nullable','min:3','max:255']
        ]);
        $encomenda=Encomenda::create($novaEncomenda);
        return redirect()->route('encomendas.show',[
            'id_encomenda'=>$encomenda->id_encomenda
        ]);
    }
}
