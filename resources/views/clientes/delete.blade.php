@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('cliente.destroy',['id_cliente'=>$cliente->id_cliente])}}" method="post">
    @method('delete')
    @csrf 


<input type="hidden" value="{{$cliente->id_cliente}}">
<input type="submit" value="Enviar">
</form>
@endsection