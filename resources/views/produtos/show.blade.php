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
@endsection