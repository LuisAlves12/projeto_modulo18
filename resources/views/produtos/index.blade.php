@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Produtos:
@endsection
@section('conteudo')
<ul>
@foreach($produto as $produtos)
<li>
<a href="{{route('produtos.show', ['id_produtos'=>$produtos->id_produto])}}">
    <h4>{{$produtos->designacao}}</h4>
</a>
</li>
@endforeach
</ul>
@if(Gate::allows('admin'))
<a href="{{route('produtos.create',['id_produtos'=>$produtos->id_produto])}}" class="btn btn-info" role="button">Adicionar Produto</a>
@endif
@endsection