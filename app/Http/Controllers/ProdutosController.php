<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Auth;
use App\Models\Produto;
use App\Models\Encomenda;
use App\Models\Like;

class ProdutosController extends Controller
{
    //
    public function index(){
        $produto= Produto::all();
        return view('produtos.index',[
            'produto'=>$produto
        ]);
    }


    public function show(Request $request){
        $id_produtos = $request->id_produtos;
        $utilizador="";
        $likes = Like::where('id_produto',$id_produto)->count();
        $produto=Produto::where('id_produto',$id_produto)->with('encomendas')->first();
        return view('produtos.show',[
            'produtos'=>$produto,
            'likes'=>$likes,
            'utilizador'=>$utilizador
        ]);
    }

    public function create(){
        if(Gate::allows('admin')){
            $encomenda=Encomenda::all();
            return view('produtos.create',[
                'encomenda'=>$encomenda
            ]);
        }
        else{
            return redirect()->route('produtos.index')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function store(Request $request){
        $novoProduto=$request->validate([
            'designacao'=>['required','min:5','max:100'],
            'stock'=>['nullable','numeric','min:1'],
            'preco'=>['nullable','numeric','min:1'],
            'imagem_produto'=>['image','nullable','max:2000'],
            'observacoes'=>['nullable','min:5','max:255']
        ]);
        if($request->hasfile('imagem_produto')){
            $nomeImagem=$request->file('imagem_produto')->getClientOriginalName();
            $nomeImagem=time().'_'.$nomeImagem;
            $guardarImagem=$request->file('imagem_produto')->storeAs('imagens/produtos',$nomeImagem);
            $novoProduto['imagem_produto']=$nomeImagem;
        }
        if(Gate::allows('admin')){
            $produto=Produto::create($novoProduto);
            return redirect()->route('produtos.show',[
                'id_produtos'=>$produto->id_produto
            ]);
        }
        else{
            return redirect()->route('produtos.index')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function edit(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        if(Gate::allows('admin')){
            return view('produtos.edit',[
                'produtos'=>$produto
            ]);
        }
        else{
            return redirect()->route('produtos.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function update(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        $editProduto=$request->validate([
            'designacao'=>['required','min:5','max:100'],
            'stock'=>['nullable','numeric','min:1'],
            'imagem_produto'=>['image','nullable','max:2000'],
            'preco'=>['nullable','numeric','min:1'],
            'observacoes'=>['nullable','min:5','max:255']
        ]);
        if($request->hasfile('imagem_produto')){
            $nomeImagem=$request->file('imagem_produto')->getClientOriginalName();
            $nomeImagem=time().'_'.$nomeImagem;
            $guardarImagem=$request->file('imagem_produto')->storeAs('imagens/produtos',$nomeImagem);
            $editProduto['imagem_produto']=$nomeImagem;
        }
        if(Gate::allows('admin')){
            $editarProduto=$produto->update($editProduto);
            return redirect()->route('produtos.show',[
                'id_produtos'=>$produto->id_produto
            ]);
        }
        else{
            return redirect()->route('produtos.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function deleted(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        if(Gate::allows('admin')){
            if(is_null($produto)){
                return redirect()->route('produtos.index')->with('msg','Não existe este produto');
            }
            else{
                return view('produtos.delete',['produtos'=>$produto]);
            }
        }
        else{
            return redirect()->route('produtos.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }

    public function destroy(Request $request){
        $id_produtos=$request->id_produtos;
        $produto=Produto::where('id_produto',$id_produtos)->with('encomendas')->first();
        if(Gate::allows('admin')){
            if(is_null($produto)){
                return redirect()->route('produtos.index')->with('msg','Não existe este produto');
            }
            else{
                $produto->delete();
                return view('produtos.delete',['produtos'=>$produto]);
            }
        }
        else{
            return redirect()->route('produtos.show')
            ->with('msg','Não têm permissão para aceder a area pretendida');
        }
    }


    public function likes(Request $request){
        $id_produto = $request->id_produtos;
        if(Auth()->check()){
            $idUser = Auth::user()->id;
            $like = Like::where('id_user',$idUser)->where('id_produto',$id_produto)->first();
            if($like == null){
                $novoLike['id_user']=$idUser;
                $novoLike['id_produto']=$id_produto;
                $like = Like::create($novoLike);
                return redirect()->route('produtos.show',['id_produto'=>$id_produto]);
            }
            else{
                return redirect()->route('produtos.show',['id_produto'=>$id_produto]);
            }
        }
        else{
            return redirect()->route('produtos.show',['id_produto'=>$id_produto]->with('msg','Não está logado'));
        }
    }



}
