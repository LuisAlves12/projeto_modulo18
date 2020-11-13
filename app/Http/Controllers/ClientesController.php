<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function index(){
        $cliente= Cliente::all();
        return view('clientes.index',[
            'cliente'=>$cliente
        ]);
    }
    public function show(Request $request){
        $id_cliente = $request->id_cliente;
        $cliente=Cliente::where('id_cliente',$id_cliente)->with('encomendas')->first();
        return view('clientes.show',[
            'cliente'=>$cliente
        ]);
    }
}
