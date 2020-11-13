@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Pesquisa
@endsection
@section('conteudo')
<form method="post" action="{{route('pesquisa.show')}}">
    @csrf
<label for="pesquisa">Pesquisa</label>
<input type="text" name="pesquisa">
<button type="submit">Enviar</button>
<br><br>
@endsection