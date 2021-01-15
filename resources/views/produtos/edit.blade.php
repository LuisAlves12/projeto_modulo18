@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Encomendas:
@endsection
@section('conteudo')

<form action="{{route('produtos.update',['id_produtos'=>$produtos->id_produto])}}" enctype="multipart/form-data" method="post">
    @method('patch')
    @csrf 

Designacao: <input type="text" name="designacao" value="{{$produtos->designacao}}"><br>
@if($errors->has('designacao'))
Deverá ter um designacao correto<br>
@endif

Stock: <input type="text" name="stock" value="{{$produtos->stock}}"><br>
@if($errors->has('stock'))
Deverá ter um stock correto<br>
@endif

Preço: <input type="text" name="preco" value="{{$produtos->preco}}"><br>
@if($errors->has('preco'))
Deverá ter um preco correto<br>
@endif

Observações: <input type="text" name="observacoes" value="{{$produtos->observacoes}}"><br>
@if($errors->has('observacoes'))
Deverá ter um observacoes correto<br>
@endif

Imagem Produto: <input type="file" name="imagem_produto" value="{{$produtos->imagem_produto}}"><img src="{{asset('imagens/produtos/'.$produtos->imagem_produto)}}" style="width:10%"><br>
@if($errors->has('imagem_produto'))
Deverá ter um Imagem Capa correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection