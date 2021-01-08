@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('cliente.update',['id_cliente'=>$clientes->id_cliente])}}" method="post">
    @method('patch')
    @csrf 

Nome: <input type="text" name="nome" value="{{$clientes->nome}}"><br>
@if($errors->has('nome'))
Deverá ter um nome correto<br>
@endif

Morada: <input type="text" name="morada" value="{{$clientes->morada}}"><br>
@if($errors->has('morada'))
Deverá ter um nome correto<br>
@endif

Telefone: <input name="telefone" value="{{$clientes->telefone}}"><br>
@if($errors->has('telefone'))
Deverá ter um nome correto<br>
@endif

Email: <input type="text" name="email" value="{{$clientes->email}}"><br>
@if($errors->has('email'))
Deverá ter um nome correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection