<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedoresController extends Controller
{
    //
    public function index(){
        $vendedor= Vendedor::all();
        return view('vendedores.index',[
            'vendedor'=>$vendedor
        ]);
    }
    public function show(Request $request){
        $id_vendedor = $request->id_vendedor;
        $vendedor=Vendedor::where('id_vendedor',$id_vendedor)->with('encomendas')->first();
        return view('vendedores.show',[
            'vendedor'=>$vendedor
        ]);
    }
}
