<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;

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
}
