@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
<ul>
ID Produto: {{$produtos->id_produtos}}<br>
Designação: {{$produtos->designacao}}<br>
Stock: {{$produtos->stock}}<br>
Preço: {{$produtos->preco}}<br>
Observações: {{$produtos->observacoes}}
</ul>
@endsection