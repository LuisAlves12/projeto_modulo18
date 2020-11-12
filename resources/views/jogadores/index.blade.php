@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('conteudo')
<ul>
@foreach($jogadores as $jogador)
<li>
    <h4>{{$jogador->nome}}</h4>
</li>
@endforeach
</ul>
@endsection