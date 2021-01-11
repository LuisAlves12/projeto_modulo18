<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Encomenda;

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
            'id_cliente'=>$cliente
        ]);
    }


    public function create(){
        $encomendas=Encomenda::all();
        return view('clientes.create',[
            'encomendas'=>$encomendas
        ]);
    }

    public function store(Request $request){
        $novoCliente=$request->validate([
            'nome'=>['required','min:3','max:50'],
            'morada'=>['nullable','min:3','max:255'],
            'telefone'=>['required','numeric','min:13'],
            'email'=>['nullable','min:3','max:255']
        ]);
        $cliente=Cliente::create($novoCliente);
        return redirect()->route('cliente.show',[
            'id_cliente'=>$cliente->id_cliente
        ]);
    }

    public function edit(Request $request){
        $id_cliente=$request->id_cliente;
        $clientes=Cliente::where('id_cliente',$id_cliente)->with('encomendas')->first();
        return view('clientes.edit',[
            'clientes'=>$clientes
        ]);
    }

    public function update(Request $request){
        $id_cliente=$request->id_cliente;
        $clientes=Cliente::where('id_cliente',$id_cliente)->with('encomendas')->first();
        $editarCliente=$request->validate([
            'nome'=>['required','min:3','max:50'],
            'morada'=>['nullable','min:3','max:255'],
            'telefone'=>['required','numeric','min:13'],
            'email'=>['nullable','min:3','max:255']
        ]);
        $editCliente=$clientes->update($editarCliente);
        return redirect()->route('cliente.show',[
            'id_cliente'=>$clientes->id_cliente
        ]);
    }


    public function deleted(Request $request){
        $id_cliente=$request->id_cliente;
        $cliente=Cliente::where('id_cliente',$id_cliente)->with('encomendas')->first();
        if(is_null($cliente)){
            return redirect()->route('cliente.index')->with('msg','Não existe este cliente');
        }
        else{
            return view('clientes.delete',['cliente'=>$cliente]);
        }
    }


    public function destroy(Request $request){
        $id_cliente=$request->id_cliente;
        $cliente=Cliente::where('id_cliente',$id_cliente)->with('encomendas')->first();
        if(is_null($cliente)){
            return redirect()->route('cliente.index')->with('msg','Não existe este cliente');
        }
        else{
            $cliente->delete();
            $cliente= Cliente::all();
            return view('clientes.index',[
            'cliente'=>$cliente
            ]);
        }
    }
}
