@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Encomendas:
@endsection
@section('conteudo')

<form action="{{route('encomendas.destroy',['id_encomenda'=>$encomenda->id_encomenda])}}" method="post">
    @method('delete')
    @csrf 


<input type="hidden" value="{{$encomenda->id_encomenda}}">
<input type="submit" value="Enviar">
</form>
@endsection