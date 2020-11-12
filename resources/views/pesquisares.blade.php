@extends('layout')
@section('titulo-pagina')
Livraria
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
@foreach($resultado as $res)
    <a href="{{route('jogadores.show', ['id_jogador'=>$res->id_jogador])}}">
    <h4>{{$res->nome}}</h4>
    </a>
    <br>
@endforeach
@foreach($resultado2 as $res2)
    <a href="{{route('equipas.show', ['id_equipa'=>$res2->id_equipa])}}">
    <h4>{{$res2->designacao}}</h4>
    </a>
    <br>
@endforeach
@endsection