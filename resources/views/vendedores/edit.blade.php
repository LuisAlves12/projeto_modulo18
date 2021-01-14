@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Vendedores:
@endsection
@section('conteudo')

<form action="{{route('vendedores.update',['id_vendedor'=>$vendedores->id_vendedor])}}" method="post">
    @method('patch')
    @csrf 

Nome: <input type="text" name="nome" value="{{$vendedores->nome}}"><br>
@if($errors->has('nome'))
Deverá ter um nome correto<br>
@endif

Stock: <input type="text" name="especialidade" value="{{$vendedores->especialidade}}"><br>
@if($errors->has('especialidade'))
Deverá ter um especialidade correto<br>
@endif

Preço: <input type="text" name="email" value="{{$vendedores->email}}"><br>
@if($errors->has('email'))
Deverá ter um email correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection