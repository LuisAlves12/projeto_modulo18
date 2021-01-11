@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')
<ul>
ID Cliente: {{$id_cliente->id_cliente}}<br>
Nome: {{$id_cliente->nome}}<br>
Morada: {{$id_cliente->morada}}<br>
Telefone: {{$id_cliente->telefone}}<br>
Email: {{$id_cliente->email}}
</ul>

<a href="{{route('cliente.edit',['id_cliente'=>$id_cliente->id_cliente])}}" class="btn btn-info" role="button">Editar Cliente</a>
<a href="{{route('cliente.deleted',['id_cliente'=>$id_cliente->id_cliente])}}" class="btn btn-info" role="button">Eliminar Cliente</a>

@endsection