<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;

class ProcuraController extends Controller
{
    //
    public function index(){
        return view('pesquisa');
    }
    public function formenviado(Request $request){
        $string=$request->pesquisa;
        $resultado=Cliente::where('nome','Like','%'.$string.'%')->get();
        $resultado2=Produto::where('designacao','Like','%'.$string.'%')->get();
        return view('pesquisares',['pesquisa'=>$string,'resultado'=>$resultado,'resultado2'=>$resultado2]);
    }
}
