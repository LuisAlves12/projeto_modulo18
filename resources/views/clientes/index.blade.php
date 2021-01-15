@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')
<ul>
@foreach($cliente as $clientes)
<li>
<a href="{{route('cliente.show', ['id_cliente'=>$clientes->id_cliente])}}">
    <h4>{{$clientes->nome}}</h4>
</a>
</li>
@endforeach
</ul>
@if(Gate::allows('admin'))
<a href="{{route('cliente.create')}}" class="btn btn-info" role="button">Adiciona clientes</a>
@endif
@endsection