@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
@foreach($resultado as $res)
    <a href="{{route('cliente.show', ['id_cliente'=>$res->id_cliente])}}">
    <h4>Cliente: {{$res->nome}}</h4>
    </a>
    <br>
@endforeach
@foreach($resultado2 as $res2)
    <a href="{{route('produtos.show', ['id_produtos'=>$res2->id_produto])}}">
    <h4>Produto: {{$res2->designacao}}</h4>
    </a>
    <br>
@endforeach
@endsection