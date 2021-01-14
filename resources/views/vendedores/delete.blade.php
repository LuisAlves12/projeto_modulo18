@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Encomendas:
@endsection
@section('conteudo')

<form action="{{route('vendedores.destroy',['id_vendedor'=>$vendedores->id_vendedor])}}" method="post">
    @method('delete')
    @csrf 


<input type="hidden" value="{{$vendedores->id_vendedor}}">
<input type="submit" value="Enviar">
</form>
@endsection