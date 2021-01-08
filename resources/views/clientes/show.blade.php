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

<a href="{{route('cliente.edit',['id_cliente'=>$cliente->id_cliente])}}" class="btn btn-info" role="button">Editar Cliente</a>
<a href="{{route('cliente.deleted',['id_cliente'=>$cliente->id_cliente])}}" class="btn btn-info" role="button">Eliminar Cliente</a>

@endsection