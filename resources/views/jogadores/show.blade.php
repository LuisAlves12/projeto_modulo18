@extends('layout')
@section('titulo-pagina')
Jogadores_equipas
@endsection
@section('conteudo')
<ul>
ID Jogador: {{$jogador->id_jogador}}<br>
Nome: {{$jogador->nome}}<br>
Nacionalidade: {{$jogador->nacionalidade}}<br>


</ul>
@endsection