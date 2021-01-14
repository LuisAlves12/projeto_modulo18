@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('vendedores.store')}}" method="post">
    @csrf 

Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
@if($errors->has('nome'))
Deverá ter um nome correto<br>
@endif

Especialidade: <input type="text" name="especialidade" value="{{old('especialidade')}}"><br>
@if($errors->has('especialidade'))
Deverá ter um especialidade correto<br>
@endif

Email: <input type="text" name="email" value="{{old('email')}}"><br>
@if($errors->has('email'))
Deverá ter um email correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection