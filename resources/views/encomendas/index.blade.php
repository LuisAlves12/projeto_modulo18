@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Resultado da pesquisa:
@endsection
@section('conteudo')
<ul>
@foreach($encomenda as $encomendas)
<li>
<a href="{{route('encomendas.show', ['id_encomenda'=>$encomendas->id_encomenda])}}">
    <h4>{{$encomendas->id_encomenda}}</h4>
</a>
</li>
@endforeach
</ul>
@endsection