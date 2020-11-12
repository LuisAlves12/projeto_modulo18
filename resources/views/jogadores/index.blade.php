@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('Titulo')
Jogadores
@endsection
@section('conteudo')
<ul>
@foreach($jogadores as $jogador)
<li>
<a href="{{route('jogadores.show', ['id_jogador'=>$jogador->id_jogador])}}">
    <h4>{{$jogador->nome}}</h4>
</a>
</li>
@endforeach
</ul>
@endsection