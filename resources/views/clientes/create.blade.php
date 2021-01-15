@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('cliente.store')}}" enctype="multipart/form-data" method="post">
    @csrf 

Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
@if($errors->has('nome'))
Deverá ter um nome correto<br>
@endif

Morada: <input type="text" name="morada" value="{{old('morada')}}"><br>
@if($errors->has('morada'))
Deverá ter um nome correto<br>
@endif

Telefone: <input name="telefone" value="{{old('telefone')}}"><br>
@if($errors->has('telefone'))
Deverá ter um nome correto<br>
@endif

Email: <input type="text" name="email" value="{{old('email')}}"><br>
@if($errors->has('email'))
Deverá ter um nome correto<br>
@endif

Ficheiro Cliente: <input type="file" name="ficheiro_cliente" value="{{old('ficheiro_cliente')}}"><br>
@if($errors->has('ficheiro_cliente'))
Deverá ter um Ficheiro correto<br>
@endif

Imagem Cliente:  <input type="file" name="imagem_cliente" value=" {{old('imagem_cliente')}}"><br>
@if($errors->has('imagem_cliente'))
Deverá ter um Imagem correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection