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
@if(Gate::allows('admin'))
<a href="{{route('vendedores.create',['id_vendedor'=>$vendedores->id_vendedor])}}" class="btn btn-info" role="button">Adicionar Vendedor</a>
@endif
@endsection