@extends('layout')
@section('titulo-pagina')
Encomendas
@endsection
@section('Titulo')
Clientes:
@endsection
@section('conteudo')
<ul>
ID Cliente: {{$id_cliente->id_cliente}}<br>
Nome: {{$id_cliente->nome}}<br>
Morada: {{$id_cliente->morada}}<br>
Telefone: {{$id_cliente->telefone}}<br>
Email: {{$id_cliente->email}}<br>
Ficheiro Cliente: @if(isset($id_cliente->ficheiro_cliente))<a href="{{asset('imagens/ficheiros/'.$id_cliente->ficheiro_cliente)}}" target="_blank">Ficheiros</a>@endif<br>
Imagem Cliente: @if(isset($id_cliente->imagem_cliente ))<img src="{{asset('imagens/clientes/'.$id_cliente->imagem_cliente)}}" style="width:10%">@endif<br>

</ul>
@if(Gate::allows('admin'))
<a href="{{route('cliente.edit',['id_cliente'=>$id_cliente->id_cliente])}}" class="btn btn-info" role="button">Editar Cliente</a>
<a href="{{route('cliente.deleted',['id_cliente'=>$id_cliente->id_cliente])}}" class="btn btn-info" role="button">Eliminar Cliente</a>
@endif
@endsection