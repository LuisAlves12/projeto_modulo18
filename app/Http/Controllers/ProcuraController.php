<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Vendedor;

class ProcuraController extends Controller
{
    //
    public function index(){
        return view('pesquisa');
    }
    public function formenviado(Request $request){
        $string=$request->pesquisa;
        if($string !=null){
            $string=$request->pesquisa;
            $resultado=Cliente::where('nome','Like','%'.$string.'%')->get();
            $resultado2=Produto::where('designacao','Like','%'.$string.'%')->get();
            $resultado3=Vendedor::where('nome','Like','%'.$string.'%')->get();
            return view('pesquisares',['pesquisa'=>$string,'resultado'=>$resultado,'resultado2'=>$resultado2,'resultado3'=>$resultado3]);
        }
        else{
            $string2="Nao inseriu nenhum valor, digite algum valor";
            return view('pesquisares',['pesquisa2'=>$string2]);
        }
        
    }
}
