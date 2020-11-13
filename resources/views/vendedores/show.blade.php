@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Vendedores:
@endsection
@section('conteudo')
<ul>
ID Vendedor: {{$vendedor->id_vendedor}}<br>
Nome: {{$vendedor->nome}}<br>
Especialidade: {{$vendedor->especialidade}}<br>
Email: {{$vendedor->email}}<br>
</ul>
@endsection