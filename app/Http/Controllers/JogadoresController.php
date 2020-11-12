<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadoresController extends Controller
{
    //
    public function index(){
        $jogadores= Jogador::all();
        return view('jogadores.index',[
            'jogadores'=>$jogadores
        ]);
    }
    public function show(Request $request){
        $id_jogador = $request->id_jogador;
        $jogador=Jogador::where('id_jogador',$id_jogador)->with('equipas')->first();
        return view('jogadores.show',[
            'jogador'=>$jogador
        ]);
    }
}
