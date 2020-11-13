@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Clientes:
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