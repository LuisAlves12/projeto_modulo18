<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;
use App\Models\Equipa;

class ProcuraController extends Controller
{
    //
    public function index(){
        return view('pesquisa');
    }
    public function formenviado(Request $request){
        $jogador=$request->pesquisa;
        $resultado=Jogador::where('nome','Like','%'.$jogador.'%')->get();
        $resultado2=Equipa::where('designacao','Like','%'.$jogador.'%')->get();
        return view('pesquisares',['pesquisa'=>$jogador,'resultado'=>$resultado,'resultado2'=>$resultado2]);
    }
}
