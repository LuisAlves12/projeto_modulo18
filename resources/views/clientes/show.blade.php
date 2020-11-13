@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
<ul>
ID Cliente: {{$cliente->id_cliente}}<br>
Nome: {{$cliente->nome}}<br>
Morada: {{$cliente->morada}}<br>
Telefone: {{$cliente->telefone}}<br>
Email: {{$cliente->email}}
</ul>
@endsection