<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Auth;
use App\Models\Vendedor;
use App\Models\Encomenda;

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

    public function create(){
        if(Gate::allows('admin')){
            $encomenda=Encomenda::all();
            return view('vendedores.create',[
                'encomenda'=>$encomenda
            ]);
        }
        else{
            return redirect()->route('vendedores.index')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function store(Request $request){
        $novoVendedor=$request->validate([
            'nome'=>['required','min:3','max:50'],
            'especialidade'=>['nullable','min:1','max:50'],
            'email'=>['nullable','min:3','max:255']
        ]);
        if(Gate::allows('admin')){
            $vendedor=Vendedor::create($novoVendedor);
            return redirect()->route('vendedores.show',[
                'id_vendedor'=>$vendedor->id_vendedor
            ]);
        }
        else{
            return redirect()->route('vendedores.index')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function edit(Request $request){
        $id_vendedor=$request->id_vendedor;
        $vendedor=Vendedor::where('id_vendedor',$id_vendedor)->with('encomendas')->first();
        if(Gate::allows('admin')){
            return view('vendedores.edit',[
                'vendedores'=>$vendedor
            ]);
        }
        else{
            return redirect()->route('vendedores.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function update(Request $request){
        $id_vendedor=$request->id_vendedor;
        $vendedores=Vendedor::where('id_vendedor',$id_vendedor)->with('encomendas')->first();
        $editVendedor=$request->validate([
            'nome'=>['required','min:3','max:50'],
            'especialidade'=>['nullable','min:1','max:50'],
            'email'=>['nullable','min:3','max:255']
        ]);
        if(Gate::allows('admin')){
            $editarVendedor=$vendedores->update($editVendedor);
            return redirect()->route('vendedores.show',[
                'id_vendedor'=>$vendedores->id_vendedor
            ]);
        }
        else{
            return redirect()->route('vendedores.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function deleted(Request $request){
        $id_vendedor=$request->id_vendedor;
        $vendedores=Vendedor::where('id_vendedor',$id_vendedor)->with('encomendas')->first();
        if(Gate::allows('admin')){
            if(is_null($vendedores)){
                return redirect()->route('vendedores.index')->with('msg','Não existe este vendedor');
            }
            else{
                return view('vendedores.delete',['vendedores'=>$vendedores]);
            }
        }
        else{
            return redirect()->route('vendedores.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function destroy(Request $request){
        $id_vendedor=$request->id_vendedor;
        $vendedores=Vendedor::where('id_vendedor',$id_vendedor)->with('encomendas')->first();
        if(Gate::allows('admin')){
            if(is_null($vendedores)){
                return redirect()->route('vendedores.index')->with('msg','Não existe este vendedor');
            }
            else{
                $vendedores->delete();
                return view('vendedores.delete',['vendedores'=>$vendedores]);
            }
        }
        else{
            return redirect()->route('vendedores.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }
}
