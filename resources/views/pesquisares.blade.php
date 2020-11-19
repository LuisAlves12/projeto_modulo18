@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')

@if(isset($resultado))
  @foreach($resultado as $res)
    <h3><a href="{{route('cliente.show', ['id_cliente'=>$res->id_cliente])}}">
    Cliente: {{$res->nome}}</a></h3><br>
  @endforeach
@endif


@if(isset($resultado2))
  @foreach($resultado2 as $res2)
    <h3><a href="{{route('produtos.show', ['id_produtos'=>$res2->id_produto])}}">
    Produto: {{$res2->designacao}}</a></h3><br>
  @endforeach
@endif

@if(isset($resultado3))
  @foreach($resultado3 as $res3)
    <h3><a href="{{route('vendedores.show', ['id_vendedor'=>$res3->id_vendedor])}}">
    Vendedor: {{$res3->nome}}</a></h3><br>
  @endforeach
@endif

<br><br>
@if(isset($pesquisa2))
  <h3>{{$pesquisa2}}</h3>
@endif
@endsection