@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Produtos:
@endsection
@section('conteudo')
<ul>
ID Produto: {{$produtos->id_produto}}<br>
Designação: {{$produtos->designacao}}<br>
Stock: {{$produtos->stock}}<br>
Preço: {{$produtos->preco}}<br>
Observações: {{$produtos->observacoes}}
</ul>
<a href="{{route('produtos.edit',['id_produtos'=>$produtos->id_produto])}}" class="btn btn-info" role="button">Editar Produto</a>
<a href="{{route('produtos.deleted',['id_produtos'=>$produtos->id_produto])}}" class="btn btn-info" role="button">Eliminar Produto</a>
@endsection