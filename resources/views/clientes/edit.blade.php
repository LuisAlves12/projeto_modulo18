«@extends('layout')
@section('titulo-pagina')
Projeto
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')

<form action="{{route('cliente.update',['id_cliente'=>$clientes->id_cliente])}}" enctype="multipart/form-data"  method="post">
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

Ficheiro Cliente: <input type="file" name="ficheiro_cliente" value="{{$clientes->ficheiro_cliente}}"><a href="{{asset('imagens/ficheiros/'.$clientes->ficheiro_cliente)}}" target="_blank">Ficheiro</a><br>
@if($errors->has('ficheiro_cliente'))
Deverá ter um Ficheiro correto<br>
@endif

Imagem Cliente: <input type="file" name="imagem_cliente" value="{{$clientes->imagem_cliente}}"><img src="{{asset('imagens/clientes/'.$clientes->imagem_cliente)}}" style="width:10%"><br>
@if($errors->has('imagem_cliente'))
Deverá ter um Imagem Capa correto<br>
@endif

<input type="submit" value="Enviar">
</form>
@endsection