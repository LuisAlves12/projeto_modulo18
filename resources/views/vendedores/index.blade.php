@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Vendedores:
@endsection
@section('conteudo')
<ul>
@foreach($vendedor as $vendedores)
<li>
<a href="{{route('vendedores.show', ['id_vendedor'=>$vendedores->id_vendedor])}}">
    <h4>{{$vendedores->nome}}</h4>
</a>
</li>
@endforeach
</ul>
@endsection