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
@if(Gate::allows('admin'))
<a href="{{route('vendedores.edit',['id_vendedor'=>$vendedor->id_vendedor])}}" class="btn btn-info" role="button">Editar Vendedor</a>
<a href="{{route('vendedores.deleted',['id_vendedor'=>$vendedor->id_vendedor])}}" class="btn btn-info" role="button">Eliminar Vendedor</a>
@endif
@endsection