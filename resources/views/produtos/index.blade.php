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
@endsection