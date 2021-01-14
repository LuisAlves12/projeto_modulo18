@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Produtos:
@endsection
@section('conteudo')

<form action="{{route('produtos.destroy',['id_produtos'=>$produtos->id_produto])}}" method="post">
    @method('delete')
    @csrf 


<input type="hidden" value="{{$produtos->id_produto}}">
<input type="submit" value="Enviar">
</form>
@endsection