@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
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
@endsection